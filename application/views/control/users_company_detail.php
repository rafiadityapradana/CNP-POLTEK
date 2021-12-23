
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
                    <form>     
                        <div class="row">
                            <img width="100%" src="<?=base_url('assets/public/')?>images/profile/<?=$user_detail['photo']?>" alt="">
                        </div>   
                    </form>
                <hr class="my-4" />
                <a href="<?=base_url('app/control/users/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary btn-block">Back</a>
                </div>
            </div>

            <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Gallery Company  </h3>
                </div>
                <div class="col-4 text-right">
                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#see_all_gallery">See all</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              
              <div class="row">
              <?php foreach($_galerry_company as $gallery):?>
                <div class="col-md-6 py-3">
                    <img width="100%" src="<?=base_url('assets/public/')?>images/gallery/<?=$gallery['image']?>" alt="">
                </div>
              <?php endforeach;?>
              </div>
              <hr class="my-4" />
              
            </div>
        </div>  


        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">User Company Information </h3>
                </div>
                <div class="col-4 text-right">
                  <button data-toggle="modal" data-target="#reset-password" class="btn btn-sm btn-primary">Reset Password</button>
                </div>
              </div>
            </div>
            <div class="card-body">
            <div class="text-center">
             
              </div>
              <form id="form_account_user" action="<?=base_url('app/control/users/account-company/update/').$user_detail['_id']?>"> 
                <h6 class="heading-small text-muted mb-4">User Company information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    
                    <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-company">Company</label>
                        
                        <select class="form-control" name="company" id="company">
                            <option selected value="<?=$user_detail['company_id']?>"><?=$user_detail['company_name']?></option>

                        <?php foreach($data_company as $company):?>
                            <option value="<?=$company['id_company']?>"><?=$company['company_name']?></option>
                        <?php endforeach;?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-username">Name</label>
                        <input type="text" id="input-username" name="name" class="form-control" placeholder="Username" value="<?=$user_detail['name']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" name="email" class="form-control" placeholder="xxx@example.com" value="<?=$user_detail['email']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-phone">Phone Or Whatsapp Number</label>
                        <input type="text" id="input-phone" name="phone" class="form-control" placeholder="Phone Or Whatsapp Number" value="<?=$user_detail['phone']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-tempat_tanggal_lahir">Date Of Birth</label>
                        <input type="text" id="input-tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control"  value="<?=$user_detail['tempat_tanggal_lahir']?>" placeholder="Date Of Birth">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="jenis_kelamin">Gender</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option selected value="<?=$user_detail['jenis_kelamin']?>"><?=$user_detail['jenis_kelamin']?></option>
                            <option>Male</option>
							              <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="status_pernikahan">Marital Status</label>
                            <select class="form-control" name="status_pernikahan" id="status_pernikahan">
                            <option selected value="<?=$user_detail['status_pernikahan']?>"><?=$user_detail['status_pernikahan']?></option>
                            <option>Single</option>
							              <option>Married</option>
                            <option>Divorced</option>
                            <option>Divorced Died</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="form-group">
                            <label class="form-control-label">Address</label>
                            <textarea rows="4" name="alamat" class="form-control" placeholder="Information Your Account Address ..."><?=$user_detail['alamat']?></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12 text-right">
                      <button type="submit" class="btn-primary btn btn-sm">Submit</button>
                    </div>
                  </div>
                </div>      
              </form>
              
              <hr class="my-4" />
              
            </div>
          </div>


          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Company Information</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form >
                <h6 class="heading-small mb-4">Company Information </h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_name">Company Name</label>
                        <input type="text" id="input-company_name" name="company_name" class="form-control" placeholder="Company Name" value="<?=$user_detail['company_name']?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_mail">Company Email address</label>
                        <input type="email" id="input-company_mail" name="company_mail" class="form-control" placeholder="xxx@example.com" value="<?=$user_detail['company_mail']?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_phone">Company Phone Number</label>
                        <input type="text" id="input-company_phone" name="company_phone" class="form-control" placeholder="Company Phone Number" value="<?=$user_detail['company_phone']?>" readonly>
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_site">Company Site</label>
                        <input type="text" id="input-company_site" name="company_site" class="form-control" placeholder="Company site" value="<?=$user_detail['company_site']?>" readonly>
                      </div>
                      
                    </div>
                  
                
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Company Address</label>
                            <textarea rows="4" name="company_address" class="form-control" placeholder="Information Your Company Address ..." readonly><?=$user_detail['company_address']?></textarea>
                        </div>
                    </div>

                   
                  </div>
                  
                  
                </div>

              </form>
            </div>
          </div>

        </div>
      </div>

   

 
    




<div class="modal fade" id="reset-password" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You sure reset password this!</h4>
                    <p>If you agree, the password will be changed to the <b>PASSWORD_DEFAULT</b></p>
                </div>        
            </div>
            <div class="modal-footer">
                <button id="reset" action ="<?=base_url('app/control/users/reset-password/').$user_detail['_id']?>" class="btn btn-white">Ok, Got it</button>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>

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

<div class="modal fade" id="reset-password_info" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 id="info_res" class="heading mt-4"></h4>
                    <p>please provide this password <b>PASSWORD_DEFAULT</b> to the account in question </p>
                </div>        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
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


<div class="modal fade" id="see_all_gallery" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
              <?php foreach($_galerry_company_all as $all):?>
                <div class="col-md-4 py-3">
                    <img width="100%" src="<?=base_url('assets/public/')?>images/gallery/<?=$all['image']?>" alt="">
                </div>
              <?php endforeach;?>
            </div>
      </div>
      
    </div>
  </div>
</div>