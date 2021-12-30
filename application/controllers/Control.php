<?php
class Control extends CI_Controller{
    public function __Construct(){
        parent::__Construct();
        $this->AuthModel->_CheckCnpAccess();
        $this->AuthModel->_CheckNotLogin(); 
        $this->AuthModel->Verification_Token_cookies();
        $this->lang->load('app_lang');
        if($this->session->userdata('screen')){
            //$this->ltp->CreateLang("oke");
            redirect('look-screen');
		}
    }
    public function index(){
       
        $data['year'] = $this->QueryModel->_QueryDistinctIPACTIVITY();
        $data['ip_access'] = $this->QueryModel->_SumIPActivity();
        $data['user_access'] =  $this->QueryModel->_SumUSERSActivity();
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['users_activity'] = $this->QueryModel->UsersAktifityQueryLimit();
        $data['company_total'] = $this->QueryModel->_CompanyOSUM();
        $data['user_company'] = $this->QueryModel->_UserCompanySUM();
        $data['user_student'] = $this->QueryModel->_UserstudentSUM();
        $data['job_vacansy'] = $this->QueryModel->_JobVacansySUM();
        $data['job_app'] = $this->QueryModel->_JobAppSUM();
        $data['aktivity'] = $this->QueryModel->_AktivitySUM();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/home',$data);
        $this->load->view('templates/control/footer');
    }
    public function ipaceess($IP){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['ip_access'] = $this->QueryModel->_UserACCESSIP($IP);
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/ip_access',$data);
        $this->load->view('templates/control/footer');
    }
    public function usersallaceess($ID){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['ip_access'] = $this->QueryModel->UsersAktifityQuery();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['myaccount'] = $this->QueryModel->_Account($ID);
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/user_access',$data);
        $this->load->view('templates/control/footer');
    }
    public function account($_ID){
        $data['langue'] = $this->QueryModel->Lang();
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['color'] = $this->QueryModel->_Color();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();$this->QueryModel->_Color();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/account',$data);
        $this->load->view('templates/control/footer');
    }
    public function users($_ID){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['view_users'] = $this->QueryModel->_SumViewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['user_view'] = $this->QueryModel->_ViewUserREQUEST();
        $data['user_aktif'] = $this->QueryModel->_AktifUser();
        $data['user_aktif_com'] = $this->QueryModel->_AktifUserCOMPANY();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users',$data);
        $this->load->view('templates/control/footer');
    }
    public function usersnewrequestdetail($ID_USER){
        $this->AcctionsModel->_SETVIEWSTATUS($ID_USER);
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['user_request_detail'] = $this->QueryModel->_DetailNewUserREQUEST($ID_USER);
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_detail_new',$data);
        $this->load->view('templates/control/footer');
    }
    
    public function usersviewrequestdetail($ID_USER){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['user_view'] = $this->QueryModel->_ViewUserREQUEST();
        $data['user_request_detail'] = $this->QueryModel->_DetailNewUserREQUEST($ID_USER);
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_detail_view',$data);
        $this->load->view('templates/control/footer');
    }
    public function usersstudents($_ID){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['user_allt'] = $this->QueryModel->_DataUSERALL();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_students',$data);
        $this->load->view('templates/control/footer');
    }
    function userscompany($_ID){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['user_allcom'] = $this->QueryModel->_DataUSERALLCOM();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_com',$data);
        $this->load->view('templates/control/footer');
    }
    public function usersviewrequest($_ID){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['user_allt_view'] = $this->QueryModel->_DataUSERALLVIEW();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_view',$data);
        $this->load->view('templates/control/footer');
    }
    public function usersnewrequest($_ID){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['user_allt_new'] = $this->QueryModel->_DataUSERALLNEW();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_new',$data);
        $this->load->view('templates/control/footer');
    }
    function usersdetailstudents($ID_USER){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['user_detail'] = $this->QueryModel->_DataUSERDETAIL($ID_USER);
        $data['majors_data'] = $this->QueryModel->_majorsQUERYDATA();
        $data['personal_data'] = $this->QueryModel->_PersonalDataUSER($ID_USER);
        $data['total_personal_data'] = $this->QueryModel->_PersonalDataUSERTOTAL($ID_USER);
        $data['user_cv'] = $this->QueryModel->_CommanditaireVennootschapDataQueryUSER($ID_USER);
        $data['total_cv'] = $this->QueryModel->_TotalCommanditaireVennootschapDataQueryUSER($ID_USER);
        $data['total_experience'] = $this->QueryModel->_TotalExperienceDataQueryUSER($ID_USER);
        $data['data_experience'] = $this->QueryModel->_ExperienceDataQueryUSER($ID_USER);
        $data['total_ability'] = $this->QueryModel->_Total_abilityUserDATAUSER($ID_USER);
        $data['user_ability'] = $this->QueryModel->_abilityUserDATAUSER($ID_USER);
        $data['total_certificate'] = $this->QueryModel->_Total_certificateUserDATAUSER($ID_USER);
        $data['user_certificate'] = $this->QueryModel->_certificateUserDATAUSER($ID_USER);
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_students_detail',$data);
        $this->load->view('templates/control/footer');
    }
    public function usersdetailcompany($ID_USER){
        $dataUserCOMPANY = $this->QueryModel->_AccountCOMPANY($ID_USER);
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['user_detail'] = $dataUserCOMPANY;
        $data['_galerry_company'] = $this->QueryModel->_CompanyGalleryDataQueryLIMIT($dataUserCOMPANY['company_id']);
        $data['_galerry_company_all'] = $this->QueryModel->_CompanyGalleryDataQueryOne($dataUserCOMPANY['company_id']);
        $data['data_company'] = $this->QueryModel->_CompanyProfileDataQuery();
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_company_detail',$data);
        $this->load->view('templates/control/footer');
    }
    public function userscreatecompanyaccount($_ID){
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['data_company'] = $this->QueryModel->_CompanyProfileDataQuery();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/users_company_create_account',$data);
        $this->load->view('templates/control/footer');
    }
    public function company($_ID){
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['data_company'] = $this->QueryModel->_CompanyDataQuery();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/company',$data);
        $this->load->view('templates/control/footer');
    }
    public function settinglang($Lang){
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['lang'] = $Lang;
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/mirror',$data);
        $this->load->view('templates/control/footer');
    }
    public function activity($_ID){
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['activity'] = $this->QueryModel->_activityQUERYDATA();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/activity',$data);
        $this->load->view('templates/control/footer');
    }
    public function companydetail($ID_COMPANY){
        $COMPANY = $this->QueryModel->_WHEREUSERCOMPANYDATA($ID_COMPANY);
        if(!$COMPANY){
            redirect('app/control/company/'.$this->session->userdata('_id'));
        }
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['data_company'] = $COMPANY;
        $data['_galerry_company'] = $this->QueryModel->_CompanyGalleryDataQueryLIMIT($ID_COMPANY);
        $data['_galerry_company_all'] = $this->QueryModel->_CompanyGalleryDataQueryOne($ID_COMPANY);
        $data['job_vacancy'] = $this->QueryModel->_WHERECOMPANYDATAJob($ID_COMPANY);
        $data['total'] = $this->QueryModel->_WHERECOMPANYDATAJobTOTAL($ID_COMPANY);
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/company_detail',$data);
        $this->load->view('templates/control/footer');
    }
    public function companyjobvacncydetail($_ID_JOB_VACANCY){
        $JOB = $this->QueryModel->_JObVacancyCompanyOne($_ID_JOB_VACANCY);
        if(!$JOB){
            redirect('app/control/company/'.$this->session->userdata('_id'));
        }
        $data['total'] = $this->QueryModel->_JObApplicationCompanyOneSUM($_ID_JOB_VACANCY);
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['job'] = $JOB;
        $data['job_app'] = $this->QueryModel->_JObApplicationCompanyOne($_ID_JOB_VACANCY);
        
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/company_job_vacancy_detail',$data);
        $this->load->view('templates/control/footer');
    }
    public function jobvacncy($_ID){
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['job_vacancy'] =  $this->QueryModel->_jobvacancyDataQuery();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/job_vacancy',$data);
        $this->load->view('templates/control/footer');
    }
    public function createjobvacncy($_ID){
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['data_company'] = $this->QueryModel->_CompanyProfileDataQuery();
        $this->form_validation->set_rules('company', 'Company Data', 'trim|required');
        $this->form_validation->set_rules('delivery_destination', 'Delivery Destination', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('note', 'Note', 'trim|required');
        $this->form_validation->set_rules('close', 'Close', 'trim|required');
        if ($this->form_validation->run() == false){
            $this->load->view('templates/control/header',$data);
            $this->load->view('control/create_job_vacancy',$data);
            $this->load->view('templates/control/footer');
        }else{
        
            $this->AcctionsModel->_CrateCompanyCREATEJOB($_ID);
        }
        
    }
    public function detailjobvacncy($ID_JOB){
        $JOBVACANCY = $this->QueryModel->_jobvacancyDataQueryOne($ID_JOB);
        if(!$JOBVACANCY){
            redirect('app/control/job-vacancy/'.$this->session->userdata('_id'));
        }
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $data['data_company'] = $this->QueryModel->_CompanyProfileDataQuery();
        $data['job'] = $JOBVACANCY;
        $data['job_aplication'] = $this->QueryModel->_QueryJobAppWhereDIVACANCY($ID_JOB);
        $data['user_aktif'] = $this->QueryModel->_PrimaryCV();
        $this->form_validation->set_rules('company', 'Company Data', 'trim|required');
        $this->form_validation->set_rules('delivery_destination', 'Delivery Destination', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('note', 'Note', 'trim|required');
        if ($this->form_validation->run() == false){
            $this->load->view('templates/control/header',$data);
            $this->load->view('control/detail_job_vacancy',$data);
            $this->load->view('templates/control/footer');
        }else{
            $this->AcctionsModel->_UPDATEJOB($ID_JOB);
        }
    }
    public function deteiljobapp($ID_JOBAPP){
        $JOBAPP = $this->QueryModel->_QueryJobApp($ID_JOBAPP);
        if(!$JOBAPP){
            redirect('app/control/job-application/'.$this->session->userdata('_id'));
        }
        $data['jop_app'] = $JOBAPP;
        $data['ability_user_data'] = $this->QueryModel->_abilityUserDATACompany($JOBAPP['user_id']);
        $data['experience_user_data'] = $this->QueryModel->_experienceUserDATACompany($JOBAPP['user_id']);
        $data['seekres'] = $this->QueryModel->_JobSeekresQueryDataOneCompany($JOBAPP['user_id']);
        $data['certificate_user_data'] = $this->QueryModel->_certificateUserDATACompany($JOBAPP['user_id']);
        $data['job_aplication'] = $this->QueryModel->_QueryJobAppAll();
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/detail_job_app',$data);
        $this->load->view('templates/control/footer');
    }
    public function jobapplication($_ID){
        $data['job_aplication'] = $this->QueryModel->_QueryJobAppAll();
        $data['myaccount'] = $this->QueryModel->_Account($_ID);
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $this->load->view('templates/control/header',$data);
        $this->load->view('control/job_app',$data);
        $this->load->view('templates/control/footer');
    }
    public function activityinfo($ID_ACTIVITY){
        $data['activity'] = $this->QueryModel->_activityQUERYDATAOne($ID_ACTIVITY);
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('desc_activity', 'Desc Activity', 'trim|required');
        if ($this->form_validation->run() == false){
           
            $this->load->view('templates/control/header',$data);
            $this->load->view('control/aktivity_one',$data);
            $this->load->view('templates/control/footer');
        }else{
            $this->AcctionsModel->_activityinfoUPDATE($ID_ACTIVITY);
        }
    }
    public function activitycreate($_ID){
        $data['myaccount'] = $this->QueryModel->_Account($this->session->userdata('_id'));
        $data['new_users'] = $this->QueryModel->_SumNewUSER();
        $data['user_request'] = $this->QueryModel->_NewUserREQUEST();
        $data['notive_loker'] =$this->QueryModel->_CompanySumNeWlOKER();
        $data['new_loker']= $this->QueryModel->_jobvacancyDataQueryNew();
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('desc_activity', 'Desc Activity', 'trim|required');
        if ($this->form_validation->run() == false){
            $this->load->view('templates/control/header',$data);
            $this->load->view('control/aktivity_create',$data);
            $this->load->view('templates/control/footer');
        }else{
            $this->AcctionsModel->_activityinfoCreate($_ID);
        }
    }
    public function langcreate($_ID){
        $this->QueryModel->_Account($_ID);
        $this->form_validation->set_rules('id_lang', 'id_language', 'trim|required|is_unique[language.id_language]');
        $this->form_validation->set_rules('lang', 'language', 'trim|required|is_unique[language.language]');
        if ($this->form_validation->run() == false){
            redirect('app/control');
        }else{
            $this->AuthModel->_CreateLANG();
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
    public function accountdata($_ID){
        $this->QueryModel->_Account($_ID);
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
    public function usersupdate($ID_USER){
        $this->form_validation->set_rules('nim', 'Nim', 'trim|required');
        $this->form_validation->set_rules('major', 'major', 'trim|required');
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
            $this->AcctionsModel->_AccountUSERUPDATE($ID_USER);
        }
    }
    public function usersdatacompany($ID_COMPANY){
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
            $this->AcctionsModel->_COMPANY_UPDATEDATA($ID_COMPANY);
        }
    }
    public function usersupdatecompany($ID_USER){
        
        $this->form_validation->set_rules('company', 'Company', 'trim|required');
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
            $this->AcctionsModel->_AccountUSERUPDATECOMPANY($ID_USER);
        }
    }
    public function userscreateaccount($_ID){
        $this->QueryModel->_Account($_ID);
       $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|matches[confirm]');
       $this->form_validation->set_rules('confirm', 'confirm', 'required|trim|matches[password]');
        $this->form_validation->set_rules('company', 'Company', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
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
            
            $this->AcctionsModel->_AccountUSERCREATECOMPANY();
        }
    }
    public function companycreate($_ID){ 
        $this->QueryModel->_Account($_ID);
        $this->form_validation->set_rules('company_name', 'company_name', 'trim|required');
        $this->form_validation->set_rules('company_status', 'Compcompany_statusany', 'trim|required');
        if ($this->form_validation->run() == false){
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('maek_sure')
                    ]
            ];
            echo json_encode($res);
        }else{
            $this->AcctionsModel->_CreateCompany($_ID);
        }
    }
    public function setcolor($ID_COLOR){
        $this->AcctionsModel->_SETColor($ID_COLOR);
    }
    public function deletecolor($ID_COLOR){
        $this->AcctionsModel->_DELETEColor($ID_COLOR);
    }
    public function photo($_ID){
        $this->AuthModel->_photo($_ID);
    }
    public function usersaktivate($ID_USER){
        $this->AcctionsModel->_SETAKTIVATESTATUS($ID_USER);
    }
    public function usersdisable($ID_USER){
        $this->AcctionsModel->_SETDISABLESTATUS($ID_USER);
    }
    public function usersdelete($ID_USER){
        $this->AcctionsModel->_UserDELETE($ID_USER);
    }
    public function usersdownloadcv($ID_cv){
        $this->AcctionsModel->_privateDownloadFile($ID_cv);
    }
    public function usersdownloadcertificate($ID_Certivicate){
        $this->AcctionsModel->_privateDownloadFilecertificate($ID_Certivicate);
    }
    public function usersresetpass($ID_USER){
        $this->AuthModel->_privateRESETPASSWORD($ID_USER);
    }
    public function companydelete($ID_COMPANY){
        $this->AcctionsModel->_CompanyDELETE($ID_COMPANY);
    }
    public function datacompanystatus($ID_COMPANY){
        $this->AcctionsModel->_CompanySTATUS($ID_COMPANY);
    }
    public function companyjobvacncydownloadcv($CV){
        $this->AcctionsModel->_privateDownloadFile($CV);
    }
    public function deletejobvacncy($ID_JOB){
        $this->AcctionsModel->_DELETEjobvacncy($ID_JOB);
    }
    public function deletejobapp($ID_JOBAPP){
        $this->AcctionsModel->_DELETEjobapp($ID_JOBAPP);
    }
    public function langput($lang){
        $this->AcctionsModel->_langput($lang);
    }
    public function activitydelete($ID_ACTIVITY){
        $this->AcctionsModel->_Activitydelete($ID_ACTIVITY);
    }
    public function langdelete($ID_LANG){
        $this->AuthModel->_DeleteLANG($ID_LANG);
    }
}