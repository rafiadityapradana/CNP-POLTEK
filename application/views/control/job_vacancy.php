
    <div class="header pb-6" style="background-color:<?=$this->session->userdata('session_color')?>">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      
     

      <div class="row">
        <div class="col-xl-12">
          <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('job')?></h3>
                </div>
                <div class="col text-right">
                  <a href="<?=base_url('app/control/job-vacancy/new/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary"><?=$this->lang->line('create')?></a>
                </div>
              </div>
            </div>
            <div class="text-center">
            <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                    <th scope="col"><?=$this->lang->line('title')?></th>
                    <th scope="col"><?=$this->lang->line('name')?></th>
                    <th scope="col"><?=$this->lang->line('email')?></th>
                    <th scope="col"><?=$this->lang->line('phone')?></th>
                   
                    <th scope="col"><?=$this->lang->line('date_create')?></th>
                    <th scope="col"><?=$this->lang->line('delivery')?></th>
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($job_vacancy as $job):?>
                  <tr>
                    <th scope="row">
                      <?=$job['title']?>
                    </th>
                    <th scope="row">
                      <?=$job['company_name']?>
                    </th>
                    <td>
                    <?=$job['company_mail']?>
                    </td>
                    <td>
                    <?=$job['company_phone']?>
                    </td>
                       
                    <td> 
                      <?=$job['date_create']?>
                    </td>
                    <td> 
                      <?=$job['delivery_destination']?>
                    </td>
                    <td>
                    <a data-toggle="modal" href="#modal-quest<?=$job['_id']?>"> <i class="ni ni-send text-info"></i> </a>
                    
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>




      <!-- Footer  Job Request Internship Request-->
     
<?php foreach($job_vacancy as $job):?>
<div class="modal fade" id="modal-quest<?=$job['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">	
                <div class="row text-center">
                  <div class="col-md-6">
                  <a data-toggle="modal" href="#modal-notification<?=$job['_id']?>" class="btn btn-sm btn-outline-primary btn-block">Delete</a>
                  </div>
                 
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/job-vacancy/data/').$job['_id']?>" class="btn btn-sm btn-outline-primary btn-block">Detail</a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($job_vacancy as $job):?>
<div class="modal fade" id="modal-notification<?=$job['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You sure delete this!</h4>
                    <p>If you delete this data, then you will delete all data related to that company</p>
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/job-vacancy/data/delete/').$job['_id']?>" class="btn btn-white">Ok, Got it</a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>


<div class="modal fade" id="modal_loading" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-body px-lg-5 py-lg-5">
                  <div class="progress">
                      <div class="progress-bar bg-primary" id="loading_reset_pass" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                  </div>
              </div>
    
            </div>
            
        </div>
    </div>
</div>


<div class="modal fade" id="_info" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 id="info_res_status" class="heading mt-4"></h4>
                    <p id="info_res_msg"></p>
                </div>        
            </div>
            <div class="modal-footer">
                <button type="button" id="close_info" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>
