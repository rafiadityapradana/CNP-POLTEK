<?php
class QueryModel extends CI_Model
{
    public function __Construct(){
        parent::__Construct();
        ini_set('date.timezone', 'Asia/Jakarta');
        
    }
    function _SumActifityUserNow($ip){
        $this->db->where('tahun',date('Y'));
        $this->db->where('bulan',date('M'));
        $this->db->where('tanggal',date('d'));
        $this->db->where('ip',$ip);
        return $this->db->count_all_results('ip_access');
    }
    function _QueryUsersACCTIFITY($ip,$USER_ID){
        $this->db->where('time_login', date('d M Y'));
        $this->db->where('ip_access',$ip);
        $this->db->where('user_id',$USER_ID);
        return $this->db->get('users_activity')->row_array();
    }
    function _ip_access($ip,$start_access){
        $this->db->where('tanggal',date('d'));
        $this->db->where('bulan',date('M'));
        $this->db->where('tahun',date('Y'));
        $this->db->where('ip',$ip);
        $this->db->where('start_access',$start_access);
        return $this->db->get('ip_access')->row_array();
    }
    function _Account($_ID){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('user_roles ur','us.role_id = ur.id_role');
        $this->db->where('_id',$_ID);
        $DataUserID = $this->db->get()->row_array();
        if($DataUserID){
            return $DataUserID;
        }else{
            $this->ltp->ltp_redirect_Account($this->session->userdata('role_id'));
        }
    }
    function SESSIONSCREEN($_ID){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('user_roles ur','us.role_id = ur.id_role');
        $this->db->where('_id',$_ID);
        $DataUserID = $this->db->get()->row_array();
        if($DataUserID){
            return $DataUserID;
        }else{
            $this->ltp->ltp_redirect_Account($this->session->userdata('role_id'));
        }
    }
    function _PersonalDataQuery(){
        return $this->db->get_where('prersonal_data',['user_id'=>$this->session->userdata('_id')])->row_array();
    }
    function _PersonalDataQueryTOTAL(){
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->from('prersonal_data');
        return $this->db->count_all_results();
    }
    function _TotalCommanditaireVennootschapDataQuery(){
        $this->db->where('status_cv !=','Hide');
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->from('cv');
        return $this->db->count_all_results();
    }
    function _CommanditaireVennootschapDataQuery(){
        $this->db->where('status_cv !=','Hide');
        $this->db->where('user_id',$this->session->userdata('_id'));
        return $this->db->get('cv')->result_array();
    }
    function _Commanditaire($_ID_Commanditaire){
        $this->db->where('status_cv !=','Hide');
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->where('_id',$_ID_Commanditaire);
        return $this->db->get('cv')->row_array();
    }
    function __CHECK_CV_($CV_ID){
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->where('_id' ,$CV_ID);
        return $this->db->get('cv')->row_array();
    }
    function _CHECK_JOB_APPLICATION($_ID_Commanditaire){
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->where('cv_id',$_ID_Commanditaire);
        return $this->db->get('job_application')->row_array();
    }
    function _TotalExperienceDataQuery(){
        $this->db->where('user_id',$this->session->userdata('_id'));
        return $this->db->count_all('experience');
    }
    function _ExperienceDataQuery(){
        $this->db->where('user_id',$this->session->userdata('_id'));
        return $this->db->get('experience')->result_array();
    }
    function _Experience($_ID_Commanditaire){
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->where('_id',$_ID_Commanditaire);
        return $this->db->get('experience')->result_array();
    }
    function _Total_abilityUserDATA(){
        $this->db->where('user_id',$this->session->userdata('_id'));
        return $this->db->count_all_results('user_ability');
    }
    function _abilityUserDATA(){
        return $this->db->get_where('user_ability',['user_id' => $this->session->userdata('_id')])->result_array();
    }
    function _abilityUserDATAOne($_ID_Ability){
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->where('_id',$_ID_Ability);
        return $this->db->get('user_ability')->row_array();
    }
    function _abilityUserDATAPublic($DATA_ID_SEEKRES){
        return $this->db->get_where('user_ability',['user_id' => $DATA_ID_SEEKRES])->result_array();
    }
    function _Total_certificateUserDATA(){
        $this->db->where('user_id',$this->session->userdata('_id'));
        return $this->db->count_all_results('certificate');
    }
    function _certificateUserDATA(){
        return $this->db->get_where('certificate',['user_id' => $this->session->userdata('_id')])->result_array();
    }
    function _certificateUserDATAOne($_ID_certificate){
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->where('id_certificate',$_ID_certificate);
        return $this->db->get('certificate')->row_array();
    }
    function _certificateUserDATAPUBLIC($USER_ID){
        $this->db->where('user_id',$USER_ID);
        return $this->db->get('certificate')->result_array();
    }
    function _certificateDATAPUBLIC_ONE($DATA_ID_certificate){
        $this->db->select('cr.id_certificate, cr.value_certificate, cr.certificate_file, cr.user_id, us.name');
        $this->db->from('certificate cr');
        $this->db->join('users us','cr.user_id = us._id');
        $this->db->where('cr.id_certificate',$DATA_ID_certificate);
        return $this->db->get()->row_array();
    }
    function _jobvacancyDataQuery(){
        $this->db->select('jv._id, jv.title, jv.company_id,  jv.poster, jv.date_create, jv.note, cy.company_name, cy.company_sampul, cy.company_address, cy.company_status,cy.company_mail,cy.company_phone,jv.delivery_destination,jv.close_in');
        $this->db->order_by('date_create','DESC');
        $this->db->from('job_vacancy jv');
        $this->db->join('company cy','jv.company_id = cy.id_company');
        $this->db->where('cy.company_status','Aktif');
        $this->db->where('jv.job_vacancy_status !=','Hide');
        return $this->db->get()->result_array();
    }
    function _jobvacancyDataQueryWhereDate(){
        $this->db->select('jv._id, jv.title, jv.company_id,  jv.poster, jv.date_create, jv.note, cy.company_name, cy.company_sampul, cy.company_address, cy.company_status,cy.company_mail,cy.company_phone,jv.delivery_destination,jv.close_in');
        $this->db->order_by('date_create','DESC');
        $this->db->from('job_vacancy jv');
        $this->db->join('company cy','jv.company_id = cy.id_company');
     
        $this->db->where('cy.company_status','Aktif');
        $this->db->where('jv.job_vacancy_status !=','Hide');
        //2021-01-25
        //$this->db->where('jv.open_in >=', date('Y-m-d'));
        $this->db->where('jv.close_in >=',date('Y-m-d'));
        return $this->db->get()->result_array();
    }
    
    function _jobvacancyDataQueryNew(){
        $this->db->select('jv._id, jv.title, jv.company_id,  jv.poster, jv.date_create, jv.note, cy.company_name, cy.company_sampul, cy.company_address, cy.company_status,cy.company_mail,cy.company_phone,jv.delivery_destination,jv.close_in');
        $this->db->order_by('date_create','DESC');
        $this->db->from('job_vacancy jv');
        $this->db->join('company cy','jv.company_id = cy.id_company');
        $this->db->where('cy.company_status','Aktif');
        $this->db->where('jv.job_vacancy_status !=','Hide');
        $this->db->where('notive','TRUE'); 
        return $this->db->get()->result_array();
    }
    function _jobvacancyDataQueryLimit(){
        $this->db->select('jv._id, jv.title, jv.company_id, jv.poster, jv.date_create, jv.note, cy.company_name, cy.company_sampul, cy.company_address, cy.company_status,jv.close_in');
        $this->db->order_by('date_create','DESC');
        $this->db->from('job_vacancy jv');
        $this->db->join('company cy','jv.company_id = cy.id_company');
        $this->db->where('cy.company_status','Aktif');
        $this->db->where('jv.job_vacancy_status !=','Hide');
        $this->db->limit(3);
        return $this->db->get()->result_array();
    }
    function _jobvacancyDataQueryOne($ID_VACANCY){
        $this->db->select('jv._id, jv.title, jv.company_id, jv.title, jv.poster, jv.date_create, jv.note, cy.company_name, cy.company_sampul, cy.company_address, cy.company_status,jv.delivery_destination,jv.notive,jv.close_in');
        $this->db->from('job_vacancy jv');
        $this->db->join('company cy','jv.company_id = cy.id_company');
        $this->db->where('cy.company_status','Aktif');
        $this->db->where('jv.job_vacancy_status !=','Hide');
        $this->db->where('jv._id', $ID_VACANCY);
        $data=  $this->db->get()->row_array();
        if($data['notive'] == 'TRUE'){
            $this->db->where('_id',$ID_VACANCY);
            $this->db->set('notive','FALSE');
            $this->db->update('job_vacancy');
        }
        return $data;
    }
    function _jobvacancyDataQueryOneCheck($ID_VACANCY){
        $this->db->select('jv._id, jv.company_id, c.user_id, cy.company_status');
        $this->db->from('job_application jp');
        $this->db->join('cv c', 'jp.cv_id = c._id');
        $this->db->join('users us', 'c.user_id = us._id');
        $this->db->join('job_vacancy jv', 'jp.job_vacancy_id = jv._id');
        $this->db->join('company cy','jv.company_id = cy.id_company');
        $this->db->where('c.user_id', $this->session->userdata('_id'));
        $this->db->where('cy.company_status','Aktif');
        $this->db->where('jv.job_vacancy_status !=','Hide');
        $this->db->where('jv._id', $ID_VACANCY);
        return $this->db->get()->row_array();
    }
    function _CompanyProfileDataQuery(){
        $this->db->where('company_status','Aktif');
        return $this->db->get('company')->result_array();
    }
    function _CompanyDataQuery(){
        return $this->db->get('company')->result_array();
    }
    function _CompanyProfileDataQueryOneWhere($_ID_COMPANY){
        $this->db->where('id_company', $_ID_COMPANY);
        return $this->db->get('company')->row_array();
    }
    function _CompanyProfileDataQueryOne($_ID_COMPANY){
        $this->db->where('company_status','Aktif');
        $this->db->where('id_company', $_ID_COMPANY);
        return $this->db->get('company')->row_array();
    }
    function _CompanyGalleryDataQueryOne($_ID_COMPANY){
        return $this->db->get_where('gallery_company',['company_id' => $_ID_COMPANY])->result_array();
    }
    function _CompanyGalleryDataQueryLIMIT($_ID_COMPANY){
        $this->db->limit(4);
        return $this->db->get_where('gallery_company',['company_id' => $_ID_COMPANY])->result_array();
    }
    function _TotaljobapplicationDataQuery(){
        $this->db->where('status_job_application !=','Removed By Job Seekers');
        $this->db->where('user_id',$this->session->userdata('_id'));
        return $this->db->count_all_results('job_application');
    }
    function _JOBAPPLICATIONCHECKONE($_ID_JOB_APPLICATION){
        return $this->db->get_where('job_application',['_id' => $_ID_JOB_APPLICATION])->row_array();
    }
    function _jobapplicationDataQuery(){
        $this->db->select('jp._id, jp.user_id, cy.company_name, jp.date_send, jp.status_job_application, jp.note_job_application, jv.delivery_destination, jv.title, c.cv, jv.job_vacancy_status');
        $this->db->from('job_application jp');
        $this->db->join('job_vacancy jv','jp.job_vacancy_id = jv._id');
        $this->db->join('company cy','jv.company_id = cy.id_company');
        $this->db->join('cv c', 'jp.cv_id = c._id');
        $this->db->where('jp.status_job_application !=','Removed By Job Seekers');
        $this->db->where('jp.user_id',$this->session->userdata('_id'));
        return $this->db->get()->result_array();
    }
    function _JobSeekresQueryData(){
        $this->db->select('pd.user_id, us.photo, us.name, ms.major,ms.code');
        $this->db->from('prersonal_data pd');
        $this->db->join('users us', 'pd.user_id = us._id');
        $this->db->join('majors ms', 'us.major_id = ms.id_major');
        $this->db->where('us.role_id', 3);
        $this->db->where('us.status', 'Aktif');
        return $this->db->get()->result_array();
    }
    function _JobSeekresQueryDataMI(){
        $this->db->select('pd.user_id, us.photo, us.name, ms.major,ms.code');
        $this->db->from('prersonal_data pd');
        $this->db->join('users us', 'pd.user_id = us._id');
        $this->db->join('majors ms', 'us.major_id = ms.id_major');
        $this->db->where('ms.code', 'MI');
        $this->db->where('us.role_id', 3);
        $this->db->where('us.status', 'Aktif');
        return $this->db->get()->result_array();
    }
    function _JobSeekresQueryDataTM(){
        $this->db->select('pd.user_id, us.photo, us.name, ms.major,ms.code');
        $this->db->from('prersonal_data pd');
        $this->db->join('users us', 'pd.user_id = us._id');
        $this->db->join('majors ms', 'us.major_id = ms.id_major');
        $this->db->where('ms.code', 'TM');
        $this->db->where('us.role_id', 3);
        $this->db->where('us.status', 'Aktif');
        return $this->db->get()->result_array();
    }
    function _JobSeekresQueryDataTE(){
        $this->db->select('pd.user_id, us.photo, us.name, ms.major,ms.code');
        $this->db->from('prersonal_data pd');
        $this->db->join('users us', 'pd.user_id = us._id');
        $this->db->join('majors ms', 'us.major_id = ms.id_major');
        $this->db->where('ms.code', 'TE');
        $this->db->where('us.role_id', 3);
        $this->db->where('us.status', 'Aktif');
        return $this->db->get()->result_array();
    }
    function _JobSeekresQueryDataOne($DATA_ID_SEEKRES){
        $this->db->select('pd.user_id, us.name, ms.major, us.photo, pd.tinggi, pd.golongan_darah, pd.berat, pd.negara, pd.sim, pd.fisik, pd.catatan, us.email, us.tempat_tanggal_lahir, us.jenis_kelamin, us.status_pernikahan, us.alamat,ms.code');
        $this->db->from('prersonal_data pd');
        $this->db->join('users us', 'pd.user_id = us._id');
        $this->db->join('majors ms', 'us.major_id = ms.id_major');
        $this->db->where('us.role_id', 3);
        $this->db->where('us.status', 'Aktif');
        $this->db->where('us._id',$DATA_ID_SEEKRES);
        return $this->db->get()->row_array();
    }
    function _JobSeekresQueryDataByMajor($IDMAJOR){
        $this->db->select('pd.user_id, us.photo, us.name, ms.major,ms.code');
        $this->db->from('prersonal_data pd');
        $this->db->join('users us', 'pd.user_id = us._id');
        $this->db->join('majors ms', 'us.major_id = ms.id_major');
        $this->db->where('ms.id_major', $IDMAJOR);
        $this->db->where('us.role_id', 3);
        $this->db->where('us.status', 'Aktif');
        return $this->db->get()->result_array();
    }
    function _experienceUserDATA($DATA_ID_SEEKRES){
        return $this->db->get_where('experience',['user_id' => $DATA_ID_SEEKRES])->result_array();
    }
    function _activityQUERYDATA(){
        $this->db->order_by('date_upload','_id');
        return $this->db->get('activity')->result_array();
    }
    function _activityQUERYDATALimit(){
        $this->db->limit(6);
        $this->db->order_by('date_upload','DESC');
        return $this->db->get('activity')->result_array();
    }
    
    function _activityQUERYDATA_Not($_ID_ACTIVITY){
        $this->db->order_by('date_upload','DESC');
        $this->db->where('_id !=', $_ID_ACTIVITY);
        return $this->db->get('activity')->result_array();
    }
    function _activityQUERYDATAOne($_ID_ACTIVITY){
        return $this->db->get_where('activity',['_id' => $_ID_ACTIVITY])->row_array();
    }
    function _majorsQUERYDATA(){
        return $this->db->get('majors')->result_array();
    }

    /* Company  */

    function _AccountCOMPANY($_ID){
        $this->db->select('us._id,us.nim,us.email,us.name,us.phone,us.tempat_tanggal_lahir,us.jenis_kelamin,us.status_pernikahan,us.alamat,us.photo,us.status,us.company_id,cm.company_name,cm.company_sampul,cm.company_phone,cm.company_mail,cm.company_site,cm.company_address,cm.company_desc,cm.company_status,cm.id_company');
        $this->db->from('users us');
        $this->db->join('company cm','us.company_id = cm.id_company');
        $this->db->join('user_roles ur','us.role_id = ur.id_role');
        $this->db->where('_id',$_ID);
        $DataUserID = $this->db->get()->row_array();
        if($DataUserID){
            return $DataUserID;
        }else{
            $this->ltp->ltp_redirect_Account($this->session->userdata('role_id'));
        }
    }
    function _jobvacancyDataQueryCompany(){
        $DataAcoount = $this->QueryModel->_AccountCOMPANY($this->session->userdata('_id'));
        $this->db->select('jv._id, jv.title, jv.company_id, jv.title, jv.poster, jv.date_create, jv.note, cy.company_name, cy.company_sampul, cy.company_address, cy.company_status,jv.job_vacancy_status');
        $this->db->order_by('date_create','DESC');
        $this->db->from('job_vacancy jv');
        $this->db->join('company cy','jv.company_id = cy.id_company');
        $this->db->where('cy.company_status','Aktif');
        $this->db->where('jv.company_id',$DataAcoount['company_id']);
        return $this->db->get()->result_array();
    }
    function _CompanyJobvacancyDataQueryOne($_ID_JOBVACANCY){
        $DataAcoount = $this->QueryModel->_AccountCOMPANY($this->session->userdata('_id'));
        $this->db->select('jv._id, jv.title, jv.company_id, jv.title, jv.poster, jv.date_create, jv.note, cy.company_name, cy.company_sampul, cy.company_address, cy.company_status, jv.job_vacancy_status');
        $this->db->from('job_vacancy jv');
        $this->db->join('company cy','jv.company_id = cy.id_company');
        $this->db->where('cy.company_status','Aktif');
        $this->db->where('jv.company_id',$DataAcoount['company_id']);
        $this->db->where('jv._id',$_ID_JOBVACANCY);
        return $this->db->get()->row_array();
    }
    function _CompanyJobapplicationDataQuery($_ID_JOBVACANCY){
        $this->db->select('jp._id,jp.date_send,jp.status_job_application,jp.note_job_application,jp.cv_id,jp.user_id,us.email,jp.job_vacancy_id');
        $this->db->order_by('jp.date_send','DESC');
        $this->db->from('job_application jp');
        $this->db->join('users us', 'jp.user_id = us._id');
        $this->db->where('jp.job_vacancy_id',$_ID_JOBVACANCY);
        return $this->db->get()->result_array();
    }
    function _JobSeekresQueryDataOneCompany($ACCOUNT_ID){
        $this->db->select('pd.user_id, us.name,us.phone, ms.major, us.photo, pd.tinggi, pd.golongan_darah, pd.berat, pd.negara, pd.sim, pd.fisik, pd.catatan, us.email, us.tempat_tanggal_lahir, us.jenis_kelamin, us.status_pernikahan, us.alamat, ms.code');
        $this->db->from('prersonal_data pd');
        $this->db->join('users us', 'pd.user_id = us._id');
        $this->db->join('majors ms', 'us.major_id = ms.id_major');
        $this->db->where('us.role_id', 3);
        $this->db->where('us.status', 'Aktif');
        $this->db->where('us._id',$ACCOUNT_ID);
        return $this->db->get()->row_array();
    }
    function _abilityUserDATACompany($ACCOUNT_ID){
        return $this->db->get_where('user_ability',['user_id' => $ACCOUNT_ID])->result_array();
    }
    function _experienceUserDATACompany($ACCOUNT_ID){
        return $this->db->get_where('experience',['user_id' => $ACCOUNT_ID])->result_array();
    }
    function _certificateUserDATACompany($ACCOUNT_ID){
        $this->db->where('user_id',$ACCOUNT_ID);
        return $this->db->get('certificate')->result_array();
    }
    function _certificateDATACOMPANY_ONE($_ID_certificate){
        $this->db->select('cr.id_certificate, cr.value_certificate, cr.certificate_file, cr.user_id, us.name');
        $this->db->from('certificate cr');
        $this->db->join('users us','cr.user_id = us._id');
        $this->db->where('cr.id_certificate',$_ID_certificate);
        return $this->db->get()->row_array();
    }
    function _QueryCOMPANY_job_application_moveVIEW($job_Appl){
        $DataAcoount = $this->QueryModel->_AccountCOMPANY($this->session->userdata('_id'));
        $this->db->select('jp._id,jp.status_job_application,jp.note_job_application,jp.cv_id');
        $this->db->from('job_application jp');
        $this->db->join('job_vacancy jv','jp.job_vacancy_id = jv._id');
        $this->db->where('jv.company_id', $DataAcoount['company_id']);
        $this->db->where('jp._id',$job_Appl);
        return $this->db->get()->row_array();
    }
    function _CompanyGetCVDataUSER($_ID_application){
        return $this->db->get_where('cv' ,['_id' => $_ID_application])->row_array();
    }
    function _GalleryDataOne($_ID){
        return $this->db->get_where('gallery_company' ,['_id' => $_ID])->row_array();
    }
    function _CompanyGetCERTIFICATEDataUSER($ID_Certivicate){
        return $this->db->get_where('certificate' ,['id_certificate' => $ID_Certivicate])->row_array();
    }


    /*{Funtion Query Chart Mon} */
    /*{Funtion Query CNP} */

    function _QueryDistinctIPACTIVITY(){
        $this->db->select('tahun');
        $this->db->order_by('tahun','ASC');
        $this->db->distinct();
       return $this->db->get('ip_access')->result_array();
    }
    // function _QueryDistinctUsers(){
    //     $this->db->select('tahun');
    //     $this->db->order_by('total_access','ASC');
    //     $this->db->distinct();
    //    return $this->db->get('users_activity')->result_array();
    // }
    function _SumIPActivity_Jan($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Jan');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Feb($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Feb');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Mar($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Mar');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Apr($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Apr');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_May($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','May');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Jun($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Jun');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Jul($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Jul');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Aug($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Aug');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Sep($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Sep');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Oct($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Oct');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Nov($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Nov');
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity_Dec($year){
        $this->db->where('tahun',$year);
        $this->db->where('bulan','Dec');
        return $this->db->count_all_results('ip_access');
    }
    
    function _SumIPActivity_Year($year){
        $this->db->where('tahun',$year);
        return $this->db->count_all_results('ip_access');
    }
    function _SumIPActivity(){
        return $this->db->count_all_results('ip_access');
    }
    function _SumUSERSActivity(){
        return $this->db->count_all_results('users_activity');
    }
    function _SumNewUSER(){
        $this->db->where('status','New');
        return $this->db->count_all_results('users');
    }
    function _SumViewUSER(){
        $this->db->where('status','View');
        return $this->db->count_all_results('users');
    }
    function _NewUserREQUEST(){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->limit(5);
        $this->db->where('us.status','New');
        return $this->db->get()->result_array();
    }
    function _DetailNewUserREQUEST($_ID_USER){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->where('_id',$_ID_USER);
        $data =$this->db->get()->row_array();
        if($data){
            return $data;
        }else{
            redirect('app/control/users/'.$this->session->userdata('_id'));
        }
        
    }
    function _ViewUserREQUEST(){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->limit(5);
        $this->db->where('us.status','View');
        return $this->db->get()->result_array();
    }
    function _AktifUser(){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->where('us.status','Aktif');
        $this->db->where('us.role_id',3);
        $this->db->order_by('nim','DESC');
        return $this->db->get()->result_array();
    }
    function _PrimaryCV(){
        $this->db->select('cv._id,ms.major,us.name,us.email,us.jenis_kelamin,ms.code');
        $this->db->from('cv cv');
        $this->db->join('users us','cv.user_id = us._id');
        $this->db->join('majors ms','us.major_id = ms.id_major');
        $this->db->where('cv.cv_key','TRUE');
        $this->db->where('us.status','Aktif');
        $this->db->where('us.role_id',3);
        return $this->db->get()->result_array();
    }
    function _DataUSERALL(){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->where('us.status','Aktif');
        $this->db->where('us.role_id',3);
        $this->db->order_by('nim','DESC');
        return $this->db->get()->result_array();
    }
    function _DataUSERALLNEW(){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->where('us.status','New');
        $this->db->where('us.role_id',3);
        $this->db->order_by('nim','DESC');
        return $this->db->get()->result_array();
    }
    function _DataUSERALLVIEW(){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->where('us.status','View');
        $this->db->where('us.role_id',3);
        $this->db->order_by('nim','DESC');
        return $this->db->get()->result_array();
    }
    function _DataUSERDETAIL($ID_USER){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->where('us.role_id',3);
        $this->db->where('_id',$ID_USER);
        $data =$this->db->get()->row_array();
        if($data){
            return $data;
        }else{
            redirect('app/control/users/'.$this->session->userdata('_id'));
        }
    }
    function _PersonalDataUSER($ID_USER){
        return $this->db->get_where('prersonal_data',['user_id'=>$ID_USER])->row_array();
    }
    function _PersonalDataUSERTOTAL($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->count_all('prersonal_data');
    }
    function _TotalCommanditaireVennootschapDataQueryUSER($ID_USER){
        $this->db->where('status_cv !=','Hide');
        $this->db->where('user_id',$ID_USER);
        return $this->db->count_all('cv');
    }
    function _CommanditaireVennootschapDataQueryUSER($ID_USER){
        $this->db->where('status_cv !=','Hide');
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('cv')->result_array();
    }
    function _TotalExperienceDataQueryUSER($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->count_all('experience');
    }
    function _ExperienceDataQueryUSER($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('experience')->result_array();
    }
    function _Total_abilityUserDATAUSER($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->count_all_results('user_ability');
    }
    function _abilityUserDATAUSER($ID_USER){
        return $this->db->get_where('user_ability',['user_id' =>$ID_USER])->result_array();
    }
    function _Total_certificateUserDATAUSER($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->count_all_results('certificate');
    }
    function _certificateUserDATAUSER($ID_USER){
        return $this->db->get_where('certificate',['user_id' => $ID_USER])->result_array();
    }
    function _AktifUserCOMPANY(){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('company com', 'us.company_id = com.id_company');
        $this->db->where('us.role_id',2);
        $this->db->order_by('nim','DESC');
        return $this->db->get()->result_array();
    }
    function _DataUSERALLCOM(){
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('company com', 'us.company_id = com.id_company');
        
        $this->db->where('us.role_id',2);
        $this->db->order_by('nim','DESC');
        return $this->db->get()->result_array();
    }
    function _Color(){
        $this->db->order_by('status','Aktif');
        $this->db->where('user_id',$this->session->userdata('_id'));
        return $this->db->get('color_header')->result_array();
    }
    function _ColorAktif(){
        $this->db->where('color',$this->session->userdata('session_color'));
        $this->db->where('user_id',$this->session->userdata('_id'));
        return $this->db->get('color_header')->row_array();
    }
    function _ColorCall($ID_COLOR){
        $this->db->where('user_id',$this->session->userdata('_id'));
        $this->db->where('id_color',$ID_COLOR);
        return $this->db->get('color_header')->row_array();
    }
    function _DetailUSERID($_ID_USER){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('_id',$_ID_USER);
        return $this->db->get()->row_array();
    }
    function _WHEREUSERABILITY($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('user_ability')->result_array();
    }
    function _WHEREUSERACTIFITY($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('users_activity')->result_array();
    }
    function _WHEREUSERPERSONAL($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('prersonal_data')->result_array();
    }
    function _WHEREUSERJOBAPPLICATION($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('job_application')->result_array();
    }
    function _WHEREUSEREXPERIENCE($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('experience')->result_array();
    }
    function _WHEREUSERAUTHACCESSTOKEN($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('auth_user_tokens')->row_array();
    }
    function _WHEREUSERSERTIVICATE($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('certificate')->result_array();
    }
    function _WHEREUSERCV($ID_USER){
        $this->db->where('user_id',$ID_USER);
        return $this->db->get('cv')->result_array();
    }
    function _WHEREUSERJOBVACANCY($ID_COMPANY){
        $this->db->where('company_id',$ID_COMPANY);
        return $this->db->get('job_vacancy')->result_array();
    }
    function _WHEREUSERCOMPANY($ID_COMPANY){
        $this->db->where('company_id',$ID_COMPANY);
        return $this->db->get('gallery_company')->result_array();
    }
    function _WHEREUSERCOMPANYDATA($ID_COMPANY){
        $this->db->where('id_company',$ID_COMPANY);
        return $this->db->get('company')->row_array();
    }
    function _WHERECOMPANYDATA($ID_COMPANY){
        $this->db->where('company_id',$ID_COMPANY);
        return $this->db->get('users')->result_array();
    }
    function _WHERECOMPANYDATAJob($ID_COMPANY){
        $this->db->where('company_id',$ID_COMPANY);
        return $this->db->get('job_vacancy')->result_array();
    }
    function _WHERECOMPANYDATAJobTOTAL($ID_COMPANY){
        $this->db->where('company_id',$ID_COMPANY);
        return $this->db->count_all_results('job_vacancy');
    }
    function _JObVacancyCompanyOne($_ID_JOB_VACANCY){
        $this->db->where('_id',$_ID_JOB_VACANCY);
        return $this->db->get('job_vacancy')->row_array();
    }
    function _JObApplicationCompanyOne($_ID_JOB_VACANCY){
        $this->db->select('jp._id,jp.date_send,us.nim,jp.status_job_application,jp.note_job_application,mr.major,us.phone,jp.cv_id,jp.user_id,us.email,us.name,jp.job_vacancy_id,c.cv,mr.code');
        $this->db->order_by('jp.date_send','DESC');
        $this->db->from('job_application jp');
        $this->db->join('users us', 'jp.user_id = us._id');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->join('cv c', 'jp.cv_id = c._id');
        $this->db->where('jp.job_vacancy_id',$_ID_JOB_VACANCY);
        return $this->db->get()->result_array();
        //count_all_results
    }
    function _JObApplicationCompanyOneSUM($_ID_JOB_VACANCY){
        $this->db->select('jp._id,jp.date_send,us.nim,jp.status_job_application,jp.note_job_application,mr.major,us.phone,jp.cv_id,jp.user_id,us.email,us.name,jp.job_vacancy_id,c.cv');
        $this->db->order_by('jp.date_send','DESC');
        $this->db->from('job_application jp');
        $this->db->join('users us', 'jp.user_id = us._id');
        $this->db->join('majors mr', 'us.major_id = mr.id_major');
        $this->db->join('cv c', 'jp.cv_id = c._id');
        $this->db->where('jp.job_vacancy_id',$_ID_JOB_VACANCY);
        return $this->db->count_all_results();
        //count_all_results
    }
    function _CompanySumNeWlOKER(){
        $this->db->where('notive','TRUE');
        return $this->db->count_all_results('job_vacancy');
        //count_all_results
    }
    function _CompanyOSUM(){
        return $this->db->count_all_results('company');
        //count_all_results
    }
    function _JobVacansySUM(){
        return $this->db->count_all_results('job_vacancy');
        //count_all_results
    }
    function _JobAppSUM(){
        return $this->db->count_all_results('job_application');
        //count_all_results
    }
    function _AktivitySUM(){
        return $this->db->count_all_results('activity');
        //count_all_results
    }
    function _UserstudentSUM(){
        $this->db->from('users us');
        $this->db->join('majors my','us.major_id = my.id_major');
        return $this->db->count_all_results('');
        //count_all_results
    }
    function _UserCompanySUM(){
        $this->db->from('users us');
        $this->db->join('company cy','us.company_id = cy.id_company');
        return $this->db->count_all_results('');
        //count_all_results
    }
    function UsersAktifityQueryLimit(){
        $this->db->order_by('us.nim','DESC');
        $this->db->select('ua.ip_access, us.nim,ua.time_login,ua.device_name,ua.total_access');
        $this->db->from('users us');
        $this->db->join('users_activity ua','us._id = ua.user_id');
        return $this->db->get()->result_array();
    }
    function UsersAktifityQuery(){
        $this->db->order_by('us.nim','DESC');
        $this->db->select('ua.ip_access, us.nim,ua.time_login,ua.device_name,ua.total_access');
        $this->db->from('users us');
        $this->db->join('users_activity ua','us._id = ua.user_id');
        return $this->db->get()->result_array();
    }
    function _QueryJobAppWhereDIVACANCY($ID_JOB){
        $this->db->order_by('date_send','DESC');
        $this->db->select('jp._id,us.name,us.email,jp.date_send');
        $this->db->from('job_application jp');
        $this->db->join('users us','jp.user_id = us._id');
        $this->db->where('job_vacancy_id',$ID_JOB);
        return $this->db->get()->result_array();
    }
    function _QueryJobAppAll(){
        $this->db->order_by('date_send','DESC');
        $this->db->select('jp._id,us.name,us.email,jp.date_send,jv.delivery_destination,cm.company_name');
        $this->db->from('job_application jp');
        $this->db->join('job_vacancy jv','jv._id=jp.job_vacancy_id');
        $this->db->join('users us','jp.user_id = us._id');
        $this->db->join('company cm', 'jv.company_id = cm.id_company');
        return $this->db->get()->result_array();
    }
    function _QueryJobApp($ID_JOBAPP){
        $this->db->select('jp._id,jp.user_id,us.name,us.email,jp.date_send,c.cv,us.nim,cm.company_name');
        $this->db->from('job_application jp');
        $this->db->join('cv c','jp.cv_id=c._id');
        $this->db->join('users us','jp.user_id = us._id');
        $this->db->join('job_vacancy jv','jp.job_vacancy_id=jv._id');
        $this->db->join('company cm', 'jv.company_id = cm.id_company');
        $this->db->where('jp._id',$ID_JOBAPP);
        return $this->db->get()->row_array();
    }
    function Lang(){
        return $this->db->get('language')->result_array();
    }
    function LangOneNOTDEFAULT($ID_LANG){
        $this->db->where('id_language !=','en');
        $this->db->where('id_language !=','in');
        $this->db->where('id_language',$ID_LANG);
        return $this->db->get('language')->row_array();
    }
    function _UserACCESSIP($IP){
        $this->db->order_by('ip.id','DESC');
        $this->db->select('ip.ip,ua.device_name,ip.tanggal,ip.bulan,ip.tahun,ip.start_access,ip.end_access,ua.time_login');
        $this->db->from('ip_access ip');
        $this->db->join('users_activity ua','ip.ip = ua.ip_access');
        $this->db->where('ip.ip',$IP);
        return $this->db->get()->result_array();
    }
}