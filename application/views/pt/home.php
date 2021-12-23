    
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"><?=$this->lang->line('job')?></h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#collapseExample" data-toggle="collapse" class="btn btn-sm btn-primary"><?=$this->lang->line('create')?> <?=$this->lang->line('job')?> ? </a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <?= $this->session->flashdata('msg'); ?>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">

              
              <form method="POST" action="<?=base_url('app/company')?>" enctype="multipart/form-data">
              
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-title"><?=$this->lang->line('title')?></label>
                        <input type="text" id="input-title" name="title" class="form-control" placeholder="<?=$this->lang->line('title')?>">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label" for="input-title"><?=$this->lang->line('delivery')?></label>
                        <select class="form-control" name="delivery_destination"> 
                          <option selected disabled><?=$this->lang->line('delivery')?></option>
                          <option vlaue="Job Request"><?=$this->lang->line('Job Request')?></option>
                          <option value="Internship Request"><?=$this->lang->line('Internship Request')?></option>
                          
                        </select>
                        <?= form_error('delivery_destination', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      
                      
                          <div class="form-group">
                            <label class="form-control-label" for="input-title"><?=$this->lang->line('close')?></label>
                            <input type="date" id="input-title" name="close" class="form-control" placeholder="><?=$this->lang->line('close')?>">
                            <?= form_error('close', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                      

                      
                      

                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                        <label class="custom-file-upload_job" data-toggle="tooltip" data-placement="right" title="Poster">
                          <input type="file" id="cuse_file_poster" name="image" />
                              <i class="ni ni-image"></i>
                        </label>
                      </div>
                      <img width="100%" src="" id="per_image_job" alt="">
                    </div>

    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"><?=$this->lang->line('note')?></label>
                            <textarea rows="4" name="note" class="form-control" id="desc" placeholder="><?=$this->lang->line('note')?> ..."></textarea>
                            <?= form_error('note', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="pl-lg-4 text-right">
                <button type="submit" class="btn btn-outline-primary btn-block"><?=$this->lang->line('create')?> <?=$this->lang->line('job')?> ?</button>
                </div>
              </form>

              </div>
            </div>
              <div class="row">
                <?php foreach($MY_JOB as $job): ?>
                  <div class="col-md-4 justify-content-center text-center">
                    <div class="card" style="width: 100%;">
                    <img src="<?=base_url('assets/public/')?>images/loker/<?=$job['poster']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?=$job['title']?></h5>
                      <p class="card-text"> <?=$job['date_create']?></p>
                      <a href="<?=base_url('app/company/job-vacancy/data/').$job['_id']?>" class="btn btn-primary btn-block btn-sm"><?=$this->lang->line('view')?></a>
                    </div>
                  </div>

               
                </div> 
                <?php endforeach;?>
              </div>
            </div>

          </div>
        </div>
        
      </div>

      


      