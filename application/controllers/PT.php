<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PT extends CI_Controller
{
    public function __Construct(){
        parent::__Construct();
        $this->AuthModel->_CheckPTAccess();
        $this->AuthModel->_CheckNotLogin(); 
        $this->AuthModel->Verification_Token_cookies();
    }
    public function index(){
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('note', 'Note', 'trim|required');
        $this->form_validation->set_rules('delivery_destination', 'Delivery Destination', 'trim|required');
  
        $this->form_validation->set_rules('close', 'Close In', 'trim|required');
        $data['MY_JOB'] = $this->QueryModel->_jobvacancyDataQueryCompany();
        $data['myaccount'] = $this->QueryModel-> _AccountCOMPANY($this->session->userdata('_id'));
        $data['langue'] = $this->QueryModel->Lang();
        if ($this->form_validation->run() == false){
            $this->load->view('templates/home/header',$data);
            $this->load->view('pt/home',$data);
            $this->load->view('templates/home/footer');
        }else{
           
            $this->AcctionsModel->_CompanyCREATEJOB();
        }
    }
    public function account($_ID){
        $AccountDATA = $this->QueryModel->_AccountCOMPANY($_ID);
        $data['_galerry_company'] = $this->QueryModel-> _CompanyGalleryDataQueryOne($AccountDATA['company_id']);
        $data['myaccount'] = $AccountDATA;
        $data['langue'] = $this->QueryModel->Lang();
        $this->load->view('templates/home/header',$data);
        $this->load->view('pt/account',$data);
        $this->load->view('templates/home/footer');
    }
    public function password($_ID){
        $this->QueryModel->_AccountCOMPANY($_ID);
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
    public function accountupdate($_ID){
        $this->QueryModel->_AccountCOMPANY($_ID);
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
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
    public function photo($_ID){
        $this->AuthModel->_photo($_ID);
    }
    public function photosampul($_ID_COMPANY){
        $this->AuthModel->_photoSampul($_ID_COMPANY);
    }
    public function companyupdateaccount($_ID){
        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('company_mail', 'Company Mail', 'trim|required');
        $this->form_validation->set_rules('company_phone', 'Company Phone', 'trim|required');
        $this->form_validation->set_rules('company_site', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('company_address', 'Company Address', 'trim|required');
        $this->form_validation->set_rules('company_desc', 'Company Description', 'trim|required');
        if ($this->form_validation->run() == false){
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('maek_sure')
                    ]
            ];
            echo json_encode($res);
        }else{
            $this->AcctionsModel->_Account_COMPANY_UPDATE($_ID);
        }
    }
    public function jobvacancydetail($_ID_JOBVACANCY){
        if(!$this->QueryModel->_CompanyJobvacancyDataQueryOne($_ID_JOBVACANCY)){
            redirect('app/company');
        }
        $data['myaccount'] = $this->QueryModel-> _AccountCOMPANY($this->session->userdata('_id'));
        $data['jobvacancydetail'] = $this->QueryModel->_CompanyJobvacancyDataQueryOne($_ID_JOBVACANCY);
        $data['job_application'] = $this->QueryModel-> _CompanyJobapplicationDataQuery($_ID_JOBVACANCY);
        $data['langue'] = $this->QueryModel->Lang();
        $this->load->view('templates/home/header',$data);
        $this->load->view('pt/jobvacancy_data',$data);
        $this->load->view('templates/home/footer');
    }
    public function jobvacancystatus($_ID_VACANCY){
        $this->AcctionsModel->_jobVacancySTATUS($_ID_VACANCY);
    }
    public function jobvacancydelete($_ID_VACANCY){
        $this->AcctionsModel->_jobVacancyDELETE($_ID_VACANCY);
    }
    public function jobvacancyuserdata($ACCOUNT_ID,$job_ID,$job_Appl){
        $this->AcctionsModel->_COMPANY_job_application_moveVIEW($job_Appl);
        $data['id_job'] = $job_ID;
        $data['id_job_appli'] = $job_Appl;
        $data['myaccount'] = $this->QueryModel->_AccountCOMPANY($this->session->userdata('_id'));
        $data['seekres'] = $this->QueryModel->_JobSeekresQueryDataOneCompany($ACCOUNT_ID);
        $data['application_data'] = $this->QueryModel->_QueryCOMPANY_job_application_moveVIEW($job_Appl);
        $data['ability_user_data'] = $this->QueryModel->_abilityUserDATACompany($ACCOUNT_ID);
        $data['experience_user_data'] = $this->QueryModel->_experienceUserDATACompany($ACCOUNT_ID);
        $data['certificate_user_data'] = $this->QueryModel->_certificateUserDATACompany($ACCOUNT_ID);
        $data['langue'] = $this->QueryModel->Lang();
        if(!$data['seekres']){
            redirect('app/company/job-vacancy/data/'.$job_ID);
        }
        $this->load->view('templates/home/header',$data);
        $this->load->view('pt/jobvacancy_data_user',$data);
        $this->load->view('templates/home/footer');
    }
    public function downloadcv($_ID_application){
        $this->AcctionsModel->_privateDownloadFile($_ID_application);
    }
    public function usercertificate($ACCOUNT_ID,$job_ID,$_ID_certificate,$job_Appl){
        $data['id_job'] = $job_ID;
        $data['id_job_appli'] = $job_Appl;
        $data['certificate_data'] = $this->QueryModel->_certificateDATACOMPANY_ONE($_ID_certificate);
        $data['myaccount'] = $this->QueryModel->_AccountCOMPANY($this->session->userdata('_id'));
        $data['langue'] = $this->QueryModel->Lang();
        $this->load->view('templates/home/header',$data);
        $this->load->view('pt/data_user_certificate',$data);
        $this->load->view('templates/home/footer');
    }
    public function decision($ID_job_Appl){
        $this->AcctionsModel->_decision($ID_job_Appl);
    }
    public function uploadgallery($_ID){
        $this->AcctionsModel->_uploadgallery($_ID);
    }
    public function updategallery($ID_GALLERY){
        $this->AcctionsModel->_updategallery($ID_GALLERY);
    }
}