
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
    <form method="POST"  enctype="multipart/form-data"  action="<?=base_url('app/control/job-vacancy/new/').$this->session->userdata('_id')?>">
      <div class="row">
        <div class="col-xl-4 order-xl-2">           
            <div class="card">
                <div class="card-body">             
                <div class="row">
                        <img id="perjob" width="100%" src="" alt="">
                        
                </div>
                <div class="text-center text-muted mb-4">
                          <small id="name_image_job"></small>
                      </div>
                <hr class="my-4" /> 
                <div class="form-group text-center">
                            <label class="custom-file-upload">
                                <input type="file" id="cuse_job_upload" name="image" />
                                <i class="ni ni-image"></i>
                            </label>

                        </div>           
                </div>
            </div>  
        </div>
        <div class="col-xl-8 order-xl-1">
          


          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8"></h3>
                  <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="col text-right">
                <a class="btn btn-primary btn-sm" href="<?=base_url('app/control/job-vacancy/').$this->session->userdata('_id')?>"><?=$this->lang->line('back')?> !</a>
                </div>
              </div>
            </div>
            <div class="card-body">
          
             
              
                <h6 class="heading-small mb-4">
                  <?=$this->lang->line('create')?> <?=$this->lang->line('job')?> </h6>
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_name"><?=$this->lang->line('company')?></label>
                        <select class="form-control" name="company" id="company">
                            <option selected disabled> <?=$this->lang->line('company')?></option>
                        <?php foreach($data_company as $company):?>
                            <option value="<?=$company['id_company']?>"><?=$company['company_name']?></option>
                        <?php endforeach;?>
                        </select>
                        <?= form_error('company', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_name"><?=$this->lang->line('delivery')?></label>
                        <select class="form-control" name="delivery_destination" id="delivery_destination">
                            <option selected disabled> <?=$this->lang->line('delivery')?></option>
                            <option value="Job Request"><?=$this->lang->line('Job Request')?></option>
                            <option value="Internship Request"><?=$this->lang->line('Internship Request')?></option>
                        </select>
                        <?= form_error('delivery_destination', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_mail"><?=$this->lang->line('title')?></label>
                        <input type="text" id="input-company_mail" name="title" class="form-control" placeholder="<?=$this->lang->line('title')?>" >
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                            <label class="form-control-label" for="input-title"><?=$this->lang->line('close')?></label>
                            <input type="date" id="input-title" name="close" class="form-control" placeholder="><?=$this->lang->line('close')?>">
                            <?= form_error('close', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"><?=$this->lang->line('note')?></label>
                            <textarea rows="4" id="desc" name="note" class="form-control" placeholder="<?=$this->lang->line('note')?> <?=$this->lang->line('job')?>..."></textarea>
                            <?= form_error('note', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-lg-12 text-right">
                    <button type="submit" class="btn btn-primary btn-sm"><?=$this->lang->line('submit')?></button>
                    </div>
                  </div>
                  
                  
                </div>

              </form>
            </div>
          </div>

        </div>
      </div>

      </form>
    






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

