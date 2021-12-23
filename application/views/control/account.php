
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
          <div class="card card-profile">
            <img src="<?=base_url('assets/public/')?>images/bg3.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center mb-5">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    <a href="#modal-Question" data-toggle="modal">
                    <img height="140px"  src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            
            <div class="card-body pt-0 mt-5">
              
              <div class="text-center">
                <h5 class="h3">
                <?=$myaccount['name']?>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?=$myaccount['tempat_tanggal_lahir']?>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$myaccount['email']?>
                </div>
                <div class="h5 font-weight-300">
                  <i class="ni education_hat mr-2"></i><?=$myaccount['alamat']?>
                </div>
               
              </div>
            </div>
          </div>
      
          <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('language')?></h3>
                </div>
                <div class="col text-right">
                  <button data-toggle="modal" data-target="#modal-Language" class="btn btn-sm btn-primary"><?=$this->lang->line('create')?></button>
                </div>
              </div>
            </div>
            <div class="text-center">
            <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                   
                    <th scope="col"><?=$this->lang->line('language')?></th>
                    
                    
                    <th scope="col"></th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php foreach($langue as $lang):?>
                  <tr>
                    
                    <th scope="row">
                      <?=$lang['language']?>
                    </th>
                   
                    <td>
                    
                    <a data-toggle="modal" href="#modal-quest<?=$lang['id_language']?>"> <i class="ni ni-send text-info"></i> </a>
                  
                    
                    </td>
                   
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
    
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"><?=$this->lang->line('coount_info')?> </h3>
                </div>
                <div class="col-4 text-right">
                  <button data-toggle="modal" data-target="#update-password" class="btn btn-sm btn-primary"><?=$this->lang->line('change_pass')?></button>
                </div>
              </div>
            </div>
            <div class="card-body">
            <div class="text-center">
              <?= $this->session->flashdata('message'); ?>
              </div>
              <form id="form_account_cnp" action="<?=base_url('app/control/account-data/').$this->session->userdata('_id')?>"> 
                <h6 class="heading-small text-muted mb-4"><?=$this->lang->line('coount_user')?></h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-username"><?=$this->lang->line('name')?></label>
                        <input type="text" id="input-username" name="name" class="form-control" placeholder="<?=$this->lang->line('name')?>" value="<?=$myaccount['name']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-email"><?=$this->lang->line('email_address')?></label>
                        <input type="email" id="input-email" name="email" class="form-control" placeholder="xxx@example.com" value="<?=$myaccount['email']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-phone"><?=$this->lang->line('phone_whas')?></label>
                        <input type="text" id="input-phone" name="phone" class="form-control" placeholder="<?=$this->lang->line('phone_whas')?>" value="<?=$myaccount['phone']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-tempat_tanggal_lahir"><?=$this->lang->line('date_of_birth')?></label>
                        <input type="text" id="input-tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control"  value="<?=$myaccount['tempat_tanggal_lahir']?>" placeholder="Date Of Birth">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="jenis_kelamin"><?=$this->lang->line('gender')?></label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option selected value="<?=$myaccount['jenis_kelamin']?>"><?=$this->lang->line($myaccount['jenis_kelamin'])?></option>
                            <option value="Male" ><?=$this->lang->line('Male')?></option>
							              <option value="Female"><?=$this->lang->line('Female')?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="status_pernikahan"><?=$this->lang->line('marital')?></label>
                            <select class="form-control" name="status_pernikahan" id="status_pernikahan">
                            <option selected value="<?=$myaccount['status_pernikahan']?>"><?=$this->lang->line($myaccount['status_pernikahan'])?></option>
                            <option value="Single"><?=$this->lang->line('Single')?></option>
                            <option value="Married"><?=$this->lang->line('Married')?></option>
                            <option value="Divorced"><?=$this->lang->line('Divorced')?></option>
                            
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="form-group">
                            <label class="form-control-label"><?=$this->lang->line('address')?></label>
                            <textarea rows="4" name="alamat" class="form-control" placeholder="Information Your Account Address ..."><?=$myaccount['alamat']?></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12 text-right">
                      <button type="submit" class="btn-primary btn"><?=$this->lang->line('submit')?></button>
                    </div>
                  </div>
                </div>      
              </form>
              
              <hr class="my-4" />
              <div class="table-responsive">
              <!-- Projects table -->
              <div class="text-center">
              <?= $this->session->flashdata('msg'); ?>
              </div>
              
              
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><?=$this->lang->line('color_code')?></th>
                    <th scope="col"></th>
                    <th scope="col"><button data-toggle="modal" data-target="#modal-color" class="btn btn-primary btn-sm btn-block"><?=$this->lang->line('new_color')?></button>  </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($color as $c):?>
                  <tr>
                    <th scope="row">
                     <button class="btn" style="background-color:<?=$c['color']?>"></button> <?=$c['color']?> 
                    </th>
                    <td>
                    <?php if($c['status'] == 'Aktif'):?>
                      <div class="text-center text-success"> <b> Aktif</b></div>
                    <?php else:?>
                      <a href="<?=base_url('app/control/account/set-color/').$c['id_color']?>" class="btn btn-outline-primary btn-block btn-sm"><?=$this->lang->line('use_color')?></a>
                    <?php endif;?>
                    </td>
                    <td>
                    <?php if($c['status'] != 'Aktif'):?>
                      <a href="<?=base_url('app/control/account/delete-color/').$c['id_color']?>" class="btn btn-outline-danger btn-block btn-sm"><?=$this->lang->line('delete')?></a>
                    <?php endif;?>
                      
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>


<div class="modal fade" id="notification_CNP"data-backdrop="static" data-keyboard="false"    tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-white">
        	
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center text-danger">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4" style="color:#000000" id="msg-info"></h4>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="reload_modal_account"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>

     
<div class="modal fade" id="modal-color" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-body px-lg-5 py-lg-5">
                  <div class="progress">
                      <div class="progress-bar bg-primary" id="loading_proesess" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                    
                  
                      <div class="text-center text-muted mb-4">
                          <small id="info_color"></small>
                      </div>
                      <form role="form" action="<?=base_url('api/new-color/').$this->session->userdata('_id')?>" id="form_color">
                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <input class="form-control" name="color" placeholder="#<?=$this->lang->line('color_code')?>" type="text">
                              </div>
                          </div>
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary my-4 color_ac"><?=$this->lang->line('submit')?></button>
                              <button type="button" data-dismiss="modal" class="btn btn-danger my-4 color_ac"><?=$this->lang->line('close')?></button>
                          </div>
                      </form>
                  </div>
              </div>
    
            </div>
            
        </div>
    </div>
</div>





<div class="modal fade" id="update-password" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">	
      <div class="modal-body p-0"> 	
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small id="info_pass"><?=$this->lang->line('sure_pass')?></small>
              </div>
                <div class="progress-wrapper">

                <div class="progress">
                  <div class="progress-bar bg-primary" id="loading_proesess_pass" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
                      <form role="form" method="POST" id="form_account_password" action="<?=base_url('app/control/account-password/').$this->session->userdata('_id')?>">
                          <div class="form-group">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                  </div>
                                  <input name="old_password" class="form-control" placeholder="<?=$this->lang->line('old_pass')?>" type="password">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                  </div>
                                  <input name="new_password" class="form-control" placeholder="<?=$this->lang->line('new_pass')?>" type="password">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                  </div>
                                  <input name="confirm_password" class="form-control" placeholder=<?=$this->lang->line('con_pass')?>" type="password">
                              </div>
                          </div>
                          <div class="text-center">
                              <button type="submit"  class="btn btn-primary my-4 button_password"><?=$this->lang->line('submit')?></button>
                              <button type="button" data-dismiss="modal" class="btn btn-danger my-4 button_password "><?=$this->lang->line('close')?></button>
                          </div>
              </form>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modal-Question" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
            
        <div class="card bg-secondary border-0 mb-0">

            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-2">
                    <small><?=$this->lang->line('question')?></small>
                </div>
              <div class="row">
                <div class="col-6">
                <button type="button" class="btn btn-outline-secondary my-1 ques_profile" data-type="_view_profile"><?=$this->lang->line('view')?></button>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-outline-secondary my-1 ques_profile" data-type="_edit_profile"><?=$this->lang->line('update')?></button>
                </div>
              </div>
                   
            </div>
        </div>   
      </div> 
    </div>
  </div>
</div>






<div class="modal fade" id="_view_profile" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        	

            
            <div class="modal-body">
            <img width="100%" src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>" alt="">
                
            </div>
           
        </div>
    </div>
</div>



<div class="modal fade" id="_edit_profile" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">

                  <div class="card-body px-lg-5 py-lg-5">
                    <img width="100%" id="perimage_profile" src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>" alt="">
                      <div class="text-center text-muted mb-4">
                          <small id="name_image"><?=$myaccount['photo']?></small>
                      </div>
                      <form role="form" method="POST" enctype="multipart/form-data" action="<?=base_url('app/control/account-photo/').$this->session->userdata('_id')?>">
                          <div class="form-group mb-3 text-center">
                          <label class="custom-file-upload">
                              <input type="file" id="cuse_file" name="image" />
                                <i class="ni ni-image"></i>
                          </label>
                          </div>
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary my-4"><?=$this->lang->line('submit')?></button>
                              <button type="button" class="btn btn-danger my-4" data-dismiss="modal"><?=$this->lang->line('close')?></button>
                          </div>
                      </form>
                  </div>
              </div>   
            </div>
            
        </div>
    </div>
</div>



<!-- Footer  Job Request Internship Request-->
     
<?php foreach($langue as $lang):?>
<div class="modal fade" id="modal-quest<?=$lang['id_language']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content mb-2">
           
            <div class="modal-body">	
                <div class="row text-center">
                  <div class="col-md-4">
                  <a data-toggle="modal" href="#modal-notification<?=$lang['id_language']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('delete')?></a>
                  </div>
                 <div class="col-md-4">
                 <a href="#" action_url="<?=base_url()?>" class="btn btn-outline-primary btn-block btn-sm set_lang" data_lang ="<?=$lang['id_language']?>"><?=$lang['language']?></a>
                 </div>
                  <div class="col-md-4">
                  <a href="<?=base_url('app/control/setting/lang/').$lang['file']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?></a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($langue as $lang):?>
<div class="modal fade" id="modal-notification<?=$lang['id_language']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4"><?=$this->lang->line('delete_ques')?>!</h4>
                    
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/lang/delete/').$lang['id_language']?>" class="btn btn-white"><?=$this->lang->line('oke')?></a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>



      <div class="modal fade" id="modal-Language" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
                <div class="card bg-secondary border-0 mb-0">
                    
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small><?=$this->session->userdata('_id')?>  <?=$this->lang->line('create')?> <?=$this->lang->line('language')?></small>
                        </div>
                        <form role="form" method="POST" action="<?=base_url('app/control/lang/create/').$this->session->userdata('_id')?>">
                        <div class="row">
                          <div class="col-md-4">
                          <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    
                                    <input name="id_lang" class="form-control" placeholder="ID Language" type="text">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    
                                    <input name="lang" class="form-control" placeholder="File" type="text">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    
                                    <input name="language" class="form-control" placeholder="Language" type="text">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                          <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                  <textarea rows="2" name="switch_voice" class="form-control" placeholder="Switch voice"></textarea>
                                    
                                </div>
                            </div>
                          </div>
                        </div>
                            
                           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?=$this->lang->line('submit')?></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>
