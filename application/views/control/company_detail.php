
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
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"><?=$this->lang->line('gallery')?> <?=$this->lang->line('company')?>  </h3>
                </div>
                <div class="col-4 text-right">
                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#see_all_gallery"><?=$this->lang->line('view')?></button>
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
                  <h3 class="mb-0"> </h3>
                  <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="col text-right">
                <?php if($data_company['company_status'] ==  'Aktif'):?>
                      <a href="<?=base_url('app/control/company/company-data/status/').$data_company['id_company']?>" class="btn-sm btn btn-danger"><?=$this->lang->line('non_aktivate')?> !</a>
                    <?php else:?>
                      <a href="<?=base_url('app/control/company/company-data/status/').$data_company['id_company']?>" class="btn-sm btn btn-success"> <?=$this->lang->line('aktivate')?> !</a>
                <?php endif;?>
                </div>
              </div>
            </div>
            <div class="card-body">
          
              <form method="POST" id="form_account_company" action="<?=base_url('app/control/company/company-data/').$data_company['id_company']?>">
              
                <h6 class="heading-small mb-4"> <?=$this->lang->line('company')?> </h6>
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_name"> <?=$this->lang->line('name')?></label>
                        <input type="text" id="input-company_name" name="company_name" class="form-control" placeholder=" <?=$this->lang->line('name')?>" value="<?=$data_company['company_name']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_mail"> <?=$this->lang->line('email_address')?></label>
                        <input type="email" id="input-company_mail" name="company_mail" class="form-control" placeholder="xxx@example.com" value="<?=$data_company['company_mail']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_phone"> <?=$this->lang->line('phone')?></label>
                        <input type="text" id="input-company_phone" name="company_phone" class="form-control" placeholder=" <?=$this->lang->line('phone')?>" value="<?=$data_company['company_phone']?>">
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_site"> <?=$this->lang->line('website')?></label>
                        <input type="text" id="input-company_site" name="company_site" class="form-control" placeholder=" <?=$this->lang->line('website')?>" value="<?=$data_company['company_site']?>">
                      </div>
                      
                    </div>
                  
                
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"> <?=$this->lang->line('address')?></label>
                            <textarea rows="4" name="company_address" class="form-control" placeholder="Information Your  <?=$this->lang->line('address')?> ..."><?=$data_company['company_address']?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"> <?=$this->lang->line('desc')?></label>
                            <textarea rows="4" id="desc" name="company_desc" class="form-control" placeholder="Information Your  <?=$this->lang->line('desc')?>..."><?=$data_company['company_desc']?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 text-right">
                    <button type="submit" class="btn btn-primary btn-sm"> <?=$this->lang->line('submit')?></button>
                    </div>
                  </div>
                  
                  
                </div>

              </form>
            </div>
          </div>

        </div>
      </div>

<?php if($total != 0):?>
   <div class="row">
    <div class="col-xl-8">
    <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('job')?> <?=$data_company['company_name']?></h3>
                </div>
                
              </div>
            </div>
            <div class="text-center">
            <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><?=$this->lang->line('title')?></th>
                    <th scope="col"><?=$this->lang->line('date_create')?></th>
                  
                  
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($job_vacancy as $job ):?>
                  <tr>
                    <th scope="row">
                      <?=$job['title']?>
                    </th>
                    <td>
                    <?=$job['date_create']?>
                    </td>
                   <td><a data-toggle="modal" href="#modal-quest_job<?=$job['_id']?>"> <i class="ni ni-send text-info"></i> </a></td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
    </div>
   </div>
 <?php endif;?>
   <?php foreach($job_vacancy as $job):?>
<div class="modal fade" id="modal-quest_job<?=$job['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                  <a href="<?=base_url('job-vacancy/').$job['_id']?>" target="__blank" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?> <?=$this->lang->line('public')?></a>
                  </div>
                 
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/company/data/job-vacancy/').$job['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?></a>
                  </div>
                </div>               
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
                <button type="button" id="close_info" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
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