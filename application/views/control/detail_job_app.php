
    <div class="header pb-6" style="background-color:<?=$this->session->userdata('session_color')?>">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            
          </div>
          <!-- Card stats -->
          <div class="row">
          
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
   
      <div class="row">
        <div class="col-xl-4 order-xl-2">           
            <div class="card">
                <div class="card-body">             
                <div class="row">
                    <iframe width="100%" height="550" src="<?=base_url('assets/public/images/cv/').$jop_app['cv']?>"></iframe>
                </div>          
                </div>
            </div>  
        </div>
        <div class="col-xl-8 order-xl-1">
          


          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"><?=$this->lang->line('job_app')?></h3>
                  <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="col text-right">
                <a class="btn btn-primary btn-sm" href="<?=base_url('app/control/job-application/').$this->session->userdata('_id')?>"><?=$this->lang->line('back')?> !</a>
                </div>
              </div>
            </div>
            <div class="card-body">
          
                
               
            <form class="mt-3">
                        <div class="row">
                                              <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="label"><?=$this->lang->line('majors')?></label>
                              <h5><?=$seekres['major']?></h5>
                                                          
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="label"><?=$this->lang->line('name')?></label>
                              <h5><?=$seekres['name']?></h5>
                                                          
                            </div>
                          </div>
                          
                          <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="label"><?=$this->lang->line('email')?></label>
                              <h5><?=$seekres['email']?></h5>
                                                          
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="label"><?=$this->lang->line('phone')?></label>
                              <h5><?=$seekres['phone']?></h5>
                                                          
                            </div>
                          </div>
                          <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="label"><?=$this->lang->line('majors')?></label>
                              <h5><?=$this->lang->line($seekres['code'])?></h5>
                                                          
                            </div>
                          </div>
                          
                          
                          <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="label"><?=$this->lang->line('marital')?></label>
                              <h5><?=$this->lang->line($seekres['status_pernikahan'])?></h5>
                        
                            </div>
                          </div>
                          
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="label" ><?=$this->lang->line('address')?></label>
                              <h5><?=$seekres['alamat']?></h5>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="label" ><?=$this->lang->line('ability')?></label>
                              <ul class="list-accomodation">
                                  <?php foreach($ability_user_data as $ability):?>
                                    <li><h5><?=$ability['value_ability']?></h5></li>
                                    <?php endforeach;?>
                               </ul>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="label" ><?=$this->lang->line('experience')?></label>
                              <ul class="list-accomodation">
                               <?php foreach($experience_user_data as $experience):?>
                                                              <li><h5><?=$experience['value']?></h5></li>
                                     <?php endforeach;?>
                                                          </ul>
                            </div>
                          </div>
                            <div class="col-md-12">
                            <div class="form-group">
                              <label class="label" ><?=$this->lang->line('certificate')?></label>
                              <ul class="list-accomodation">
                                <?php foreach($certificate_user_data as $certificate):?>
                                                             <li><h5><?=$certificate['value_certificate']?></h5></li>
                      <?php endforeach;?>
                                                          </ul>
                            </div>
                          </div>
                                                  
                          
                        </div>
                      </form>
             
            </div>
          </div>

        </div>
      </div>

    
    


      <div class="row">
        <div class="col-xl-12">
          <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('job_app')?></h3>
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
                    <th scope="col"><?=$this->lang->line('company')?></th>
                    <th scope="col"><?=$this->lang->line('naem')?></th>
                    <th scope="col"><?=$this->lang->Line('email')?></th>
                    <th scope="col"><?=$this->lang->line('date_send')?></th>
                    <th scope="col"><?=$this->lang->line('delivery')?></th>
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($job_aplication as $JOP_app):?>
                  <tr>
                    <th scope="row">
                      <?=$JOP_app['company_name']?>
                    </th>
                    <td>
                    <?=$JOP_app['name']?>
                    </td>
                    <td>
                    <?=$JOP_app['email']?>
                    </td>
                    <td>
                    <?=$JOP_app['date_send']?>
                    </td>
                       
                    <td> 
                    <?=$this->lang->line($JOP_app['delivery_destination'])?>
                    </td>
                   
                    <td>
                    <a data-toggle="modal" href="#modal-quest<?=$JOP_app['_id']?>"> <i class="ni ni-send text-info"></i> </a>
                    
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
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
                <button type="button" id="close_info" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>



<?php foreach($job_aplication as $job):?>
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
                  <a data-toggle="modal" href="#modal-notification<?=$job['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('delete')?></a>
                  </div>
                 
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/job-vacancy/job-app/data/').$job['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?></a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($job_aplication as $app):?>
<div class="modal fade" id="modal-notification<?=$app['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4"><?=$this->lang->line('delete_ques')?>!</h4>
                    <p><?=$this->lang->line('if_jop_app')?></p>
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/job-vacancy/job-app/delete/').$app['_id']?>" class="btn btn-white"><?=$this->lang->line('oke')?></a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>