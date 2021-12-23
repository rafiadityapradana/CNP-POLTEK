<?php
class AuthModel extends CI_Model
{
    public function __Construct(){
        parent::__Construct();
        ini_set('date.timezone', 'Asia/Jakarta');
        if(!$this->session->userdata('language')){
            $this->switch();
        }
        $this->set_();
        $this->lang->load('app_lang');
    }
    function switch($language = "id") {  
        $lang = $this->db->get_where('language',['id_language' => $language])->row_array();
        $this->session->set_userdata('language', $lang['file']);  
        return $lang['id_language'];
    }
    public function set_(){
        $this->config->set_item('language',$this->session->userdata('language'));
    }
    function LONGACCESS($key_access,$start_access){
        $IP_APP = $this->QueryModel->_ip_access($key_access,$start_access);
        if(!$IP_APP){
            $data =[
                'ip'=> $this->ltp->ltp_IP(),
                'tanggal'=> date('d'),
                'bulan'=> date('M'),
                'tahun'=> date('Y'),
                'start_access'=> date('H:i:s'),
            ];
            $this->db->insert('ip_access',$data);
            return true;
        }else{
            $this->db->set('end_access',date('H:i:s'));
            $this->db->where('id',$IP_APP['id']);
            $this->db->update('ip_access'); 
            return true;
        }
        if($this->session->userdata('_id')){
            $this->UsersACTIFITY($this->session->userdata('_id'));
		}
    }
    
    //$this->input->cookie('Cloudways Cookie',true);
    function _Login(){
        $User = $this->db->get_where('users',['email'=> htmlspecialchars($this->input->post('email'))])->row_array();
        if($User){
            
            if (password_verify(htmlspecialchars($this->input->post('password')), $User['password'])){
                if($User['status'] == "Aktif"){
                    $this->db->where('user_id',$User['_id']);
                    $this->db->where('status','Aktif');
                    $get_Color = $this->db->get('color_header')->row_array();
                    if($get_Color){
                        $this->session->set_userdata(['session_color' =>$get_Color['color']]);
                    }else{
                        $this->session->set_userdata(['session_color' =>'#5e72e4']);
                    }
                    $session = [
                        '_id' => $User['_id'],
                        'name' => $User['name'],
                        'email'=> $User['email'],
                        'role_id'=> $User['role_id'],
                        'date_time'=> date('d M Y / H:i:s'),
                    ];
                    $this->session->set_userdata($session);
                    $this->Auth_User_Tokens($User['_id']);
                    $this->UsersACTIFITY($User['_id']);
                    $this->ltp->ltp_role_access($User['role_id']);
                }else{
                    $msg = $this->lang->line('not_aktif_info');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('worng_pass_info');
                $color = 'text-danger';
            }
        }else{
            $msg =  $this->lang->line('not_email_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        redirect('');
    }
    function _Users_REGISTER(){
        $data = [
            '_id' => $this->ltp->ltp_id(),
            'nim' => htmlspecialchars($this->input->post('nim')),
            'email' => htmlspecialchars($this->input->post('email')),
            'name' => htmlspecialchars($this->input->post('name')),
            'phone' => htmlspecialchars($this->input->post('phone')),
            'tempat_tanggal_lahir' => htmlspecialchars($this->input->post('tempat_tanggal_lahir')),
            'jenis_kelamin' =>htmlspecialchars($this->input->post('jenis_kelamin')),
            'major_id' => htmlspecialchars($this->input->post('jurusan')),
            'password' => password_hash(htmlspecialchars($this->input->post('password')), PASSWORD_DEFAULT),
            'photo' => 'de.jpeg',
            'status_pernikahan'=>'-',
            'status' =>'New',
            'role_id' =>3
        ];
        if($this->db->insert('users',$data)){
            $msg = $this->lang->line('success_regis_info');
            $color = 'text-success';
            $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
            redirect('');
        }else{
            $msg = $this->lang->line('failed_regis_info');
            $color = 'text-danger';
            $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
            redirect('register');
        }
    }
    function UsersACTIFITY($USER_ID){
        $totalACTIFITY = $this->QueryModel->_SumActifityUserNow($this->ltp->ltp_IP());
        $UsersACCTIFITY = $this->QueryModel->_QueryUsersACCTIFITY($this->ltp->ltp_IP(),$USER_ID);
        $UserDataId = $this->QueryModel->_Account($USER_ID);
        if(!$UsersACCTIFITY){
            if($UserDataId['role_id'] !=1){
                $data =[
                    'id_activity' => $this->ltp->ltp_id(),
                    'user_id' => $USER_ID,
                    'ip_access'=> $this->ltp->ltp_IP(),
                    'time_login'=> date('d M Y'),
                    'device_name'=> $_SERVER['HTTP_USER_AGENT'],
                    'total_access' => $totalACTIFITY
                ];
                $this->db->insert('users_activity',$data);
            }
        }else{
            $data =[
                'device_name'=> $_SERVER['HTTP_USER_AGENT'],
                'total_access' => $totalACTIFITY
            ];
            $this->db->where('id_activity',$UsersACCTIFITY['id_activity']);
            $this->db->where('user_id',$USER_ID);
            $this->db->where('ip_access',$this->ltp->ltp_IP());
            $this->db->update('users_activity',$data);
        }
    }
    private function Auth_User_Tokens($ID){
        $tokenData = $this->db->get_where('auth_user_tokens',['user_id' => $ID])->row_array();
        $Hash_Token = $this->ltp->ltp_token();
        $cookie = [
            'name'   => 'cnp_Token_cookies',
            'value'  => $Hash_Token,
            'expire' => '3600',
        ];
        if(!$tokenData){
            $data = [
                '_id' => $this->ltp->ltp_id(),
                'user_id'=> $ID,
                'token_access' => 'ltp '.$Hash_Token,
                'date_time' => date('d-m-Y H:i:s'),
            ];
            if($this->db->insert('auth_user_tokens',$data)){
                $this->input->set_cookie($cookie);
            }
        }else{
            $data = [
                'token_access' => 'ltp '.$Hash_Token,
                'date_time' => date('d-m-Y H:i:s'),
            ];
            $this->db->where('user_id',$ID);
            if($this->db->update('auth_user_tokens',$data)){
                $this->input->set_cookie($cookie);
            }
        }
        $sessionCookie = [
            'cnp_Token_cookies'=> $Hash_Token,
            'cnp_Token_Session'=>password_hash($Hash_Token,PASSWORD_DEFAULT)
        ];
        $this->session->set_userdata($sessionCookie);
    }
    function Verification_Token_cookies(){
        if($this->db->get_where('auth_user_tokens',['token_access'=> 'ltp '.$this->session->userdata('cnp_Token_cookies')])->row_array()){
            $this->ltp->ltp_VERIFINE_SESSION_TOKEN($this->session->userdata('cnp_Token_cookies'));
        }else{
            redirect('app/logout');
        }
    }
    function _CheckNotLogin(){
        if(!$this->db->get_where('users',['_id'=>$this->session->userdata('_id')])->row_array()){
            redirect('');
        }
    }
    function _CheckCnpAccess(){
        if($this->session->userdata('role_id') != 1){
            $this->ltp->ltp_role_access($this->session->userdata('role_id'));
        }
    }
    function _CheckPTAccess(){
        if($this->session->userdata('role_id') != 2){
            $this->ltp->ltp_role_access($this->session->userdata('role_id'));
        }
    }
    function _CheckMahasiswaAccess(){
        if($this->session->userdata('role_id') != 3){
            $this->ltp->ltp_role_access($this->session->userdata('role_id'));
        }
    }
   
    function OpenScreen(){
        $SESSIONSCREEEN = $this->QueryModel->SESSIONSCREEN($this->session->userdata('screen'));
        $User = $this->db->get_where('users',['email'=> $SESSIONSCREEEN['email']])->row_array();
        if($User){
            if (password_verify(htmlspecialchars($this->input->post('password')), $User['password'])){
                if($User['status'] == "Aktif"){
                    $this->session->unset_userdata('screen');
                    $this->session->unset_userdata('date_time');
                    $this->ltp->ltp_role_access($User['role_id']);
                }else{
                    $msg = $this->lang->line('not_aktif_info');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('worng_pass_info');
                $color = 'text-danger';
            }
        }
        redirect('look-screen');
    }
    function LookScreen(){
        $look = [
            'screen' => $this->session->userdata('_id'),
            'date_time' => date('d-m-Y H:i:s'),
        ];
        if($this->session->set_userdata($look)){
            $this->db->where('user_id',$this->session->userdata('_id'));
            if($this->db->delete('auth_user_tokens')){
                $this->session->unset_userdata('cnp_Token_Session');
                $this->session->unset_userdata('cnp_Token_cookies');
                $this->session->unset_userdata('_id');
                $this->session->unset_userdata('name');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('photo');
                $this->session->unset_userdata('role_id');
                $this->session->unset_userdata('date_time');
                $this->session->unset_userdata('session_color');
                redirect('look-screen');
            }
        }else{
            $this->ltp->ltp_role_access($this->session->userdata('role_id'));
        }
    }
    function _Logout(){
        //$this->input->cookie('cnp_Token_cookies',true);
        // echo $this->input->cookie('cnp_Token_cookies',true);
        // die;
        $this->db->where('user_id',$this->session->userdata('_id'));
        if($this->db->delete('auth_user_tokens')){
            $this->session->unset_userdata('cnp_Token_Session');
            $this->session->unset_userdata('cnp_Token_cookies');
            $this->session->unset_userdata('_id');
            $this->session->unset_userdata('name');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('photo');
            $this->session->unset_userdata('role_id');
            $this->session->unset_userdata('date_time');
            $this->session->unset_userdata('session_color');
            redirect('');
        }else{
            $this->ltp->ltp_role_access($this->session->userdata('role_id'));
        }
    }
    function _AccountUpdate($_ID){
        if($this->QueryModel->_Account($_ID)){
            $data =[
                'email' => htmlspecialchars($this->input->post('email')),
                'name' => htmlspecialchars($this->input->post('name')),
                'phone' => htmlspecialchars($this->input->post('phone')),
                'tempat_tanggal_lahir'=>htmlspecialchars($this->input->post('tempat_tanggal_lahir')),
                'jenis_kelamin'=>htmlspecialchars($this->input->post('jenis_kelamin')),
                'status_pernikahan'=>htmlspecialchars($this->input->post('status_pernikahan')),
                'alamat'=>htmlspecialchars($this->input->post('alamat')),
             ];
             $this->db->where('_id',$_ID);
             if($this->db->update('users',$data)){
                 $res =[
                     'status'=> "true",
                     'results'=> [
                         'msg'=>$this->lang->line('success_update_info')
                     ]
                 ];
             }else{
                 $res =[
                     'status'=> "false",
                     'results'=> [
                         'msg'=>$this->lang->line('failed_update_info')
                     ]
                 ];
             }
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('not_eacount_info')
                    ]
            ];
        }
        echo json_encode($res);
    }
    function _AccountUpdatePassword($_ID){
        if($this->db->get_where('auth_user_tokens',['token_access'=> 'ltp '.$this->session->userdata('cnp_Token_cookies')])->row_array()){
            if(password_verify($this->session->userdata('cnp_Token_cookies'),$this->session->userdata('cnp_Token_Session'))){
                $DataUserSession = $this->QueryModel->_Account($_ID);
                if($DataUserSession){
                    if (password_verify(htmlspecialchars($this->input->post('old_password')), $DataUserSession['password'])){
                        $this->db->set('password',password_hash(htmlspecialchars($this->input->post('new_password')),PASSWORD_DEFAULT));
                        $this->db->where('_id',$_ID);
                        if($this->db->update('users')){
                            $res =[
                                'status'=> "true",
                                'results'=> [
                                    'msg'=>$this->lang->line('success_update_pass_info')
                                ]
                            ];
                        }else{
                            $res =[
                                'status'=> "false",
                                'results'=> [
                                    'msg'=>$this->lang->line('failed_update_pass_info')
                                ]
                            ];
                        }
                        
                    }else{
                        $res =[
                            'status'=> "false",
                            'results'=> [
                                'msg'=>$this->lang->line('inco_pass_info')
                                ]
                        ];
                    }
                }else{
                    $res =[
                        'status'=> "false",
                        'results'=> [
                            'msg'=>$this->lang->line('not_eacount_info')
                            ]
                    ];
                }
            }else{
                $res =[
                    'status'=> "false",
                    'results'=> [
                        'msg'=>$this->lang->line('inco_token_info')
                        ]
                ];
            }
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('not_token_info')
                    ]
            ];
        }
        
        
        echo json_encode($res);
    }
    function _privateRESETPASSWORD($ID_USER){
        $DataUser = $this->QueryModel->_Account($ID_USER);
        if($DataUser){
            $this->db->set('password',password_hash(htmlspecialchars('PASSWORD_DEFAULT'),PASSWORD_DEFAULT));
            $this->db->where('_id',$ID_USER);
            if($this->db->update('users')){
                $res =[
                    'status'=> "true",
                    'results'=> [
                        'msg'=>$this->lang->line('success_reset_pass_info')
                    ]
                ];
            }else{
                $res =[
                    'status'=> "false",
                    'results'=> [
                        'msg'=>$this->lang->line('failed_reset_pass_info')
                    ]
                ];
            }
        }else{
            $res =[
                'status'=> "false",
                'results'=> [
                    'msg'=>$this->lang->line('not_user_info')
                    ]
            ];
        }
        echo json_encode($res);
    }
    function _photo($_ID){
        $DataUserSession = $this->QueryModel->_Account($_ID);
        if($DataUserSession){
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '7000';
                $config['file_name']      = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/profile/';
                $this->load->library('upload', $config);
			    $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    if($DataUserSession['photo'] != 'de.jpeg'){
                        unlink(FCPATH . '/assets/public/images/profile/' . $DataUserSession['photo']);
                    }
                    
                    $this->db->set('photo', $this->upload->data('file_name'));
                    $this->db->where('_id',$_ID);
                    if($this->db->update('users')){
                        $msg = $this->lang->line('success_update_image_account_info');
                        $color = 'text-success';
                    }else{
                        $msg = $this->lang->line('failed_update_image_account_info');
                        $color = 'text-danger';
                    }
                }else{
                    $msg = $this->lang->line('check_size_type_file_info');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('failed_update_image_account_info');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_user_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        $this->ltp->ltp_redirect_Befor_Account_UP($this->session->userdata('role_id'),$_ID);
    }

    function _photoSampul($_ID_COMPANY){
        $DataCompany = $this->QueryModel->_CompanyProfileDataQueryOneWhere($_ID_COMPANY);
        if($DataCompany){
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '7000';
                $config['file_name']      = $this->ltp->ltp_GenFILENAME();
                $config['upload_path'] = 'assets/public/images/sampul/';
                $this->load->library('upload', $config);
			    $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    
                    unlink(FCPATH . '/assets/public/images/sampul/' . $DataCompany['company_sampul']);
                    $this->db->set('company_sampul', $this->upload->data('file_name'));
                    $this->db->where('id_company',$_ID_COMPANY);
                    if($this->db->update('company')){
                        $msg = $this->lang->line('success_update_image_company_info');
                        $color = 'text-success';
                    }else{
                        $msg = $this->lang->line('failed_update_image_company_info');
                        $color = 'text-danger';
                    }
                }else{
                    $msg = $this->lang->line('check_size_type_file_info');
                    $color = 'text-danger';
                }
            }else{
                $msg = $this->lang->line('failed_update_image_company_info');
                $color = 'text-danger';
            }
        }else{
            $msg = $this->lang->line('not_user_info');
            $color = 'text-danger';
        }
        $this->session->set_flashdata('message', '<p class="'.$color.'">'.$msg.'</p>');
        $this->ltp->ltp_redirect_Befor_Account_UP($this->session->userdata('role_id'),$this->session->userdata('_id'));
    }
    function _CreateLANG(){
        if($this->ltp->CreateLang($this->input->post('lang'))){
            $data=[
                'id_language' => htmlspecialchars($this->input->post('id_lang')),
                'file' => htmlspecialchars($this->input->post('lang')),
                'language'=>htmlspecialchars($this->input->post('language')),
                'switch_voice'=>htmlspecialchars($this->input->post('switch_voice')),
            ];
            $this->db->insert('language',$data);
        }
        redirect('app/control/account/'.$this->session->userdata('_id'));
    }
    function _DeleteLANG($ID_LANG){
        $LANG = $this->QueryModel->LangOneNOTDEFAULT($ID_LANG);
        if($LANG){
            if($LANG['file'] != 'indonesia' || $LANG['file'] != 'english'){
                if($this->ltp->DestroyLang($LANG['file'])){
                    $this->db->where('id_language',$ID_LANG);
                    $this->db->delete('language');
                } 
            }
        }
        redirect('app/control/account/'.$this->session->userdata('_id'));
    }
    
}