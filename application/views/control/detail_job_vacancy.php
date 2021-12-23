
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
    <form method="POST"  enctype="multipart/form-data"  action="<?=base_url('app/control/job-vacancy/data/').$job['_id']?>">
      <div class="row">
        <div class="col-xl-4 order-xl-2">           
            <div class="card">
                <div class="card-body">             
                <div class="row">
                        <img data-toggle="modal" data-target="#loker" id="perjob" width="100%" src="<?=base_url('assets/public/images/loker/').$job['poster']?>" alt="">
                        
                </div>
                <div class="text-center text-muted mb-4">
                          <small id="name_image_job"><?=$job['poster']?></small>
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
                <div class="col-8">
                  <h3 class="mb-0"></h3>
                  <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="col text-right">
                <a class="btn btn-primary btn-sm" href="<?=base_url('app/control/job-vacancy/').$this->session->userdata('_id')?>"><?=$this->lang->line('back')?> !</a>
                </div>
              </div>
            </div>
            <div class="card-body">
          
             
              
                <h6 class="heading-small mb-4"><?=$this->lang->line('job')?> </h6>
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_name"><?=$this->lang->line('company')?></label>
                        <select class="form-control" name="company" id="company">
                            <option selected value="<?=$job['company_id']?>"> <?=$job['company_name']?></option>
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
                            <option selected value="<?=$job['delivery_destination']?>"> <?=$this->lang->line($job['delivery_destination'])?></option>
                            <option value="Job Reques"><?=$this->lang->line('Job Request')?></option>
                            <option value="Internship Request"><?=$this->lang->line('Internship Request')?></option>
                        </select>
                        <?= form_error('delivery_destination', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_mail"><?=$this->lang->line('title')?></label>
                        <input type="text" id="input-company_mail" name="title" class="form-control" placeholder="<?=$this->lang->line('title')?>"value="<?=$job['title']?>" >
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                            <label class="form-control-label" for="input-title"><?=$this->lang->line('close')?></label>
                            <input type="date" id="input-title" name="close"  class="form-control" placeholder="><?=$this->lang->line('close')?>" value="<?=$job['close_in']?>">
                            <?= form_error('close', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"><?=$this->lang->line('note')?></label>
                            <textarea rows="4" name="note" class="form-control" placeholder="<?=$this->lang->line('not')?> <?=$this->lang->line('job')?>..."><?=$job['note']?></textarea>
                            <?= form_error('note', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-lg-12 text-right">
                    <button type="submit" class="btn btn-primary btn-sm"><?=$this->lang->line('update')?></button>
                    </div>
                  </div>
                  
                  
                </div>

             
            </div>
          </div>

        </div>
      </div>

      </form>
    


      <div class="row">
        <div class="col-xl-12">
          <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('job_app')?> <?=$job['title']?></h3>
                </div>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#select_studens">
                <?=$this->lang->line('select_students')?>
              </button>
              </div>
            </div>
            <div class="text-center">
            <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                    <th scope="col"><?=$this->lang->line('name')?></th>
                    <th scope="col"><?=$this->lang->line('email')?></th>
                    <th scope="col"><?=$this->lang->line('date_send')?></th>
                    <th scope="col"><?=$this->lang->line('delivery')?></th>
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($job_aplication as $JOP_app):?>
                  <tr>
                    <th scope="row">
                      <?=$JOP_app['name']?>
                    </th>
                    <td>
                    <?=$JOP_app['email']?>
                    </td>
                    <td>
                    <?=$JOP_app['date_send']?>
                    </td>
                       
                    <td> 
                    <?=$this->lang->line($job['delivery_destination'])?>
                    </td>
                   
                    <td>
                    <a data-toggle="modal" href="#modal-quest<?=$JOP_app['_id']?>"> <i class="ni ni-send text-info"></i> </a>
                    
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>



    <div class="modal fade" id="select_studens" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><input type="checkbox" id="select_all"/> <?=$this->lang->line('select_all')?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url()?>" key = "<?=$job['_id']?>" id="form_cv_send">
      
      
      <div class="modal-body">
        <table class="table align-items-center table-flush dataTable">
                <thead  style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                  <th scope="col"></th>
                    <th scope="col"><?=$this->lang->line('name')?></th>
                    <th scope="col"><?=$this->lang->line('email')?></th>
                    <th scope="col"><?=$this->lang->line('majors')?></th>
                    <th scope="col"><?=$this->lang->line('gender')?></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($user_aktif as $JOP_app):?>
                  <tr>
                    <td scope="row">
                    <input class="checkbox" type="checkbox" name="check[]" value="<?=$JOP_app['_id']?>">
                    </td>
                    <th>
                      <?=$JOP_app['name']?>
                    </th>
                    <td>
                    <?=$JOP_app['email']?>
                    </td>
                    <td>
                    <?=$this->lang->line($JOP_app['code'])?>
                    </td>
                       
                    <td> 
                    <?=$this->lang->line($JOP_app['jenis_kelamin'])?>
                    </td>
                   
                    
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><?=$this->lang->line('close')?></button>
        <button type="primary" id="send" data="" class="btn btn-primary btn-sm"><?=$this->lang->line('send')?></button>
      </div>
      </form>
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



<div class="modal fade" id="loker" tabindex="-1"  data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
    <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img width="100%" src="<?=base_url('assets/public/images/loker/').$job['poster']?>" alt="">
      </div>
   
    </div>
  </div>
</div>

<?php foreach($job_aplication as $job):?>
<div class="modal fade" id="modal-quest<?=$job['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                  <a data-toggle="modal" href="#modal-notification<?=$job['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('delete')?></a>
                  </div>
                 
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/job-vacancy/job-app/data/').$job['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?></a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($job_aplication as $app):?>
<div class="modal fade" id="modal-notification<?=$app['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4"><?=$this->lang->line('delete_ques')?></h4>
                    <p><?=$this->lang->line('if_jop_app')?></p>
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/job-vacancy/job-app/delete/').$app['_id']?>" class="btn btn-white">Ok, Got it</a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>

<script>
const select_all = document.getElementById("select_all"); 
const checkboxes = document.getElementsByClassName("checkbox"); 


select_all.addEventListener("change", function(e){
	for (i = 0; i < checkboxes.length; i++) { 
		checkboxes[i].checked = select_all.checked;
	}
});
for (let i = 0; i < checkboxes.length; i++) {
	checkboxes[i].addEventListener('change', function(e){ 
    if(checkboxes[i].checked){
      console.log(checkboxes[i].value)
    } 
    const data = [
      checkboxes[i].value
    ]
    document.getElementById('send').setAttribute('data',data)
   
		if(this.checked == false){
			select_all.checked = false; 
		}
		
		if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
      select_all.checked = true;
     
		}
	});
}
</script>