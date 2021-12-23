<?php
class AcctionsModel extends CI_Model
{
    public function __Construct(){
        parent::__Construct();
        ini_set('date.timezone', 'Asia/Jakarta');
        $this->lang->load('app_lang');
    }
    function _personaldata($_ID){
        $this->QueryModel->_Account($_ID);
        $data = [
            '_id' => $this->ltp->ltp_id(),
            'user_id' => $_ID,
            'tinggi' => htmlspecialchars($this->input->post('tinggi')),
            'berat' => htmlspecialchars($this->input->post('berat')),
            'negara' => htmlspecialchars($this->input->post('negara')),
            'sim' => htmlspecialchars($this->input->post('sim')),
            'golongan_darah' =>htmlspecialchars($this->input->post('golonagn_darah')),
            'fisik' => htmlspecialchars($this->input->post('fisik')),
            'catatan' => htmlspecialchars($this->input->post('note'))
        ];
        if($this->QueryModel->_PersonalDataQuery()){
            $this->db->where('user_id',$_ID);
            if($this->db->update('prersonal_data',$data)){
                $msg = $this->lang->line('success_update_personal_info');
                $color = 'text-success';
            }else{
                $msg = $this->lang->line('failed_update_personal_info');
                $color = 'text-danger';
            }
        }else{
            if($this->db->insert('prersonal_data',$data)){
                $msg = $this->lang->line('success_update_complide_personal_info');
                $color = 'text-success';
            }else{
                $msg = $this->lang->line('failed_update_complide_personal_info');
                $color = 'text-danger';
            }
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/personal-data/'.$_ID);
    }
    function _cvdata($_ID){
        $this->QueryModel->_Account($_ID);
        $upload_image = $_FILES['cv']['name'];
        if($upload_image){
            $config['allowed_types'] = 'pdf';
            $config['max_size']      = '9000';
            $config['file_name']      = $this->ltp->ltp_GenFILENAME();
            $config['upload_path'] = 'assets/public/images/cv/';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('cv')) {
                $data = [
                    '_id' => $this->ltp->ltp_id(),
                    'user_id' => $_ID,
                    'title' => htmlspecialchars($this->input->post('title')),
                    'cv' => htmlspecialchars($this->upload->data('file_name')),
                    'date_create' => htmlspecialchars(date('d-m-Y H:i:s')),
                    'date_update' => htmlspecialchars('-'),
                    'status_cv' => htmlspecialchars('-'),
                ];
                if($this->db->insert('cv', $data)){
                    $msg = $this->lang->line('success_create_commanditaire_info');
                    $color = 'text-success';
                }else{
                    $msg = $this->lang->line('failed_create_commanditaire_info');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('check__send');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('failed_commanditaire');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/cv-data/'.$_ID);
    }
    function _commanditaire($_ID_Commanditaire){
        $this->QueryModel->_Account($this->session->userdata('_id'));
        $Commanditaire = $this->QueryModel->_Commanditaire($_ID_Commanditaire);
        if($Commanditaire){
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'pdf';
                $config['max_size']      = '9000';
                $config['file_name']      = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/cv/';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    unlink(FCPATH . '/assets/public/images/cv/' . $Commanditaire['cv']);
                    $newImage = $this->upload->data('file_name');
                    $data= [
                        'title'=>htmlspecialchars($this->input->post('title')),
                        'cv'=>htmlspecialchars($newImage),
                        'date_update'=>date('d-m-Y H:i:s'),
                    ];
                }else{
                   
                    $data= [
                        'title'=>htmlspecialchars($this->input->post('title')),
                        'date_update'=>date('d-m-Y H:i:s'),
                    ];
                }
            }
            $this->db->where('_id',$_ID_Commanditaire);
            if($this->db->update('cv',$data)){
                $msg = $this->lang->line('success_update_commanditaire_info');
                $color = 'text-success';
            }else{
                $msg = $this->lang->line('failed_update_commanditaire_info');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_found_commanditaire');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/cv-data/commanditaire-vennootschap/'.$_ID_Commanditaire);
    }
    function _commanditaireDelete($_ID_Commanditaire){
        $this->QueryModel->_Account($this->session->userdata('_id'));
        $Commanditaire = $this->QueryModel->_Commanditaire($_ID_Commanditaire);
        if($Commanditaire){
            if(unlink(FCPATH . '/assets/public/images/cv/' . $Commanditaire['cv'])){
                $this->db->where('_id',$_ID_Commanditaire);
                if($this->db->delete('cv')){
                    if($this->QueryModel->_CHECK_JOB_APPLICATION($_ID_Commanditaire)){
                        $this->db->where('cv_id',$_ID_Commanditaire);
                        $this->db->delete('job_application');
                    }
                    $msg =  $this->lang->line('success_delete_commanditaire_info');
                    $color = 'text-success';
                }else{
                    $msg = $this->lang->line('failed_delete_commanditaire_info');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('failed_unlinkcommanditaire_info');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_found_commanditaire');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/cv-data/'.$this->session->userdata('_id'));
    }
    function _experience($_ID){
        $this->QueryModel->_Account($_ID);
        $data = [
            '_id' => $this->ltp->ltp_id(),
            'user_id' => $_ID,
            'value' => htmlspecialchars($this->input->post('value')),
        ];
        if($this->db->insert('experience', $data)){
            $msg = $this->lang->line('success_create_experience_info');
            $color = 'text-success';
        }else{
            $msg = $this->lang->line('failed_create_experience_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/experience-data/'.$_ID);
    }
    function _experienceDelete($_ID_Experience){
        $this->QueryModel->_Account($this->session->userdata('_id'));
        $Experience = $this->QueryModel->_Experience($_ID_Experience);
        if($Experience){
            $this->db->where('_id',$_ID_Experience);
            if($this->db->delete('experience')){
                $msg = $this->lang->line('success_delete_experience_info');
                $color = 'text-success';
            }else{
                $msg = $this->lang->line('failed_delete_experience_info');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_experience_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/experience-data/'.$this->session->userdata('_id'));
    }
    function _DownloadPosterFile($ID_VACANCY){
        $file = $this->QueryModel->_jobvacancyDataQueryOne($ID_VACANCY);
        force_download('assets/public/images/loker/'. $file['poster'], NULL);
    }
    function _Sendjopapplication($ID_VACANCY){
        if($this->QueryModel->_jobvacancyDataQueryOneCheck($ID_VACANCY)){
            $res =[
				'status'=> "false",
				'results'=> [
					'msg'=>$this->lang->line('sedn_info_jobapp')
				]
			];
        }else{
            $data =[
                '_id' => $this->ltp->ltp_id(),
                'user_id' => htmlspecialchars($this->session->userdata('_id')),
                'cv_id'=> htmlspecialchars($this->input->post('cv_send')),
                'job_vacancy_id' => $ID_VACANCY,
                'date_send' =>date('d-m-Y H:i:s'),
                'status_job_application'=> 'New',
                'note_job_application' => ''
            ];
            if($this->db->insert('job_application', $data)){
                $res =[
                    'status'=> "true",
                    'results'=> [
                        'msg'=> $this->lang->line('success_send_jobapp_info')
                    ]
                ];
            }else{
                $res =[
                    'status'=> "false",
                    'results'=> [
                        'msg'=>$this->lang->line('success_send_jobapp_info')
                    ]
                ];
            }
            
        }
        echo json_encode($res);
    }
    private function _CV_NOT_EXIESS($CV_DATA_ID){
        $CHECK_CV = $this->QueryModel->__CHECK_CV_($CV_DATA_ID);
        if($CHECK_CV){
            if($CHECK_CV['status_cv'] == "Hide"){
                unlink(FCPATH . '/assets/public/images/cv/' . $CHECK_CV['cv']);
                $this->db->where('_id', $CV_DATA_ID);
                $this->db->delete('cv');
                return true;
            }
        }
        return false;
    }
    function _jobapplicationdelete($_ID_JOB_APPLICATION){
       $JOB = $this->QueryModel->_JOBAPPLICATIONCHECKONE($_ID_JOB_APPLICATION);
       if($JOB){
            if($JOB['status_job_application'] == "Rejected"){
                $this->_CV_NOT_EXIESS($JOB['cv_id']);
                $this->db->where('_id',$_ID_JOB_APPLICATION);
                if($this->db->delete('job_application')){
                    $msg = $this->lang->line('succes_delete_jopapp_info');
                    $color = 'text-success';
                }else{
                    $msg = $this->lang->line('failed_delete_jopapp_info');
                    $color = 'text-danger';
                }
            }else{
                $this->db->set('status_job_application','Removed By Job Seekers');
                if($this->db->update('job_application')){
                    $msg = $this->lang->line('succes_delete_jopapp_info');
                    $color = 'text-success';
                }else{
                    $msg = $this->lang->line('failed_delete_jopapp_info');
                    $color = 'text-danger';
                }
            }
       }else{
            $msg = $this->lang->line('not_jopapp_info');
            $color = 'text-danger';
       }
       $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
       redirect('app/job-application-data/'.$this->session->userdata('_id'));
    }
    function _abilitydata($_ID){
        $data =[
            '_id' => $this->ltp->ltp_id(),
            'user_id'=> $this->session->userdata('_id'),
            'value_ability'=> htmlspecialchars($this->input->post('ability')),
        ];
        if($this->db->insert('user_ability',$data)){
            $msg = $this->lang->line('success_create_ability_info');
            $color = 'text-success';
        }else{
            $msg = $this->lang->line('failed_create_ability_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/ability-data/'.$this->session->userdata('_id'));
    }
    function _abilityDelete($_ID_Ability){
        if($this->QueryModel->_abilityUserDATAOne($_ID_Ability)){
            $this->db->where('_id',$_ID_Ability);
            if($this->db->delete('user_ability')){
                $msg = $this->lang->line('success_delete_ability_info');
                $color = 'text-success';
            }else{
                $msg = $this->lang->line('failed_delete_ability_info');
                $color = 'text-danger';
            }
        }else{
            $msg =$this->lang->line('not_ability_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/ability-data/'.$this->session->userdata('_id'));
    }
    function _certificate($_ID){
        $upload_image = $_FILES['certificate_file']['name'];
        if($upload_image){
            $config['allowed_types'] = 'pdf';
            $config['max_size']      = '9000';
            $config['file_name']      = $this->ltp->ltp_GenFILENAME();
            $config['upload_path'] = 'assets/public/images/certificate/';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('certificate_file')) {
               $data= [
                    'id_certificate' => $this->ltp->ltp_id(),
                    'user_id'=> $this->session->userdata('_id'),
                    'certificate_file' =>htmlspecialchars($this->upload->data('file_name')),
                    'value_certificate'=> htmlspecialchars($this->input->post('certificate')),
               ];
               if($this->db->insert('certificate',$data)){
                    $msg = $this->lang->line('success_create_certivicete_info');
                    $color = 'text-success';
                }else{
                    $msg = $this->lang->line('failed_create_certivicete_info');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('check__send');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('faled_upload_certifikate_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/certificate-data/'.$this->session->userdata('_id'));
    }
    function _certificateupdate($_ID_certificate){
        $certificate = $this->QueryModel->_certificateUserDATAOne($_ID_certificate);
        if($certificate){
            $upload_image = $_FILES['certificate_file']['name'];
            if($upload_image){
                $config['allowed_types'] = 'pdf';
                $config['max_size']      = '9000';
                $config['file_name']      = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/certificate/';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('certificate_file')) {
                    unlink(FCPATH . '/assets/public/images/certificate/' . $certificate['certificate_file']);
                    $this->db->set('certificate_file',$this->upload->data('file_name'));
                }else{
                    $msg = $this->lang->line('check__send');
                    $color = 'text-danger';
                }
            }
            $this->db->set('value_certificate',htmlspecialchars($this->input->post('certificate')));
            $this->db->where('id_certificate',$_ID_certificate);
            if($this->db->update('certificate')){
                $msg = $this->lang->line('success_update_certivicete_info');
                $color = 'text-success';
            }else{
                $msg = $this->lang->line('failed_update_certivicete_info');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_certivicete_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/certificate-data/view/'.$_ID_certificate);
    }
    function _certificatedelete($_ID_certificate){
        $certificate = $this->QueryModel->_certificateUserDATAOne($_ID_certificate);
        if($certificate){
            unlink(FCPATH . '/assets/public/images/certificate/' . $certificate['certificate_file']);
            $this->db->where('id_certificate',$_ID_certificate);
            if($this->db->delete('certificate')){
                $msg = $this->lang->line('success_delete_certivicete_info');
                $color = 'text-success';
            }else{
                $msg = $this->lang->line('failed_delete_certivicete_info');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_certivicete_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/certificate-data/'.$this->session->userdata('_id'));
    }


    /* {Acctions Company} */
    function _Account_COMPANY_UPDATE($_ID){
        $DataUserSession = $this->QueryModel-> _AccountCOMPANY($_ID);
        if($DataUserSession){
            $data = [
                'company_name'=>htmlspecialchars($this->input->post('company_name')),
                'company_mail'=>htmlspecialchars($this->input->post('company_mail')),
                'company_phone'=>htmlspecialchars($this->input->post('company_phone')),
                'company_site'=>htmlspecialchars($this->input->post('company_site')),
                'company_address'=>htmlspecialchars($this->input->post('company_address')),
                'company_desc'=>$this->input->post('company_desc')
            ];
            $this->db->where('id_company',$DataUserSession['company_id']);
            if($this->db->update('company',$data)){
                $res =[
                    'status'=> "true",
                    'results'=> [
                        'msg'=>$this->lang->line('success_update_company_info')
                    ]
                ];
            }else{
                $res =[
                    'status'=> "false",
                    'results'=> [
                        'msg'=>$this->lang->line('failed_update_company_info')
                    ]
                ];
            }
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('not_company_info')
                ]
            ];
        }
        echo json_encode($res);
    }
    function _CompanyCREATEJOB(){
        $DataUserSession = $this->QueryModel->_AccountCOMPANY($this->session->userdata('_id'));
        if($DataUserSession){
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size']      = '10000';
                $config['file_name']     = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/loker/';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    $data= [
                        '_id' =>  $this->ltp->ltp_id(),
                        'company_id' => $DataUserSession['company_id'],
                        'title' => htmlspecialchars($this->input->post('title')),
                        'poster' =>htmlspecialchars($this->upload->data('file_name')),
                        'delivery_destination' => htmlspecialchars($this->input->post('delivery_destination')),
                        'date_create' => date('d m Y H:i:s'),
                        'close_in'=>htmlspecialchars($this->input->post('close')),
                        'note' => $this->input->post('title'),
                        'job_vacancy_status'=> 'Show'
                    ];
                    if($this->db->insert('job_vacancy',$data)){
                        $msg = $this->lang->line('success_create_job_vacncy_info');;
                        $color = 'text-success';
                    }else{
                        $msg = $this->lang->line('failed_create_job_vacncy_info');;
                        $color = 'text-danger';
                    }
                }else{
                    $msg = $this->lang->line('_ckeck_pdf_png');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('failed_upload_file');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_company_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/company');
    }
    function _COMPANY_job_application_moveVIEW($job_Appl){
        $DataJobApplication = $this->QueryModel->_QueryCOMPANY_job_application_moveVIEW($job_Appl);
        if($DataJobApplication){
            if($DataJobApplication['status_job_application'] == 'New'){
                $this->db->set('status_job_application','View');
                $this->db->where('_id',$job_Appl);
                $this->db->update('job_application');
                return true;
            }
        }
    }
    function _jobVacancySTATUS($_ID_JOBVACANCY){
        $JOBDETAIL = $this->QueryModel->_CompanyJobvacancyDataQueryOne($_ID_JOBVACANCY);
        if($JOBDETAIL){
            if($JOBDETAIL['job_vacancy_status'] == 'Show'){
                $this->db->set('job_vacancy_status', 'Hide');
            }else{
                $this->db->set('job_vacancy_status', 'Show');
            }
            $this->db->where('_id',$_ID_JOBVACANCY);
            if($this->db->update('job_vacancy')){
                $msg = $this->lang->line('success_update_job_vacncy_info');
                $color = 'text-success'; 
            }else{
                $msg = $this->lang->line('failed_update_job_vacncy_info');
                $color = 'text-danger'; 
            }
            $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
            redirect('app/company/job-vacancy/data/'.$_ID_JOBVACANCY);
        }else{
            $msg = $this->lang->line('data_Not_found');
            $color = 'text-danger'; 
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/company');
    }
    function _jobVacancyDELETE($_ID_VACANCY){
        $JOBDETAIL = $this->QueryModel->_CompanyJobvacancyDataQueryOne($_ID_VACANCY);
        if($JOBDETAIL){
            if(unlink(FCPATH . '/assets/public/images/loker/' . $JOBDETAIL['poster'])){
                $this->db->where('_id',$_ID_VACANCY);
                if($this->db->delete('job_vacancy')){
                    $this->db->where('job_vacancy_id',$_ID_VACANCY);
                    if($this->db->delete('job_application')){
                        $msg = $this->lang->line('success_delete_job_vacncy_info');
                        $color = 'text-success'; 
                    }
                }else{
                    $msg = $this->lang->line('failed_delete_job_vacncy_info');
                    $color = 'text-danger'; 
                }
            }else{
                $msg = 'Failed Unlink Poster Job Vacancy!';
                $color = 'text-danger';
                $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
                redirect('app/company/job-vacancy/data/'.$_ID_VACANCY); 
            }
        }else{
            $msg =  $this->lang->line('data_Not_found');
            $color = 'text-danger'; 
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/company');
    }
    function _privateDownloadFile($_ID_application){
        $file = $this->QueryModel->_CompanyGetCVDataUSER($_ID_application);
        force_download('assets/public/images/cv/'. $file['cv'], NULL);
    }
    function _privateDownloadFilecertificate($ID_Certivicate){
        $file = $this->QueryModel->_CompanyGetCERTIFICATEDataUSER($ID_Certivicate);
        force_download('assets/public/images/certificate/'. $file['certificate_file'], NULL);
    }
    function _decision($ID_job_Appl){
        $DataJobApplication = $this->QueryModel->_QueryCOMPANY_job_application_moveVIEW($ID_job_Appl);
        if($DataJobApplication){
            if( htmlspecialchars($this->input->post('decision')) != '-'){
                $this->db->set('note_job_application', $this->input->post('decision_note'));
                $this->db->set('status_job_application', htmlspecialchars($this->input->post('decision')));
                $this->db->where('_id',$ID_job_Appl);
                $this->db->update('job_application');
                $res =[
                    'status'=> "success",
                    'results'=> [
                        'msg'=>$this->lang->line('submitted_info_job_seeker')
                    ]
                ];
            }else{
                $res =[
                    'status'=> "false",
                    'results'=> [
                        'msg'=>$this->lang->line('not_prosess_info_job_seeker')
                    ]
                ];
            }
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('jobapp_not_info')
                ]
            ];
        }
        echo json_encode($res);
    }
    function _uploadgallery($_ID){
        $DataUserSession = $this->QueryModel->_AccountCOMPANY($_ID);
        if($DataUserSession){
        
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size']      = '10000';
                $config['file_name']     = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/gallery/';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    $data= [
                        '_id' =>  $this->ltp->ltp_id(),
                        'company_id' => $DataUserSession['company_id'],
                        'image' =>htmlspecialchars($this->upload->data('file_name')),
                    ];
                    if($this->db->insert('gallery_company',$data)){
                        $msg = $this->lang->line('success_upload_galery');
                        $color = 'text-success';
                    }else{
                        $msg =$this->lang->line('failed_upload_galery');
                        $color = 'text-danger';
                    }
                }else{
                    $msg = $this->lang->line('_ckeck_pdf_png');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('failed_upload_file');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_company_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/company/account/'.$this->session->userdata('_id'));
    }

    function _Updategallery($_ID){
        $DataUserSession = $this->QueryModel->_AccountCOMPANY($this->session->userdata('_id'));
        $GalleryDataOne = $this->QueryModel->_GalleryDataOne($_ID);
        if($DataUserSession){
            if($GalleryDataOne){
                $upload_image = $_FILES['image']['name'];
                if($upload_image){
                    $config['allowed_types'] = 'png|jpg|jpeg';
                    $config['max_size']      = '10000';
                    $config['file_name']     = $this->ltp->ltp_GenFILENAME();
                    $config['upload_path'] = 'assets/public/images/gallery/';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('image')) {
                        unlink(FCPATH . '/assets/public/images/gallery/' . $GalleryDataOne['image']);
                        $data= [
                            '_id' =>  $this->ltp->ltp_id(),
                            'company_id' => $DataUserSession['company_id'],
                            'image' =>htmlspecialchars($this->upload->data('file_name')),
                        ];
                        $this->db->where('_id',$_ID);
                        if($this->db->update('gallery_company',$data)){
                            $msg = $this->lang->line('success_upload_galery');
                            $color = 'text-success';
                        }else{
                            $msg = $this->lang->line('failed_upload_galery');
                            $color = 'text-danger';
                        }
                    }else{
                        $msg =  $this->lang->line('_ckeck_pdf_png');
                        $color = 'text-danger';
                    }
                }else{
                    $msg = $this->lang->line('failed_upload_file');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('data_Not_found');
            $color = 'text-danger';
            }
            
        }else{
            $msg = $this->lang->line('not_company_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/company/account/'.$this->session->userdata('_id'));
    }
    function _ColorCreate($data){
        if($this->db->insert('color_header',$data)){
            return true;
        }else{
            return false;
        }
    }
    function _SETColor($ID_COLOR){
        $Session_COLOR = $this->QueryModel->_ColorAktif();
        if($Session_COLOR){
            $this->db->set('status','Not Aktif');
            $this->db->where('color',$this->session->userdata('session_color'));
            $this->db->where('user_id',$this->session->userdata('_id'));
            if($this->db->update('color_header')){
                $CALL_COLOR = $this->QueryModel->_ColorCall($ID_COLOR);
                $this->db->set('status','Aktif');
                $this->db->where('user_id',$this->session->userdata('_id'));
                $this->db->where('id_color',$ID_COLOR);
                $this->db->update('color_header');
                $this->session->set_userdata(['session_color' =>$CALL_COLOR['color']]);
            }
        }else{
            $msg = $this->lang->line('color_not_found');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        $this->ltp->ltp_redirect_Befor_Account_UP($this->session->userdata('role_id'),$this->session->userdata('_id'));
    }
    function _DELETEColor($ID_COLOR){
        $Session_COLOR = $this->QueryModel->_ColorAktif();
        if($Session_COLOR){
            $this->db->where('id_color',$ID_COLOR);
            $this->db->delete('color_header');
            $msg = $this->lang->line('color_success_delete');
            $color = 'text-success';
        }else{
            $msg = $this->lang->line('color_failed_delete');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        $this->ltp->ltp_redirect_Befor_Account_UP($this->session->userdata('role_id'),$this->session->userdata('_id'));
    }
    function _SETVIEWSTATUS($ID_USER){
        $dataUSER = $this->QueryModel->_DetailNewUserREQUEST($ID_USER);
        if($dataUSER){
            $this->db->set('status','View');
            $this->db->where('_id',$ID_USER);
            $this->db->update('users');
            return true;
        }else{
            redirect('app/control/users/'.$this->session->userdata('_id'));
        }
    }
    function _SETAKTIVATESTATUS($ID_USER){
        $dataUSER = $this->QueryModel->_DetailNewUserREQUEST($ID_USER);
        if($dataUSER){
            $this->db->set('status','Aktif');
            $this->db->where('_id',$ID_USER);
            $this->db->update('users');
            redirect('app/control/users/'.$this->session->userdata('_id'));
        }else{
            redirect('app/control/users/'.$this->session->userdata('_id'));
        }
    }
    function _SETDISABLESTATUS($ID_USER){
        $dataUSER = $this->QueryModel->_DetailNewUserREQUEST($ID_USER);
        if($dataUSER){
            $this->db->set('status','Tidak Aktif');
            $this->db->where('_id',$ID_USER);
            $this->db->update('users');
            redirect('app/control/users/'.$this->session->userdata('_id'));
        }else{
            redirect('app/control/users/'.$this->session->userdata('_id'));
        }
    }
    function _UserDELETE($ID_USER){
        $dataUSER = $this->QueryModel->_DetailUSERID($ID_USER);
        if($dataUSER){
            if($dataUSER['role_id'] == 3){
               $this->AcctionsModel->_Func_DELETEWHEREIDUSER($ID_USER);
                unlink(FCPATH . '/assets/public/images/profile/' . $dataUSER['photo']);
                $this->db->where('_id', $ID_USER);
                $this->db->delete('users');
                $msg = 'Data User Success Delete!';
                $color = 'text-primary';
            }else if($dataUSER['role_id'] == 2){
                $this->AcctionsModel->_Func_DELETEUSERCOMPANYWHEREIDUSER($ID_USER);
                unlink(FCPATH . '/assets/public/images/profile/' . $dataUSER['photo']);
                $this->db->where('_id', $ID_USER);
                $this->db->delete('users');
                $msg = $this->lang->line('success_delete_user');
                $color = 'text-primary';
            }else{
                $msg = $this->lang->line('_no_user');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('user_no_found');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/users/'.$this->session->userdata('_id'));
    }
    function _Func_DELETEWHEREIDUSER($ID_USER){
        $ABILITY = $this->QueryModel->_WHEREUSERABILITY($ID_USER);
        if($ABILITY){
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('user_ability');
        }
        $USER_ACTIFITY = $this->QueryModel->_WHEREUSERACTIFITY($ID_USER);
        if($USER_ACTIFITY){
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('users_activity');
        }
        $USER_PERSONAL = $this->QueryModel->_WHEREUSERPERSONAL($ID_USER);
        if($USER_PERSONAL){
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('prersonal_data');
        }
        $USER_JOB_APPLICATION = $this->QueryModel->_WHEREUSERJOBAPPLICATION($ID_USER);
        if($USER_JOB_APPLICATION){
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('job_application');
        }
        $USER_EXPERIENCE = $this->QueryModel->_WHEREUSEREXPERIENCE($ID_USER);
        if($USER_EXPERIENCE){
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('experience');
        }
        $USER_AUTH_ACCESS = $this->QueryModel->_WHEREUSERAUTHACCESSTOKEN($ID_USER);
        if($USER_AUTH_ACCESS){
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('auth_user_tokens');
        }
        $USER_SERTIVICATE = $this->QueryModel->_WHEREUSERSERTIVICATE($ID_USER);
        if($USER_SERTIVICATE){
            foreach($USER_SERTIVICATE as $SER){
            unlink(FCPATH . '/assets/public/images/certificate/' . $ser['certificate_file']);
            }
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('certificate');
        }
        $USER_CV = $this->QueryModel->_WHEREUSERCV($ID_USER);
        if($USER_CV){
            foreach($USER_CV as $CV){
            unlink(FCPATH . '/assets/public/images/cv/' . $cv['cv']);
            }
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('cv');
        }               
    }
    function _Func_DELETEUSERCOMPANYWHEREIDUSER($ID_USER){
        $dataUSER = $this->QueryModel->_DetailUSERID($ID_USER);
        $USER_AUTH_ACCESS = $this->QueryModel->_WHEREUSERAUTHACCESSTOKEN($ID_USER);
        if($USER_AUTH_ACCESS){
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('auth_user_tokens');
        }
        $USER_ACTIFITY = $this->QueryModel->_WHEREUSERACTIFITY($ID_USER);
        if($USER_ACTIFITY){
            $this->db->where('user_id',$ID_USER);
            $this->db->delete('users_activity');
        }
    }
    function _AccountUSERUPDATE($_ID){
        if($this->QueryModel->_Account($_ID)){
            $data =[
                'nim' => htmlspecialchars($this->input->post('nim')),
                'email' => htmlspecialchars($this->input->post('email')),
                'name' => htmlspecialchars($this->input->post('name')),
                'phone' => htmlspecialchars($this->input->post('phone')),
                'tempat_tanggal_lahir'=>htmlspecialchars($this->input->post('tempat_tanggal_lahir')),
                'jenis_kelamin'=>htmlspecialchars($this->input->post('jenis_kelamin')),
                'status_pernikahan'=>htmlspecialchars($this->input->post('status_pernikahan')),
                'major_id'=>htmlspecialchars($this->input->post('major')),
                'alamat'=>htmlspecialchars($this->input->post('alamat')),
             ];
             $this->db->where('_id',$_ID);
             if($this->db->update('users',$data)){
                 $res =[
                     'status'=> "success",
                     'results'=> [
                         'msg'=>$this->lang->line('success_update_user')
                     ]
                 ];
             }else{
                 $res =[
                     'status'=> "false",
                     'results'=> [
                         'msg'=>$this->lang->line('failed_update_user')
                     ]
                 ];
             }
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('user_no_found')
                    ]
            ];
        }
        echo json_encode($res);
    }
    function _AccountUSERUPDATECOMPANY($_ID){
        if($this->QueryModel->_Account($_ID)){
            $data =[
                'email' => htmlspecialchars($this->input->post('email')),
                'name' => htmlspecialchars($this->input->post('name')),
                'phone' => htmlspecialchars($this->input->post('phone')),
                'tempat_tanggal_lahir'=>htmlspecialchars($this->input->post('tempat_tanggal_lahir')),
                'jenis_kelamin'=>htmlspecialchars($this->input->post('jenis_kelamin')),
                'status_pernikahan'=>htmlspecialchars($this->input->post('status_pernikahan')),
                'company_id'=>htmlspecialchars($this->input->post('company')),
                'alamat'=>htmlspecialchars($this->input->post('alamat')),
             ];
             $this->db->where('_id',$_ID);
             if($this->db->update('users',$data)){
                 $res =[
                     'status'=> "success",
                     'results'=> [
                         'msg'=>$this->lang->line('success_update_accoint_company')
                     ]
                 ];
             }else{
                 $res =[
                     'status'=> "false",
                     'results'=> [
                         'msg'=>$this->lang->line('failed_update_accoint_company')
                     ]
                 ];
             }
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('not_company_info')
                    ]
            ];
        }
        echo json_encode($res);
    }
    function _AccountUSERCREATECOMPANY(){
        $data =[
            '_id' => $this->ltp->ltp_id(),
            'nim' => htmlspecialchars($this->input->post('nim')),
            'email' => htmlspecialchars($this->input->post('email')),
            'name' => htmlspecialchars($this->input->post('name')),
            'phone' => htmlspecialchars($this->input->post('phone')),
            'password'=>password_hash(htmlspecialchars($this->input->post('password')),PASSWORD_DEFAULT),
            'tempat_tanggal_lahir'=>htmlspecialchars($this->input->post('tempat_tanggal_lahir')),
            'jenis_kelamin'=>htmlspecialchars($this->input->post('jenis_kelamin')),
            'status_pernikahan'=>htmlspecialchars($this->input->post('status_pernikahan')),
            'company_id'=>htmlspecialchars($this->input->post('company')),
            'alamat'=>htmlspecialchars($this->input->post('alamat')),
            'photo' => 'de.jpeg',
            'status'=> 'Aktif',
            'role_id'=>2
         ];
        
         if($this->db->insert('users',$data)){
             $res =[
                 'status'=> "success",
                 'results'=> [
                     'msg'=>$this->lang->line('success_create_accoint_company')
                 ]
             ];
         }else{
             $res =[
                 'status'=> "false",
                 'results'=> [
                     'msg'=>$this->lang->line('failed_create_accoint_company')
                 ]
             ];
         }
         echo json_encode($res);
    }
    function _COMPANY_UPDATEDATA($ID_COMPANY){
        $DataUserSession = $this->QueryModel->_Account($this->session->userdata('_id'));
        if($DataUserSession){
            $data = [
                'company_name'=>htmlspecialchars($this->input->post('company_name')),
                'company_mail'=>htmlspecialchars($this->input->post('company_mail')),
                'company_phone'=>htmlspecialchars($this->input->post('company_phone')),
                'company_site'=>htmlspecialchars($this->input->post('company_site')),
                'company_address'=>htmlspecialchars($this->input->post('company_address')),
                'company_desc'=>$this->input->post('company_desc')
            ];
            $this->db->where('id_company',$ID_COMPANY);
            if($this->db->update('company',$data)){
                $res =[
                    'status'=> "Success",
                    'results'=> [
                        'msg'=>$this->lang->line('succes_infomation_company')
                    ]
                ];
            }else{
                $res =[
                    'status'=> "false",
                    'results'=> [
                        'msg'=>$this->lang->line('failed_infomation_company')
                    ]
                ];
            }
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('not_company_info')
                ]
            ];
        }
        echo json_encode($res);
    }
    function _CompanyDELETE($ID_COMPANY){
        $DataCompany = $this->QueryModel->_CompanyProfileDataQueryOneWhere($ID_COMPANY);
        if($DataCompany){
            $this->AcctionsModel->_Func_DELETEWHEREIDCompany($ID_COMPANY);
            unlink(FCPATH . '/assets/public/images/loker/' . $DataCompany['company_sampul']);
            $this->db->where('id_company',$ID_COMPANY);
            if($this->db->delete('company')){
                $msg = $this->lang->line('succes_delete_company');
                $color = 'text-primary';
            }else{
                $msg = $this->lang->line('failed_delete_company');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('data_Not_found');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/company/'.$this->session->userdata('_id'));
    }
    function _Func_DELETEWHEREIDCompany($ID_COMPANY){
        $DataUser =  $this->QueryModel->_WHERECOMPANYDATA($ID_COMPANY);
        $DataToken =  $this->QueryModel->_WHEREUSERAUTHACCESSTOKEN($DataUser['_id']);
        if($DataToken){
            $this->db->where('user_id',$DataUser['_id']);
            $this->db->delete('auth_user_tokens');
        }
        if($DataUser){
            foreach($DataUser as $USER){
                unlink(FCPATH . '/assets/public/images/profile/' . $USER['photo']);
            }
            $this->db->where('company_id', $ID_COMPANY);
            $this->db->delete('users');
            $this->db->where('user_id',$DataUser['_id']);
            $this->db->delete('users_activity');
        }
        $DataJobVacancy =  $this->QueryModel->_WHERECOMPANYDATAJob($ID_COMPANY);
        if($DataJobVacancy){
            $this->db->where('job_vacancy_id',$DataJobVacancy['_id']);
            $this->db->delete('job_application');
            foreach($DataJobVacancy as $Job){
                unlink(FCPATH . '/assets/public/images/loker/' . $Job['poster']);
            }
            $this->db->where('company_id',$ID_COMPANY);
            $this->db->delete('job_vacancy');
        }
        $DataGallery = $this->QueryModel->_CompanyGalleryDataQueryOne($ID_COMPANY);
        if($DataGallery){
            foreach($DataGallery as $gal){
                unlink(FCPATH . '/assets/public/images/gallery/' . $gal['image']);
            }
            $this->db->where('company_id',$ID_COMPANY);
            $this->db->delete('gallery_company');
        }
        
    }
    function _CreateCompany($_ID){
        $data = [
            'id_company' => htmlspecialchars($this->ltp->ltp_id()),
            'company_name' => htmlspecialchars($this->input->post('company_name')),
            'company_status' => htmlspecialchars($this->input->post('company_status')),
        ];
        if($this->db->insert('company', $data)){
            $res =[
                'status'=> "Success",
                'results'=> [
                    'msg'=>$this->lang->line('succes_create_company')
                ]
            ];
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('failed_create_company')
                ]
            ];
        }
        echo json_encode($res);
    }
    function _CompanySTATUS($ID_COMPANY){
        $DATACOMPANY = $this->QueryModel->_WHEREUSERCOMPANYDATA($ID_COMPANY);
        if($DATACOMPANY){
            if($DATACOMPANY['company_status'] == 'Aktif'){
                $this->db->set('company_status','Not Aktif');
            }else{
                $this->db->set('company_status','Aktif');
            }
            $this->db->where('id_company',$ID_COMPANY);
            if( $this->db->update('company')){
                $msg = $this->lang->line('succes_update_company');
                $color = 'text-primary';
            }else{
                $msg = $this->lang->line('failed_update_company');
                $color = 'text-danger';
            }
            $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
            redirect('app/control/company/data/detail/'.$ID_COMPANY);
        }else{
            $msg = $this->lang->line('data_Not_found');
            $color = 'text-danger';
            $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
            redirect('app/control/company/'.$this->session->userdata('_id'));
        }
    }
    function _CrateCompanyCREATEJOB(){
        $DataCompany = $this->QueryModel->_CompanyProfileDataQueryOneWhere($this->input->post('company'));
        if($DataCompany){
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size']      = '10000';
                $config['file_name']     = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/loker/';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    $data= [
                        '_id' =>  $this->ltp->ltp_id(),
                        'company_id' => $DataCompany['id_company'],
                        'title' => htmlspecialchars($this->input->post('title')),
                        'poster' =>htmlspecialchars($this->upload->data('file_name')),
                        'delivery_destination' =>htmlspecialchars($this->input->post('delivery_destination')),
                        'date_create' => date('d m Y H:i:s'),
                        'close_in'=>htmlspecialchars($this->input->post('close')),
                        'note' => $this->input->post('note'),
                        'job_vacancy_status'=> 'Show'
                    ];
                    if($this->db->insert('job_vacancy',$data)){
                        $msg =$this->lang->line('success_create_job_vacncy_info');
                        $color = 'text-success';
                    }else{
                        $msg = $this->lang->line('failed_create_job_vacncy_info');
                        $color = 'text-danger';
                    }
                }else{
                    $msg = $this->lang->line('_ckeck_pdf_png');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('failed_upload_file');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_company_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/job-vacancy/'.$this->session->userdata('_id'));
    }
    function _UPDATEJOB($ID_JOB){
        $jobDATA = $this->QueryModel->_jobvacancyDataQueryOne($ID_JOB);
        if($jobDATA){
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size']      = '10000';
                $config['file_name']     = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/loker/';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    unlink(FCPATH . '/assets/public/images/loker/' . $jobDATA['poster']);
                    $this->db->set('poster', htmlspecialchars($this->upload->data('file_name')));
                }
            }
            $data= [
                'title' => htmlspecialchars($this->input->post('title')),
                'delivery_destination' =>htmlspecialchars($this->input->post('delivery_destination')),
                'note' => $this->input->post('note'),
                'close_in'=>htmlspecialchars($this->input->post('close')),
            ];
            $this->db->where('_id',$ID_JOB);
            if($this->db->update('job_vacancy',$data)){
                $msg = $this->lang->line('success_update_job_vacncy_info');
                $color = 'text-success';
            }else{
                $msg = $this->lang->line('failed_update_job_vacncy_info');
                $color = 'text-danger';
            }
        }else{
            
            $msg = $this->lang->line('not_company_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/job-vacancy/data/'.$ID_JOB);
    }
    function _DELETEjobvacncy($ID_JOB){
        $jobDATA = $this->QueryModel->_jobvacancyDataQueryOne($ID_JOB);
        if($jobDATA){
           if($this->QueryModel->_QueryJobAppWhereDIVACANCY($ID_JOB)){
               $this->db->where('job_vacancy_id',$ID_JOB);
               $this->db->delete('job_application');
           }
           unlink(FCPATH . '/assets/public/images/loker/' . $jobDATA['poster']);
            $this->db->where('_id',$ID_JOB);
            $this->db->delete('job_vacancy');
        }else{
            $msg = 'Data Job Vacancy Not Found!';
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/job-vacancy/'.$this->session->userdata('_id'));
    }
    function _DELETEjobapp($ID_JOBAPP){
        if($this->QueryModel->_QueryJobApp($ID_JOBAPP)){
            $this->db->where('_id',$ID_JOBAPP);
            $this->db->delete('job_application');
        }else{
            $msg = $this->lang->line('data_Not_found');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/job-vacancy/'.$this->session->userdata('_id'));
    }
    function _langput($lang){
        $path = APPPATH.'language/'.$lang.'/app_lang.php';
        $path_validate = APPPATH.'language/'.$lang.'/form_validation_lang.php';
        file_put_contents($path,$this->input->post('code'));
        file_put_contents($path_validate,$this->input->post('form_validation_lang'));
        redirect('app/control/setting/lang/'.$lang);
    }
    function _Activitydelete($ID_ACTIVITY){
        $ACTIVITY = $this->QueryModel->_activityQUERYDATAOne($ID_ACTIVITY);
        if($ACTIVITY){
            unlink(FCPATH . '/assets/public/images/aktifitas/' . $ACTIVITY['image']);
            $this->db->where('_id',$ID_ACTIVITY);
            $this->db->delete('activity');
        }else{
            $msg = $this->lang->line('not_cv_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/activity-information/'.$this->session->userdata('_id'));
    }
    function _activityinfoUPDATE($ID_ACTIVITY){
        $ACTIVITY = $this->QueryModel->_activityQUERYDATAOne($ID_ACTIVITY);
        if($ACTIVITY){
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size']      = '7000';
                $config['file_name']     = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/loker/';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    unlink(FCPATH . '/assets/public/images/aktifitas/' . $ACTIVITY['image']);
                    $file = htmlspecialchars($this->upload->data('file_name'));
                }
            }
            $data =[
                'title' => htmlspecialchars($this->input->post('title')),
                'image' => $file,
                'desc_activity'=> htmlspecialchars($this->input->post('desc_activity')),
            ];
        }else{
            $msg = $this->lang->line('data_Not_found');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/activity-information/'.$this->session->userdata('_id'));
    }
    function _activityinfoCreate(){
        $upload_image = $_FILES['image']['name'];
        if($upload_image){
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['max_size']      = '10000';
            $config['file_name']     = $this->ltp->ltp_GenFILENAME();
            $config['upload_path'] = 'assets/public/images/loker/';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $data =[
                    'title' => htmlspecialchars($this->input->post('title')),
                    'image' => htmlspecialchars($this->upload->data('file_name')),
                    'desc_activity'=> htmlspecialchars($this->input->post('desc_activity')),
                    'date_upload' => date('d m Y')
                ];
                $msg = $this->lang->line('cuccess_create_active');
            $color = 'text-danger';
            }else{
                $msg = $this->lang->line('ckeck_pdf_png');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('failed_create_active');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/control/activity-information/'.$this->session->userdata('_id'));
        
    }
    public function _commanditaireprimary($CV_ID){
        $CV = $this->QueryModel->_Commanditaire($CV_ID);
        if($CV){
            $this->db->set('cv_key','FALSE');
            $this->db->where('user_id',$this->session->userdata('_id'));
            if($this->db->update('cv')){
                $this->db->set('cv_key','TRUE');
                $this->db->where('user_id',$this->session->userdata('_id'));
                $this->db->where('_id',$CV_ID);
                $this->db->update('cv');
            }
        }else{
            $msg = $this->lang->line('data_Not_found');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('msg', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('app/cv-data/'.$this->session->userdata('_id'));
    }
}