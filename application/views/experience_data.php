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
					<h3 class="mb-4"> <?=$this->lang->line('experience')?></h3>
					<?= $this->session->flashdata('message'); ?>
                    <?php if($total_experience == 0):?>
						<input id="experience" type="button" value="+ Experience  ?" class="btn btn-primary" >
						<h5><?=$this->lang->line('sub_experience_info')?></h5>
						
					<?php else:?>
						<input id="experience" type="button" value="+ <?=$this->lang->line('experience')?>  ?" class="btn btn-primary mb-3" >
						<div class="table-responsive">
                        <table class="table table-borderless">
                        <thead>
                            <tr class="bg-primary" style="color:#ffffff">
                            <th scope="col"><?=$this->lang->line('experience')?></th>
							<th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:#000000">
							<?php foreach($data_experience as $experience):?>
                            <td><?=$experience['value']?></td>
							<td>
							<input type="button" value="Delete ?" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop<?=$experience['_id']?>"></td>
                            <?php endforeach;?>
                            </tr>
                        </tbody>
                        </table> 	
                        </div>
					<?php endif;?>
					
					<form method="POST" id="form_experience" name="contactForm" class="contactForm" action="<?=base_url('app/experience-data/').$this->session->userdata('_id')?>" enctype="multipart/form-data">
											<div class="row">
												
											<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#"><?=$this->lang->line('experience')?></label>
														<textarea name="value" class="form-control" id="value" rows="4" placeholder="<?=$this->lang->line('experience')?>"></textarea>
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Submit" class="btn btn-primary" >
														<input type="button" id="cansel_form_experience" value="Cansel" class="btn btn-danger" >
														<div class="submitting"></div>
													</div>
													
												</div>
											</div>
										</form>

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


<?php foreach($data_experience as $experience):?>
<div class="modal fade" id="staticBackdrop<?=$experience['_id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
      <h4 class="heading"><?=$this->lang->line('delete_ques')?>  <b><?=$experience['value']?></b> ? </h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><?=$this->lang->line('close')?></button>
        <a href="<?=base_url('app/experience-data/delete/').$experience['_id']?>" class="btn btn-danger"><?=$this->lang->line('delete')?> ?</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>