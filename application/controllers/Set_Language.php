<?php  
defined('BASEPATH') OR exit('no direct script access allowed');

class Set_Language extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }
    function switch($language = "id") {  
        $lang = $this->db->get_where('language',['id_language' => $language])->row_array();
        $this->session->set_userdata('language', $lang['file']);  
        return $lang['id_language'];
    }
    
}