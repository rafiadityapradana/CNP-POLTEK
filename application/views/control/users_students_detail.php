
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
            <div class="text-center">
             
              </div>
              <form> 
                
                  <div class="row">
                    <img width="100%" src="<?=base_url('assets/public/')?>images/profile/<?=$user_detail['photo']?>" alt="">
                  </div>
                   
              </form>
              
              <hr class="my-4" />
              <a href="<?=base_url('app/control/users/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary btn-block">Back</a>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">User Information </h3>
                </div>
                <div class="col-4 text-right">
                  <button data-toggle="modal" data-target="#reset-password" class="btn btn-sm btn-primary">Reset Password</button>
                </div>
              </div>
            </div>
            <div class="card-body">
            <div class="text-center">
             
              </div>
              <form id="form_account_user" action="<?=base_url('app/control/users/account/update/').$user_detail['_id']?>"> 
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-username">Nim</label>
                        <input type="text" id="input-username" name="nim" class="form-control" placeholder="Username" value="<?=$user_detail['nim']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-major">Major</label>
                        
                        <select class="form-control" name="major" id="major">
                            <option selected value="<?=$user_detail['id_major']?>"><?=$user_detail['major']?></option>
                        <?php foreach($majors_data as $major):?>
                            <option value="<?=$major['id_major']?>"><?=$major['major']?></option>
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
        </div>
      </div>

      <?php if($total_personal_data != 0):?>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Personal Data <?=$user_detail['name']?></h3>
                </div>
                
              </div>
            </div>
            <div class="text-center">
           
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                    <th scope="col">Height</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Country</th>
                    <th scope="col">Vehicle Sim</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Physical</th>
                   
                  </tr>
                </thead>
                <tbody>
               
                  <tr>
                    <th scope="row">
                      <?=$personal_data['tinggi']?>
                    </th>
                    <td>
                    <?=$personal_data['berat']?>
                    </td>
                    <td>
                    <?=$personal_data['negara']?>
                    </td>
                    <td>
                    <?=$personal_data['sim']?>
                    </td>
                    <td>
                    <?=$personal_data['golongan_darah']?>
                    </td>
                    <td>
                    <?=$personal_data['fisik']?>
                    </td>
                  </tr>
                  <?php if($personal_data['catatan'] != ""):?>
                  <tr>
                    <th scope="row" class="bg-deafult">
                      Note
                    </th>
                    <td colspan="5">
                    <?=$personal_data['catatan']?>
                    </td>
                </tr>
                <?php endif;?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    <?php endif;?>

    <?php if($total_cv != 0):?>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Commanditaire Vennootschap <?=$user_detail['name']?></h3>
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
                    <th scope="col">Title</th>
                    <th scope="col">File Name</th>
                    <th scope="col">Date Create</th>
                    <th scope="col">Date Update</th>
                    <th scope="col">Primary</th>
                    <th scope="col"></th>
                   
                   
                  </tr>
                </thead>
                <tbody>
               <?php foreach($user_cv as $cv):?>
                  <tr>
                    <th scope="row">
                      <?=$cv['title']?>
                    </th>
                    <td>
                    <?=$cv['cv']?>
                    </td>
                    <td>
                    <?=$cv['date_create']?>
                    </td>
                    <td>
                    <?=$cv['date_update']?>
                    </td>
                    <td>
                    <?=$cv['cv_key']?>
                    </td>
                    <td>
                    <a href="<?=base_url('app/control/users/account/download-cv/').$cv['_id']?>" class="btn btn-sm btn-primary btn-block">Download</a>
                    </td>
                  </tr>
               <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    <?php endif;?>
    <?php if($total_certificate != 0):?>
        <div class="row">
      <div class="col-xl-12">
        <div class="card">
       
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Certificate <?=$user_detail['name']?></h3>
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
                  <th scope="col">Certificate File Name</th>
                  <th scope="col">Certificate Description</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
             <?php foreach($user_certificate as $certificate):?>
                <tr>
                  <th scope="row">
                    <?=$certificate['certificate_file']?>
                  </th>
                  <td>
                    <?=$certificate['value_certificate']?>
                    </td>
                    <td>
                    <a href="<?=base_url('app/control/users/account/download-certificate/').$certificate['id_certificate']?>" class="btn btn-sm btn-primary btn-block">Download</a>
                    </td>
                 
                </tr>
             <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div>
  <?php endif;?>
    <?php if($total_ability != 0):?>
        <div class="row">
      <div class="col-xl-12">
        <div class="card">
       
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Ability <?=$user_detail['name']?></h3>
              </div>
              
            </div>
          </div>
          <div class="text-center">
         
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                <tr>
                  <th scope="col">Ability</th>
                 
                </tr>
              </thead>
              <tbody>
             <?php foreach($user_ability as $ability):?>
                <tr>
                  <th scope="row">
                    <?=$ability['value_ability']?>
                  </th>
                  
                 
                </tr>
             <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div>
  <?php endif;?>

    <?php if($total_experience != 0):?>
        <div class="row">
      <div class="col-xl-12">
        <div class="card">
       
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Experience <?=$user_detail['name']?></h3>
              </div>
              
            </div>
          </div>
          <div class="text-center">
         
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                <tr>
                  <th scope="col">Experience </th>
                 
                </tr>
              </thead>
              <tbody>
             <?php foreach($data_experience as $experience):?>
                <tr>
                  <th scope="row">
                    <?=$experience['value']?>
                  </th>
                  
                 
                </tr>
             <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div>
  <?php endif;?>
 
    




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