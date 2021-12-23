<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cnp extends CI_Controller
{
	public function __Construct(){
        parent::__Construct();
		ini_set('date.timezone', 'Asia/Jakarta');

		$this->lang->load('app_lang');
	}
	
	public function index()
	{
// echo $this->QueryModel->test();
// die;
		// $user_agent = $_SERVER['HTTP_USER_AGENT'];
		// echo $user_agent;
		// die;
		// var_dump($this->QueryModel->_jobvacancyDataQuery());
		// die;
		
		//echo $this->ltp->test();
		// echo $this->ltp->ltp_id();
		//  die;
		//echo $this->ltp->ltp_IP_ACCESS();
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		if($this->session->userdata('_id')){
			$data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
		}
		$data['job_vacancy'] = $this->QueryModel->_jobvacancyDataQueryLimit();
		$data['actifity_data'] = $this->QueryModel->_activityQUERYDATALimit();
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
        if ($this->form_validation->run() == false){
			$this->load->view('templates/public/header');
			$this->load->view('home',$data);
			$this->load->view('templates/public/footer');
		}else{
			$this->PriLogin();
		}
	}
	private function PriLogin(){
		$this->AuthModel->_Login();
	}
	public function register(){
		if($this->session->userdata('_id')){
			redirect('');
		}
		$this->form_validation->set_rules('nim', 'Nim', 'required|trim|numeric|is_unique[users.nim]');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[confirm_password]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|matches[password]');
		$this->form_validation->set_rules('phone', 'Phone Or Whatsapp Number', 'trim|required|numeric');
		$this->form_validation->set_rules('tempat_tanggal_lahir', 'Date Of Birth', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Gender', 'trim|required');
		$this->form_validation->set_rules('jurusan', 'Majors', 'trim|required');
		$data['job_vacancy'] = $this->QueryModel->_jobvacancyDataQueryLimit();
		$data['actifity_data'] = $this->QueryModel->_activityQUERYDATALimit();
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		if ($this->form_validation->run() == false){
			$this->load->view('templates/public/header');
			$this->load->view('register',$data);
			$this->load->view('templates/public/footer');
		}else{
			$this->AuthModel->_Users_REGISTER();
		}
	}
	public function logout(){
		if($this->session->userdata('_id')){
			$data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
		}
		$this->AuthModel->_CheckNotLogin(); 
		$this->AuthModel->_Logout();
	}
	public function jobvacancy(){
		if($this->session->userdata('_id')){
			$data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
		}
		$data['job_vacancy'] = $this->QueryModel->_jobvacancyDataQueryWhereDate();
		// var_dump( $this->QueryModel->_jobvacancyDataQueryWhereDate());
		// die;
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$this->load->view('templates/public/header');
		$this->load->view('job_vacancy',$data);
		$this->load->view('templates/public/footer');
	}
	public function jobvacancydeteil($ID_VACANCY){
		if($this->session->userdata('_id')){
			$data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
		}
		$data['job_vacancy_one'] = $this->QueryModel->_jobvacancyDataQueryOne($ID_VACANCY);
		$data['my_cv'] = $this->QueryModel->_CommanditaireVennootschapDataQuery();
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$this->load->view('templates/public/header');
		$this->load->view('job_vacancy_one',$data);
		$this->load->view('templates/public/footer');
	}
	public function language(){
		if($this->session->userdata('_id')){
			$data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
		}
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$data['language'] = $this->QueryModel->Lang();
		$this->load->view('templates/public/header');
		$this->load->view('language',$data);
		$this->load->view('templates/public/footer');
	}
	public function downloadposterfile($ID_VACANCY){
		$this->AuthModel->_CheckNotLogin();
		$this->QueryModel->_Account($this->session->userdata('_id'));
		$this->AcctionsModel->_DownloadPosterFile($ID_VACANCY);
	}
	public function sendjopapplication($ID_VACANCY){
		$this->AuthModel->_CheckNotLogin();
		if($this->session->userdata('_id')){
			$data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
		}
		$this->form_validation->set_rules('cv_send', 'Commanditaire Vennootschap', 'trim|required');
		if ($this->form_validation->run() == false){
			$res =[
				'status'=> "false",
				'results'=> [
					'msg'=>$this->lang->line('Not_knowing')
				]
			];
			echo json_encode($res);
		}else{
			$this->AcctionsModel->_Sendjopapplication($ID_VACANCY);
		}
	}
	public function company(){
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$data['company'] = $this->QueryModel->_CompanyProfileDataQuery();
		$this->load->view('templates/public/header');
		$this->load->view('company',$data);
		$this->load->view('templates/public/footer');
	}
	public function companyprofile($_ID_COMPANY){
		if($this->QueryModel->_CompanyProfileDataQueryOne($_ID_COMPANY)){
			$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
			$data['company'] = $this->QueryModel->_CompanyProfileDataQueryOne($_ID_COMPANY);
			$data['company_gallery'] = $this->QueryModel->_CompanyGalleryDataQueryOne($_ID_COMPANY);
			$this->load->view('templates/public/header');
			$this->load->view('company_profile',$data);
			$this->load->view('templates/public/footer');
		}else {
			redirect('company');
		}
	}
	public function jobseekres(){
		$data['job_seekres'] = $this->QueryModel->_JobSeekresQueryData();
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$data['code_mi'] = $this->QueryModel->_JobSeekresQueryDataMI();
		$data['code_tm'] = $this->QueryModel->_JobSeekresQueryDataTM();
		$data['code_te'] = $this->QueryModel->_JobSeekresQueryDataTE();
		$this->load->view('templates/public/header');
		$this->load->view('job_seekres',$data);
		$this->load->view('templates/public/footer');
	}
	public function jobseekresmajors($IDMAJOR){
		$data['job_seekres'] = $this->QueryModel->_JobSeekresQueryDataByMajor($IDMAJOR);
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$this->load->view('templates/public/header');
		$this->load->view('job_seekres_major',$data);
		$this->load->view('templates/public/footer');
	}
	public function jobseekresdetail($DATA_ID_SEEKRES){
		$data['ability_user_data'] = $this->QueryModel->_abilityUserDATAPublic($DATA_ID_SEEKRES);
		$data['experience_user_data'] = $this->QueryModel->_experienceUserDATA($DATA_ID_SEEKRES);
		$data['seekres'] = $this->QueryModel->_JobSeekresQueryDataOne($DATA_ID_SEEKRES);
		$data['certificate_user_data'] = $this->QueryModel->_certificateUserDATAPUBLIC($DATA_ID_SEEKRES);
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$this->load->view('templates/public/header');
		$this->load->view('job_seekres_one',$data);
		$this->load->view('templates/public/footer');
	}
	public function jobseekrescertificate($DATA_ID_certificate){
		$data['certificate_data'] = $this->QueryModel->_certificateDATAPUBLIC_ONE($DATA_ID_certificate);
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$this->load->view('templates/public/header');
		$this->load->view('job_seekres_certificate',$data);
		$this->load->view('templates/public/footer');
	}
	public function activity(){
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$data['actifity_data'] = $this->QueryModel->_activityQUERYDATA();
		$this->load->view('templates/public/header');
		$this->load->view('activity',$data);
		$this->load->view('templates/public/footer');
	}
	public function activitydetail($_ID_ACTIVITY){
		$data['actifity_data'] = $this->QueryModel->_activityQUERYDATA_Not($_ID_ACTIVITY);
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$data['actifity'] = $this->QueryModel->_activityQUERYDATAOne($_ID_ACTIVITY);
		$this->load->view('templates/public/header');
		$this->load->view('activity_one',$data);
		$this->load->view('templates/public/footer');
	}
	public function lookScreen(){
		if($this->session->userdata('screen')){
			redirect('look-screen');
		}
		$this->AuthModel->LookScreen();
	}
	public function screen(){
		$data['myaccount'] = $this->QueryModel->SESSIONSCREEN($this->session->userdata('screen'));
		$data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false){
			$this->load->view('look',$data);
		}else{
			$this->AuthModel->OpenScreen();
		}
	}
}