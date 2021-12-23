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
					<h3 class="mb-4"><?=$certificate['value_certificate']?> </h3>
					<?= $this->session->flashdata('message'); ?>
                    <div class="row">
						<div class="col-md-12">
                            <iframe width="100%" height="600" id="commanditaire_vennootschap_cv" src="<?=base_url('assets/public/')?>images/certificate/<?=$certificate['certificate_file']?>"></iframe>
                        </div>
                        <div class="col-md-6">
                        <input id="update_certificate" type="button" value="update data ?" class="btn btn-primary" >
                        <input type="button" value="Delete data ?" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                        
                        </div>
                    </div>
					
                    <form method="POST" id="form_certificate_update" name="contactForm" class="contactForm mt-3" action="<?=base_url('app/certificate-data/update/').$certificate['id_certificate']?>" enctype="multipart/form-data">
											<div class="row">
											<div class="col-md-12">
								<div class="form-group">
						<label class="label" for="#"><?=$this->lang->line('certificate')?></label>
									<textarea name="certificate" class="form-control" rows="3" placeholder="Certificate"><?=$certificate['value_certificate']?></textarea>
								</div>
												</div>
							<div class="col-md-12">
                             <div class="form-group">
					<label class="label" for="certificate_file"> File</label>
							<div class="custom-file mt-3 mb-3">
														
															<input type="file" class="custom-file-input" id="certificate_file" name="certificate_file">
															<label class="custom-file-label" for="certificate_file"><?=$certificate['certificate_file']?></label>
														</div>
													</div>
													
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Submit" class="btn btn-primary" >
														<input type="button" id="cansel_form_certificate_update" value="Cansel" class="btn btn-danger" >
														<div class="submitting"></div>
													</div>
													
												</div>
                                                
											</div>
										</form>

				</div>


			</div>
    		<div class="col-md-4 p-4 p-md-5 bg-white">
                <a href="<?=base_url('app/certificate-data/').$this->session->userdata('_id')?>" class="block-20 rounded" > <img width="100%" src="<?=base_url('assets/public/images/profile/').$myaccount['photo']?>" class="card-img-top"></a>
			
				<div class="text p-4 text-center">
					<h3 class="heading"><a href="<?=base_url('app/certificate-data/').$this->session->userdata('_id')?>"><?=$myaccount['name']?></a></h3>
					<div class="meta mb-2">
						<div><a href="<?=base_url('app/certificate-data/').$this->session->userdata('_id')?>"><?=$myaccount['email']?></a></div>
									
					    <div><a href="<?=base_url('app/certificate-data/').$this->session->userdata('_id')?>" class="meta-chat"><span class="fa fa-key"></span> <?=$this->session->userdata('date_time')?></a></div>
					</div>
					<p class="mb-0"><a href="<?=base_url('app/certificate-data/').$this->session->userdata('_id')?>" class="btn btn-primary px-4 py-3"><?=$this->lang->line('back')?> ?</a>
				</p>
					
				</div>
			</div>
            
								
			</div>
        </div>
    </div>
</section>



<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
      <h4 class="heading"><?=$this->lang->line('delete_ques')?> <b><?=$certificate['value_certificate']?></b>, File<b><?=$certificate['certificate_file']?></b> </h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><?=$this->lang->line('close')?></button>
        <a href="<?=base_url('app/certificate-data/delete/').$certificate['id_certificate']?>" class="btn btn-danger"><?=$this->lang->line('delete')?> ?</a>
      </div>
    </div>
  </div>
</div>

