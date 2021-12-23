<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __Construct(){
        parent::__Construct();
        $this->AuthModel->_CheckMahasiswaAccess();
        $this->AuthModel->_CheckNotLogin(); 
        $this->AuthModel->Verification_Token_cookies();
    
        ini_set('date.timezone', 'Asia/Jakarta');

		$this->lang->load('app_lang');
    }
    public function index(){
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $this->load->view('templates/public/header');
        $this->load->view('account',$data);
        $this->load->view('templates/public/footer');
    }
    public function profile($_ID){
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $this->load->view('templates/public/header');
        $this->load->view('myaccount',$data);
        $this->load->view('templates/public/footer');
    }
    public function account($_ID){
        $this->QueryModel->_Account($_ID);
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
        $this->form_validation->set_rules('tempat_tanggal_lahir', 'Date Of Birth', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Gender', 'trim|required');
        $this->form_validation->set_rules('status_pernikahan', 'Marital Status', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Address', 'trim|required');
        if ($this->form_validation->run() == false){
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('maek_sure')
                    ]
            ];
            echo json_encode($res);
        }else{
            $this->AuthModel->_AccountUpdate($_ID);
        }
    }
    public function password($_ID){
        $this->QueryModel->_Account($_ID);
        $this->form_validation->set_rules('old_password', 'Password', 'required|trim');
        $this->form_validation->set_rules('new_password', 'Password', 'required|trim|min_length[8]|matches[confirm_password]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|matches[new_password]');
        if ($this->form_validation->run() == false){
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('maek_sure')
                    ]
            ];
            echo json_encode($res);
        }else{
            $this->AuthModel->_AccountUpdatePassword($_ID);
        }
    }

    public function photo($_ID){
        $this->AuthModel->_photo($_ID);
    }
    public function personaldata($_ID){
        $this->form_validation->set_rules('tinggi', 'Height', 'trim|required|numeric');
        $this->form_validation->set_rules('berat', 'Weight', 'trim|required|numeric');
        $this->form_validation->set_rules('negara', 'Country', 'trim|required');
        $this->form_validation->set_rules('sim', 'Vehicle Sim', 'trim|required');
        $this->form_validation->set_rules('golonagn_darah', 'Blood group', 'trim|required');
        $this->form_validation->set_rules('fisik', 'Physical', 'trim|required');
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['personal_data'] = $this->QueryModel->_PersonalDataQuery();
        $data['total_personal_data'] = $this->QueryModel->_PersonalDataQueryTOTAL();
        if ($this->form_validation->run() == false){
            $this->load->view('templates/public/header');
            $this->load->view('personal_data',$data);
            $this->load->view('templates/public/footer');
        }else{
            $this->AcctionsModel->_personaldata($_ID);
        }
    }
    public function cvdata($_ID){
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $data['mycv'] = $this->QueryModel->_CommanditaireVennootschapDataQuery();
        $data['total_cv'] = $this->QueryModel->_TotalCommanditaireVennootschapDataQuery();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        if ($this->form_validation->run() == false){
            $this->load->view('templates/public/header');
            $this->load->view('cv_data',$data);
            $this->load->view('templates/public/footer');
        }else{
            $this->AcctionsModel->_cvdata($_ID);
        }
    }
    public function commanditaire($_ID_Commanditaire){
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $data['commanditaire'] = $this->QueryModel->_Commanditaire($_ID_Commanditaire);
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        if ($this->form_validation->run() == false){
            $this->load->view('templates/public/header');
            $this->load->view('commanditaire_data',$data);
            $this->load->view('templates/public/footer');
        }else{
            $this->AcctionsModel->_commanditaire($_ID_Commanditaire);
        }
    }
    public function commanditairedelete($_ID_Commanditaire){
        $this->AcctionsModel->_commanditaireDelete($_ID_Commanditaire);
    }
    public function experience($_ID){
        $this->form_validation->set_rules('value', 'Experience', 'trim|required');
        $data['total_experience'] = $this->QueryModel->_TotalExperienceDataQuery();
        $data['data_experience'] = $this->QueryModel->_ExperienceDataQuery();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        if ($this->form_validation->run() == false){
            $this->load->view('templates/public/header');
            $this->load->view('experience_data',$data);
            $this->load->view('templates/public/footer');
        }else{
            $this->AcctionsModel->_experience($_ID);
        }
    }
    public function experiencedelete($_ID_Experience){
        $this->AcctionsModel->_experienceDelete($_ID_Experience);
    }
    public function abilitydata($_ID){
        $this->form_validation->set_rules('ability', 'Ability', 'trim|required');
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['total_ability'] = $this->QueryModel->_Total_abilityUserDATA();
        $data['user_ability'] = $this->QueryModel->_abilityUserDATA();
        if ($this->form_validation->run() == false){
            $this->load->view('templates/public/header');
            $this->load->view('ability_data',$data);
            $this->load->view('templates/public/footer');
        }else{
            $this->AcctionsModel->_abilitydata($_ID);
        }
    }
    public function abilitydelete($_ID_Ability){
        $this->AcctionsModel->_abilityDelete($_ID_Ability);
    }
    public function jobapplication($_ID){
        $data['total_job_application'] = $this->QueryModel->_TotaljobapplicationDataQuery();
        $data['job_application'] = $this->QueryModel->_jobapplicationDataQuery();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $this->load->view('templates/public/header');
        $this->load->view('job_application_data',$data);
        $this->load->view('templates/public/footer');
    }
    public function jobapplicationdelete($_ID_JOB_APPLICATION){
        $this->AcctionsModel->_jobapplicationdelete($_ID_JOB_APPLICATION);
    }
    public function certificate($_ID){
        $this->form_validation->set_rules('certificate', 'Certificate', 'trim|required');
        $data['total_certificate'] = $this->QueryModel->_Total_certificateUserDATA();
        $data['user_certificate'] = $this->QueryModel->_certificateUserDATA();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        if ($this->form_validation->run() == false){
            $this->load->view('templates/public/header');
            $this->load->view('certificate_data',$data);
            $this->load->view('templates/public/footer');
        }else{
            $this->AcctionsModel->_certificate($_ID);
        }
    }
    public function certificatedetail($_ID_certificate){
        $data['certificate'] = $this->QueryModel->_certificateUserDATAOne($_ID_certificate);
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $this->load->view('templates/public/header');
        $this->load->view('certificate_data_one',$data);
        $this->load->view('templates/public/footer');
    }
    public function certificateupdate($_ID_certificate){
        $this->form_validation->set_rules('certificate', 'Certificate', 'trim|required');
        if ($this->form_validation->run() == false){
            $msg = 'Failed Update Data certificate !';
            $color = 'text-danger';
            redirect('app/certificate-data/view/'.$_ID_certificate);
        }else{
            $this->AcctionsModel->_certificateupdate($_ID_certificate);
        }
    }
    public function certificatedelete($_ID_certificate){
        $this->AcctionsModel->_certificatedelete($_ID_certificate);
    }
    public function commanditaireprimary($CV_ID){
        $this->AcctionsModel->_commanditaireprimary($CV_ID);
    }
    
}