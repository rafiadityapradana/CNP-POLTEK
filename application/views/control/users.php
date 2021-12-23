
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
      
        <div class="col-xl-6">
        <?php if($new_users):?>
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('user_new_req')?></h3>
                </div>
                <!-- <div class="col text-right">
                  <a href="<?=base_url('app/control/users/new-request/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary"><?=$this->lang->line('view_all')?></a>
                </div> -->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                    <th scope="col">Nim</th>
                    <th scope="col"><?=$this->lang->line('name')?></th>
                    <th scope="col"><?=$this->lang->line('majors')?></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($user_request as $request):?>
                
                  <tr>
                    <th scope="row">
                      <?=$request['nim']?>
                    </th>
                    <td>
                    <?=$request['name']?>
                    </td>
                    <td>
                    <?=$this->lang->line($request['code'])?>
                    </td>
                    <td>
                    <a href="<?=base_url('app/control/users/new-request/detail/').$request['_id']?>" > <i class="ni ni-send text-info"></i> </a>
                    </td>
                  </tr>
                  
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
          <?php endif;?>
        </div>
        
        
       
        <div class="col-xl-6">
         <?php if($view_users):?>
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"> <?=$this->lang->line('user_req')?></h3>
                </div>
                <!-- <div class="col text-right">
                  <a href="<?=base_url('app/control/users/view-request/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary"><?=$this->lang->line('view_all')?></a>
                </div> -->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                    <th scope="col">Nim</th>
                    <th scope="col">><?=$this->lang->line('name')?></th>
                    <th scope="col"><?=$this->lang->line('majors')?></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($user_view as $view):?>    
                  <tr>
                    <th scope="row">
                      <?=$view['nim']?>
                    </th>
                    <td>
                    <?=$view['name']?>
                    </td>
                    <td>
                    <?=$this->lang->line($view['code'])?>
                    </td>
                    <td>
                    <a href="<?=base_url('app/control/users/view-request/detail/').$view['_id']?>" > <i class="ni ni-send text-info"></i> </a>
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
          <?php endif;?>
        </div>
        
      </div>


      <div class="row">
        <div class="col-xl-12">
          <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('user_studen')?></h3>
                </div>
                <!-- <div class="col text-right">
                  <a href="<?=base_url('app/control/users/data/college-students/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary"><?=$this->lang->line('view_all')?></a>
                </div> -->
              </div>
            </div>
            <div class="text-center">
   
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                    <th scope="col">Nim</th>
                    <th scope="col"><?=$this->lang->line('name')?></th>
                    <th scope="col"><?=$this->lang->line('majors')?></th>
                    <th scope="col"><?=$this->lang->line('email')?></th>
                    <th scope="col"><?=$this->lang->line('phone')?></th>
                    <th scope="col"><?=$this->lang->line('gender')?></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($user_aktif as $user):?>
                  <tr>
                    <th scope="row">
                      <?=$user['nim']?>
                    </th>
                    <td>
                    <?=$user['name']?>
                    </td>
                    <td>
                    
                    <?=$this->lang->line($user['code'])?>
                    </td>
                    <td>
                    <?=$user['email']?>
                    </td>
                    <td>
                    <?=$user['phone']?>
                    </td>
                    <td>
                    <?=$this->lang->line($user['jenis_kelamin'])?>
                    </td>
                    <td>
                    <a data-toggle="modal" href="#modal-quest<?=$user['_id']?>"> <i class="ni ni-send text-info"></i> </a>
                    <!-- <a href="<?=base_url('app/control/users/data/').$user['_id']?>" > <i class="ni ni-send text-info"></i> </a> -->
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
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
                  <h3 class="mb-0"><?=$this->lang->line('user_com')?></h3>
                </div>
                
                <div class="col text-right">
                  <a href="<?=base_url('app/control/users/new-company/account/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary"><?=$this->lang->line('create')?> <?=$this->lang->line('user_com')?></a>
                  <!-- <a href="<?=base_url('app/control/users/data/company/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary"><?=$this->lang->line('view_all')?></a> -->
                </div>
              </div>
            </div>
            <div class="text-center">

            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                    
                    <th scope="col"><?=$this->lang->line('name')?></th>
                    <th scope="col"><?=$this->lang->line('company')?></th>
                    <th scope="col"><?=$this->lang->line('email')?></th>
                    <th scope="col"><?=$this->lang->line('phone')?></th>
                    <th scope="col"><?=$this->lang->line('gender')?></th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($user_aktif_com as $user):?>
                  <tr>
                    
                    <th scope="row">
                    <?=$user['name']?>
                    </th>
                    <td>
                    <?=$user['company_name']?>
                    </td>
                    <td>
                    <?=$user['email']?>
                    </td>
                    <td>
                    <?=$user['phone']?>
                    </td>
                    <td>
                    
                    <?=$this->lang->line($user['jenis_kelamin'])?>
                    </td>
                    <td>
                    <?=$user['status']?>
                    </td>
                    <td>
                    <a data-toggle="modal" href="#modal-questcom<?=$user['_id']?>"> <i class="ni ni-send text-info"></i> </a>
                    <!-- <a href="<?=base_url('app/control/users/data/').$user['_id']?>" > <i class="ni ni-send text-info"></i> </a> -->
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

      <!-- Footer -->
     
<?php foreach($user_aktif as $user):?>
<div class="modal fade" id="modal-quest<?=$user['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                  <a data-toggle="modal" href="#modal-notification<?=$user['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('delete')?></a>
                  </div>
                 
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/users/data/college-students/detail/').$user['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?></a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($user_aktif as $user):?>
<div class="modal fade" id="modal-notification<?=$user['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4"><?=$this->lang->line('delete_ques')?>!</h4>
                    <p><?=$this->lang->line('if_account')?></p>
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/users/data/delete/').$user['_id']?>" class="btn btn-white"><?=$this->lang->line('oke')?></a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>



<?php foreach($user_aktif_com as $user):?>
<div class="modal fade" id="modal-questcom<?=$user['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                  <a data-toggle="modal" href="#modal-notificationcom<?=$user['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('delete')?></a>
                  </div>
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/users/data/company/detail/').$user['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?></a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($user_aktif_com as $user):?>
<div class="modal fade" id="modal-notificationcom<?=$user['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4"><?=$this->lang->line('delete_ques')?>!</h4>
                    <p><?=$this->lang->line('if_account')?></p>
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/users/data/delete/').$user['_id']?>" class="btn btn-white"><?=$this->lang->line('oke')?></a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>


