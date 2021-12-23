    
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"> <a href="<?=base_url('app/company')?>"><i class="ni ni-bold-left text-primary"></i></a> </h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img width="100%" src="<?=base_url('assets/public/')?>images/loker/<?=$jobvacancydetail['poster']?>" alt="Image placeholder" class="card-img-top">
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><b><?=$this->lang->line('title')?></b></li>
                        <ol><?=$jobvacancydetail['title']?></ol>
                    </ul>
                    <ul>
                        <li><b><?=$this->lang->line('published')?></b></li>
                        <ol><?=$jobvacancydetail['date_create']?></ol>
                    </ul>
                    <ul>
                        <li><b><?=$this->lang->line('note')?></b></li>
                        <ol><?=$jobvacancydetail['note']?></ol>
                    </ul>
                    
                </div>
            </div>
            <?php if($jobvacancydetail['job_vacancy_status'] == 'Show'):?>
              <a href="<?=base_url('app/company/job-vacancy/status/').$jobvacancydetail['_id']?>" class="btn btn-sm btn-warning mb-2 mt-2"><?=$this->lang->line('hide_public')?> </a>
            <?php else:?>
              <a href="<?=base_url('app/company/job-vacancy/status/').$jobvacancydetail['_id']?>" class="btn btn-sm btn-success mb-2 mt-2">S<?=$this->lang->line('hide_public')?> </a> 
            <?php endif;?>  
            <a href="#<?=$jobvacancydetail['_id']?>" data-toggle="modal" class="btn btn-sm btn-danger mb-2 mt-2"><?=$this->lang->line('delete')?> <?=$this->lang->line('job')?> ? </a>
          
            
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><?=$this->lang->line('email')?></th>
                    <th scope="col"><?=$this->lang->line('date_send')?></th>
                   
                  </tr>
                </thead>
                <tbody class="list">
                    <?php foreach($job_application as $appli):?>
                     
                        <tr>
                            <td>
                            <a href="<?=base_url('app/company/job-vacancy/data/user/').$appli['user_id']?>/<?=$jobvacancydetail['_id']?>/<?=$appli['_id']?>" class="text-white">
                              <?=$appli['email']?>
                            </a>
                            </td>
                            <td>
                            <a href="<?=base_url('app/company/job-vacancy/data/user/').$appli['user_id']?>/<?=$jobvacancydetail['_id']?>/<?=$appli['_id']?>" class="text-white">
                            <?=$appli['date_send']?>
                            </a>
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

      


      <div class="modal fade" id="<?=$jobvacancydetail['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
        	
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification"><?=$this->lang->line('notive')?></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4"><?=$this->lang->line('delete_ques')?>!</h4>
                    <p><?=$this->lang->line('if_jop_app_public')?>....</p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <a href="<?=base_url('app/company/job-vacancy/delete/').$jobvacancydetail['_id']?>" class="btn btn-white"><?=$this->lang->line('oke')?></a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
