<section class="ftco-intro" style="background-image: url(<?=base_url('assets/public/')?>images/bg3.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 text-center">
            <h2><?=$this->lang->line('ready')?></h2>
				<p class="mb-4"><?=$this->lang->line('ready_sub')?></p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
    	<div class="row no-gutters ftco-animate">
        <div class="col-md-8 wrap-about ftco-animate">
				<div class="contact-wrap w-100 p-md-5 p-4">
					<h3 class="mb-4"><?=$this->lang->line('job_app')?> </h3>
					
					<?= $this->session->flashdata('message'); ?>
                    <?php if($total_job_application == 0):?>
						<a href="<?=base_url('job-vacancy')?>" class="btn btn-primary mb-3"><?=$this->lang->line('look')?> <?=$this->lang->line('job_app')?> ?</a>
                        
						<h5><?=$this->lang->line('sub_job_app_info')?></h5>
						
					<?php else:?>
						<a href="<?=base_url('job-vacancy')?>" class="btn btn-primary mb-3"><?=$this->lang->line('look')?> <?=$this->lang->line('job')?> ?</a>
						<div class="table-responsive">
                        <table class="table table-borderless">
						<?php foreach($job_application as $job):?>
						<?php if($job['job_vacancy_status'] != "Hide"):?>	
                        <thead>
                            <tr class="bg-primary" style="color:#ffffff">
                            <th scope="col"><?=$this->lang->line('company_name')?></th>
							<th scope="col"><?=$this->lang->line('date_send')?></th>
							<th scope="col"><?=$this->lang->line('status_job_app')?></th>
							
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:#000000">
							
                            <td><?=$job['company_name']?></td>
							<td><?=$job['date_send']?></td>
							<td><?=$job['status_job_application']?></td>
							<td>
							
                            </tr>
                        </tbody>
						<thead>
                            <tr class="bg-primary" style="color:#ffffff">
                            <th scope="col"><?=$this->lang->line('delivery_destination')?> </th>
							<th scope="col"><?=$this->lang->line('title_job_application')?></th>
							<th scope="col">File</th>
							
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:#000000">
							
                            <td><?=$job['delivery_destination']?></td>
							<td><?=$job['title']?></td>
							<td><?=$job['cv']?></td>
							<td>
							
                            </tr>
                        </tbody>
						<?php if($job['note_job_application'] != ""):?>
						<thead>
                            <tr class="bg-primary" style="color:#ffffff">
                            <th colspan="3"><?=$this->lang->line('note')?></th>
                            </tr>
                        </thead>
						
						<tbody>
                            <tr style="color:#000000">
                            <td colspan="3"> <?=$job['note_job_application']?></td>	
							<td>
							
                            </tr>
                        </tbody>
						<?php endif;?>
						<tbody>
                            <tr >
                            <td colspan="3"><input type="button" value="Delete ?" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop<?=$job['_id']?>"></td></td>	
							<td>
							
                            </tr>
                        </tbody>

						<?php else:?>

						<thead>
                            <tr class="bg-primary" style="color:#ffffff">
                            <th colspan="3"><?=$this->lang->line('notive')?> !</th>
                            </tr>
                        </thead>
						<tbody>
                            <tr style="color:#000000">
                            <td colspan="3"> <b><?=$job['company_name']?></b><?=$this->lang->line('delete_ques')?> <b><?=$job['title']?></b>,<?=$this->lang->line('we_recomret')?></td>	
							<td>
							
                            </tr>
                        </tbody>
						<tbody>
                            <tr >
                            <td colspan="3"><input type="button" value="Delete ?" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop<?=$job['_id']?>"></td></td>	
							<td>
							
                            </tr>
                        </tbody>



						<?php endif;?>
						<?php endforeach;?>
                        </table> 	
                        </div>
					<?php endif;?>
					
					
				</div>
			</div>
    		<div class="col-md-4 p-4 p-md-5 bg-white">
            <a href="<?=base_url('app/account')?>" class="block-20 rounded"><img width="100%" src="<?=base_url('assets/public/images/profile/').$myaccount['photo']?>" class="card-img-top"></a>
				<div class="text p-4 text-center">
					<h3 class="heading"><a href="<?=base_url('app/account')?>"><?=$myaccount['name']?></a></h3>
					<div class="meta mb-2">
						<div><a href="<?=base_url('app/account')?>"><?=$myaccount['email']?></a></div>
									
					    <div><a href="<?=base_url('app/account')?>" class="meta-chat"><span class="fa fa-key"></span> <?=$this->session->userdata('date_time')?></a></div>
					</div>
					<p class="mb-0"><a href="<?=base_url('app/account')?>" class="btn btn-primary px-4 py-3"><?=$this->lang->line('back')?> ?</a>
				</p>
					
				</div>
			</div>
            
								
			</div>
        </div>
    </div>
</section>


<?php foreach($job_application as $job):?>
<div class="modal fade" id="staticBackdrop<?=$job['_id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
      <h4 class="heading"><?=$this->lang->line('delete_ques')?>  <b><?=$job['title']?></b> ? </h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><?=$this->lang->line('close')?></button>
        <a href="<?=base_url('app/job-application/delete/').$job['_id']?>" class="btn btn-danger"><?=$this->lang->line('delete')?> ?</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>