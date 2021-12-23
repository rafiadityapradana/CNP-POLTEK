
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
                        <img width="100%" src="<?=base_url('assets/public/')?>images/profile/de.png" alt="">
                        </div>   
                    </form>
                <hr class="my-4" />
               
                </div>
            </div>



        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">User Company Create Account </h3>
                </div>
                <div class="col text-right">  <a href="<?=base_url('app/control/users/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary">Back</a></div>
              </div>
            </div>
            <div class="card-body">
            <div class="text-center">
             
              </div>
              <form id="form_account_user" action="<?=base_url('app/control/users/new-company/account/data/').$this->session->userdata('_id')?>"> 
                <h6 class="heading-small text-muted mb-4">User Company information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    
                    <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-company">Company</label>
                        
                        <select class="form-control" name="company" id="company_change">
                            <option selected disabled>-</option>

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
                        <input type="text" id="input-username" name="name" class="form-control" placeholder="Username" ">
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" name="email" class="form-control" placeholder="xxx@example.com" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-username">Password</label>
                        <input type="pasword" id="input-username" name="password" class="form-control" placeholder="Passwrod">
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-username">Confirm Password</label>
                        <input type="pasword" id="input-username" name="confirm" class="form-control" placeholder="Confirm Paswsword">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-phone">Phone Or Whatsapp Number</label>
                        <input type="text" id="input-phone" name="phone" class="form-control" placeholder="Phone Or Whatsapp Number">
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-tempat_tanggal_lahir">Date Of Birth</label>
                        <input type="text" id="input-tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control"  placeholder="Date Of Birth">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="jenis_kelamin">Gender</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option selected disabled>-</option>
                            <option>Male</option>
							              <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="status_pernikahan">Marital Status</label>
                            <select class="form-control" name="status_pernikahan" id="status_pernikahan">
                            <option selected disabled>-</option>
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
                            <textarea rows="4" name="alamat" class="form-control" placeholder="Information Your Account Address ..."></textarea>
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
