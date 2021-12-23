<?php
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class CNP_Api extends REST_Controller
{
    public function __Construct(){
        parent::__Construct();
        $this->AuthModel->_CheckCnpAccess();
        $this->AuthModel->_CheckNotLogin(); 
        $this->AuthModel->Verification_Token_cookies();
    }
    public function chart_get($tahun){
        $this->response([
            'status' => TRUE,
            'total'=> $this->QueryModel->_SumIPActivity_Year($tahun),
            'Year' => $this->QueryModel->_QueryDistinctIPACTIVITY(),
            'results' =>[
                'month'=> ['Jan','Feb','Mar','Apr','May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                'datasets'=>[
                    'data'=>[
                        $this->QueryModel->_SumIPActivity_Jan($tahun),
                        $this->QueryModel->_SumIPActivity_Feb($tahun),
                        $this->QueryModel->_SumIPActivity_Mar($tahun),
                        $this->QueryModel->_SumIPActivity_Apr($tahun),
                        $this->QueryModel->_SumIPActivity_May($tahun),
                        $this->QueryModel->_SumIPActivity_Jun($tahun),
                        $this->QueryModel->_SumIPActivity_Jul($tahun),
                        $this->QueryModel->_SumIPActivity_Aug($tahun),
                        $this->QueryModel->_SumIPActivity_Sep($tahun),
                        $this->QueryModel->_SumIPActivity_Oct($tahun),
                        $this->QueryModel->_SumIPActivity_Nov($tahun),
                        $this->QueryModel->_SumIPActivity_Dec($tahun),
                        ]
                ]            
            ] ,
        ], REST_Controller::HTTP_OK);
    }
    public function color_post($_ID){
        $this->form_validation->set_rules('color','Color', 'trim|required');
        if ($this->form_validation->run() == false){
            $this->response([
                'status' => FALSE,
                'results' => [
                    'status' => 'false',
                    'msg' =>$this->lang->line('did_not')
                ],
            ], REST_Controller::HTTP_OK);
        }else{
            $data = [
                'user_id'=> $this->session->userdata('_id'),
                'color'=> htmlspecialchars($this->input->post('color')),
                'status' =>'Not Aktif'
            ];
            if($this->AcctionsModel->_ColorCreate($data)){
                $this->response([
                    'status' => TRUE,
                    'results' => [
                        'status' => 'true',
                        'msg' =>$this->lang->line('color_success_create')
                    ],
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response([
                    'status' => FALSE,
                    'results' => [
                        'status' => 'false',
                        'msg' =>$this->lang->line('color_failed_create')
                    ],
                ], REST_Controller::HTTP_OK);
            }
        }
       
    }
    public function cv_post($KEY){
        $JOBVACANCY = $this->QueryModel->_jobvacancyDataQueryOne($KEY);
        if($JOBVACANCY){
            if($this->input->post('check') != null){
                $msg = $this->input->post('check');
                for($i = 0; $i < count($msg); ++$i){
                   $data[] = $this->db->get_where('cv',['_id'=>$msg[$i]])->row_array();
                 
                    $insert = [
                        '_id'=>$this->ltp->ltp_id(),
                        'user_id'=>$data[$i]['user_id'],
                        'cv_id'=>$msg[$i],
                        'job_vacancy_id'=>$KEY,
                        'date_send'=>date('d-m-Y H:i:s'),
                        'status_job_application'=>'New',
                    ];
                    $this->db->insert('job_application',$insert);
                }
                $msg ='Success Send CV';
                $status = TRUE;
            } else{
                $msg = $this->input->post('check');
                $status = FALSE;
            }
            return $this->response([
                'status' => $status,
                'results' => [
                    'msg' =>$msg
                ],
            ], REST_Controller::HTTP_OK);
        }else{
            return $this->response([
                'status' => FALSE], REST_Controller::HTTP_NOT_FOUND);
        }
        
       
        
    }

    
}