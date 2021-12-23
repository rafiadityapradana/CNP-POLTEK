<?php

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

/**
 * Keys Controller
 * This is a basic Key Management REST controller to make and delete keys
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Welcome_api extends REST_Controller
{
    public function restLTP_get()
    {
        $this->response([
            'status' => TRUE,
            'message' => 'Welcome'
        ], REST_Controller::HTTP_OK);
    }
    public function set_get(){
        return $this->response([
            'status' => TRUE,
            'results' =>[
                'key_access'=> $this->ltp->ltp_IP(),
                'start_access'=> date('H:i:s'),
                'last_access'=> date('H:i:s'),
            ] ,
        ], REST_Controller::HTTP_OK);
    }
    public function app_get($key_access=null, $start_access = null){
            $this->AuthModel->LONGACCESS($key_access,$start_access);
            $this->response([
                    'status' => TRUE,
                    'results' =>[
                        'key_access'=> $this->ltp->ltp_IP(),
                        'start_access'=> date('H:i:s'),
                        'last_access'=> date('H:i:s'),
                ] ,
            ], REST_Controller::HTTP_OK);

    }
    public function Leng_get($lang){
        $this->response([
            'status' => TRUE,
            'results' =>[
            'Lang'=> $this->switch($lang),
        ] ,
    ], REST_Controller::HTTP_OK);
    }
    function switch($language = "id") {  
        $lang = $this->db->get_where('language',['id_language' => $language])->row_array();
        $this->session->set_userdata('language', $lang['file']);
        return $this->db->get_where('language',['file' => $this->session->userdata('language')])->row_array();
    }
}