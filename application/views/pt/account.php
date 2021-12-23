    
        
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">
                  <a href="<?=base_url('app/company')?>"><i class="ni ni-bold-left text-primary"></i></a></h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form method="POST" id="form_account" action="<?=base_url('app/company/account-data/').$this->session->userdata('_id')?>">
                <h6 class="heading-small mb-4"><?=$this->lang->line('coount_info')?> </h6>
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
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-phone"><?=$this->lang->line('phone_whas')?></label>
                        <input type="text" id="input-phone" name="phone" class="form-control" placeholder="<?=$this->lang->line('phone_whas')?>" value="<?=$myaccount['phone']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-tempat_tanggal_lahir"><?=$this->lang->line('date_of_birth')?></label>
                        <input type="text" id="input-tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control"  value="<?=$myaccount['tempat_tanggal_lahir']?>" placeholder="<?=$this->lang->line('date_of_birth')?>">
                      </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="jenis_kelamin"><?=$this->lang->line('gender')?></label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option selected><?=$this->lang->line($myaccount['jenis_kelamin'])?></option>
                            <option value="Male"><?=$this->lang->line('Male')?></option>
							<option value="Female"><?=$this->lang->line('Female')?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="status_pernikahan"><?=$this->lang->line('marital')?></label>
                            <select class="form-control" name="status_pernikahan" id="status_pernikahan">
                            <option selected><?=$this->lang->line($myaccount['status_pernikahan'])?></option>
                            <option value="Single"><?=$this->lang->line('Single')?></option>
							<option value="Married"><?=$this->lang->line('Married')?></option>
							<option value="Divorced"><?=$this->lang->line('Divorced')?></option>

                            </select>
                        </div>
                    </div>
                
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"><?=$this->lang->line('address')?></label>
                            <textarea rows="4" name="alamat" class="form-control" placeholder="<?=$this->lang->line('address')?> ..."><?=$myaccount['alamat']?></textarea>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="pl-lg-4 text-right">
                <button type="button" data-toggle="modal" data-target="#update-password" class="btn btn-outline-warning"><?=$this->lang->line('update')?> <?=$this->lang->line('password')?> ?</button>
                <button type="submit" value="submit" class="btn btn-outline-primary"><?=$this->lang->line('update')?> <?=$this->lang->line('my_account_info')?> ?</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>



<div class="modal fade" id="modal-notification-account"data-backdrop="static" data-keyboard="false"    tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
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


<div class="row">
  <div class="col-xl-8 order-xl-1">
  <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"><?=$this->lang->line('company')?></h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form method="POST" id="form_account_company" action="<?=base_url('app/company/account-company-data/').$this->session->userdata('_id')?>">
                <h6 class="heading-small mb-4"><?=$this->lang->line('com_info')?></h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_name"><?=$this->lang->line('company_name')?></label>
                        <input type="text" id="input-company_name" name="company_name" class="form-control" placeholder="<?=$this->lang->line('company_name')?>" value="<?=$myaccount['company_name']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_mail"><?=$this->lang->line('email_com')?></label>
                        <input type="email" id="input-company_mail" name="company_mail" class="form-control" placeholder="xxx@example.com" value="<?=$myaccount['company_mail']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_phone"><?=$this->lang->line('com_number')?></label>
                        <input type="text" id="input-company_phone" name="company_phone" class="form-control" placeholder="<?=$this->lang->line('com_number')?>" value="<?=$myaccount['company_phone']?>">
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_site"><?=$this->lang->line('com_site')?></label>
                        <input type="text" id="input-company_site" name="company_site" class="form-control" placeholder="<?=$this->lang->line('com_site')?>" value="<?=$myaccount['company_site']?>">
                      </div>
                      
                    </div>
                  
                
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"><?=$this->lang->line('com_address')?></label>
                            <textarea rows="4" name="company_address" class="form-control" placeholder=" <?=$this->lang->line('com_address')?> ..."><?=$myaccount['company_address']?></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"><?=$this->lang->line('desc_com')?></label>
                            <textarea rows="4" id="desc" name="company_desc" class="form-control" placeholder=" <?=$this->lang->line('desc_com')?>..."><?=$myaccount['company_desc']?></textarea>
                        </div>
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="pl-lg-4 text-right">
                <button type="submit" value="submit" class="btn btn-outline-primary"><?=$this->lang->line('update')?> <?=$this->lang->line('com_info')?> ?</button>
                </div>
              </form>
            </div>
          </div>
  </div>
  <div class="col-xl-4 order-xl-2">

      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0"> <?=$this->lang->line('gallery')?> <?=$this->lang->line('company')?></h3>
            </div>   
            <div class="col-4 text-right">
                <a href="#upload_company_gallery" class="btn btn-sm btn-primary" data-toggle="modal"><?=$this->lang->line('img')?> <?=$this->lang->line('company')?></a>
            </div> 
          </div>
        </div>
        <div class="card-body">
          <div class="row">
          <?php foreach($_galerry_company as $Gallery):?>
            <div class="col-md-6 py-3">
              <img data-target="#update_company_gallery<?=$Gallery['_id']?>" data-toggle="modal" width="100%" src="<?=base_url('assets/public/')?>images/gallery/<?=$Gallery['image']?>" alt="">
            </div>
          <?php endforeach;?>
          </div>
        </div>
      </div>        
    
  </div>
</div>





<div class="modal fade" id="upload_company_gallery" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
<div class="card bg-secondary border-0 mb-0">

    <div class="card-body px-lg-5 py-lg-5">
      <img width="100%" id="perimage_profile_gallery" src="" alt="">
        <div class="text-center text-muted mb-4">
            <small id="name_image_gallery_upload"></small>
        </div>
        <form role="form" method="POST" enctype="multipart/form-data" action="<?=base_url('app/company/gallery-photo/').$this->session->userdata('_id')?>">
            <div class="form-group mb-3 text-center">
            <label class="custom-file-upload">
                 <input type="file" id="cuse_file_gallery_upload" name="image" />
                  <i class="ni ni-image"></i>
             </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4"><?=$this->lang->line('update')?> ?</button>
                <button type="button" class="btn btn-danger my-4" data-dismiss="modal"><?=$this->lang->line('close')?> ?</button>
            </div>
        </form>
    </div>
</div>
            
            </div>
            
        </div>
    </div>
</div>




<?php foreach($_galerry_company as $Gallery):?>
<div class="modal fade" id="update_company_gallery<?=$Gallery['_id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
<div class="card bg-secondary border-0 mb-0">

    <div class="card-body px-lg-5 py-lg-5">
      <img width="100%" class="perimage_profile_gallery_update" src="<?=base_url('assets/public/')?>images/gallery/<?=$Gallery['image']?>" alt="">
        <div class="text-center text-muted mb-4">
            <small class="name_image_gallery_update"><?=$Gallery['image']?></small>
        </div>
        <form role="form" method="POST" enctype="multipart/form-data" action="<?=base_url('app/company/gallery-update/').$Gallery['_id']?>">
            <div class="form-group mb-3 text-center">
            <label class="custom-file-upload">
                 <input type="file" class="cuse_file_gallery_update" name="image" />
                  <i class="ni ni-image"></i>
             </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4"><?=$this->lang->line('update')?> ?</button>
                <button type="button" class="btn btn-danger my-4" data-dismiss="modal"><?=$this->lang->line('close')?> ?</button>
            </div>
        </form>
    </div>
</div>
       
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>





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
    <div class="progress-bar bg-primary" id="loading_proesess" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
        <form role="form" method="POST" id="form_account_password" action="<?=base_url('app/company/account-password/').$this->session->userdata('_id')?>">
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="old_password" class="form-control" placeholder="Old Password" type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="new_password" class="form-control" placeholder="New Password" type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="confirm_password" class="form-control" placeholder="Confirm Password" type="password">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" id="button_password" class="btn btn-danger my-4"><?=$this->lang->line('submit')?></button>
            </div>
        </form>
    </div>
</div>



                
            </div>
            
        </div>
    </div>