    
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"> <a href="<?=base_url('app/company/job-vacancy/data/').$id_job?>"><i class="ni ni-bold-left text-primary"></i></a> </h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img width="100%" src="<?=base_url('assets/public/images/profile/').$seekres['photo']?>" alt="">
                        
                        <a href="<?=base_url('app/company/job-application/data/user/').$application_data['cv_id']?>" class="btn btn-sm mt-3 mb-3" style="background-color:#2D3B7C; color:#ffffff"><?=$this->lang->line('download')?> Commanditaire Vennootschap <?=$this->lang->line('job')?></a>
                        
                    </div>
                    <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                        <thead>
                            <tr style="background-color:#2D3B7C; color:#ffffff">
                            <th scope="col"><?=$this->lang->line('height')?></th>
                            <th scope="col"><?=$this->lang->line('weight')?></th>
                            <th scope="col"><?=$this->lang->line('country')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:#000000">
                            <td><?=$seekres['tinggi']?> CM</td>
                            <td><?=$seekres['berat']?> KG</td>
                            <td><?=$seekres['negara']?></td>
                            </tr>
                            
                        </tbody>
                        <thead>
                            <tr style="background-color:#2D3B7C; color:#ffffff">
                            <th scope="col"><?=$this->lang->line('vehicle_sim')?></th>
                            <th scope="col"><?=$this->lang->line('blood_group')?></th>
                            <th scope="col"><?=$this->lang->line('physical')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:#000000">
                            <td><?=$seekres['sim']?></td>
                            <td><?=$seekres['golongan_darah']?></td>
                            <td><?=$seekres['fisik']?></td>
                            
                            </tr>
                            <?php if($seekres['catatan'] != ""):?>
                            <tr>
                            <th colspan="5" scope="row" style="background-color:#2D3B7C; color:#ffffff"><?=$this->lang->line('note')?></th>
                            </tr>
                            <tr>
                            
                            <td colspan="5" style="color:#000000"><?=$seekres['catatan']?></td>
                            </tr>
                            
                            <?php endif;?>
                            
                        </tbody>
                        </table> 	
                        </div>

                        

                        <form class="mt-3">
                        <div class="row">
                                              <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="label"><?=$this->lang->line('majors')?></label>
                              <h5><?=$this->lang->line($seekres['code'])?></h5>
                                                          
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
                              <label class="label"><?=$this->lang->line('date_of_birth')?></label>
                              <h5><?=$seekres['tempat_tanggal_lahir']?></h5>
                                                          
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
                                                              <a href="<?=base_url('app/company/job-vacancy/data/user-certificate/').$seekres['user_id'].'/'.$id_job.'/'.$certificate['id_certificate'].'/'.$id_job_appli?>"><li><h5><?=$certificate['value_certificate']?></h5></li></a>
                                          <?php endforeach;?>
                                                          </ul>
                            </div>
                          </div>
                                                  
                          
                        </div>
                      </form>
                      

                        
                    </div>
                </div>
                <div id="msg"></div>
                <hr>
                  <?php if($application_data['status_job_application'] == 'Received' || $application_data['status_job_application'] == 'Rejected'):?>
                        <form class="mt-3">
                        <div class="row">
                          <div class="col-md-4">
                          <div class="form-group">
                            <label><?=$this->lang->line('decision')?></label>
                           <h3><?=$application_data['status_job_application']?></h3>
                          </div>
                          </div>
                          <div class="col-md-8">
                          <label><?=$this->lang->line('note')?></label>
                           <div><?=$application_data['note_job_application']?></div>

                          </div>
                        </div>
                         
                          </form>
                        <?php else: ?>
                          


                          <form class="mt-3" id="form_select_decision" action="<?=base_url('app/company/job-application/data/decision/').$application_data['_id']?>" methot="POST">
                          <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                            <label><?=$this->lang->line('decision')?></label>
                            
                            <select class="form-control" name="decision" id="decision_select"> 
                              <?php if($application_data['status_job_application'] == 'View'):?>
                                <option>-</option>
                                <option value="Pandding"><?=$this->lang->line('Pandding')?></option>
                                <option value="Received"><?=$this->lang->line('Received')?></option>
                                <option value="Rejected"><?=$this->lang->line('Rejected')?></option>
                              <?php elseif ($application_data['status_job_application'] == 'Pandding'):?>
                              <option selected disabled value="Pandding"><?=$this->lang->line($application_data['status_job_application'])?></option>
                              <option value="Received"><?=$this->lang->line('Received')?></option>
                                <option value="Rejected"><?=$this->lang->line('Rejected')?></option>
                              <?php endif?>
                            </select>
                          </div>
                          <button type="submit" id="btn_status" class="btn btn-sm btn-block" style="background-color:#2D3B7C; color:#ffffff"><?=$this->lang->line('decision')?>? </button>
                            </div>
                            <div class="col-md-8">
                            <div class="form-group">
                            <label><?=$this->lang->line('note')?></label>
                            <textarea rows="4" class="form-control" id='desc' name="decision_note" placeholder="<?=$this->lang->line('note')?> ..."><?=$application_data['note_job_application']?></textarea>
                          </div>
                            </div>
                          </div> 
                          
                          
                          
                        </form>
                        <?php endif;?>
                  
           

          </div>
          </div>
        </div>
        
      </div>

      


      