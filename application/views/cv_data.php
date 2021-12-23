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
					<h3 class="mb-4">Commanditaire Vennootschap </h3>
					<?= $this->session->flashdata('message'); ?>
					<?php if($total_cv == 0):?>
                        <h5><?=$this->lang->line('if_not_cv')?></h5>
						<input id="commanditaire_vennootschap" type="button" value="upload commanditaire vennootschap data ?" class="btn btn-primary mt-2 mb-5" >



						<form method="POST" id="form_cv" name="contactForm" class="contactForm mt-5 mb-2" action="<?=base_url('app/cv-data/').$this->session->userdata('_id')?>"  enctype="multipart/form-data">
						<div class="row">
												
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="title"><?=$this->lang->line('title')?></label>
														<input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                                                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
							<label class="label" for="title">Commanditaire Vennootschap</label>
														<div class="custom-file mt-3 mb-3">
														
															<input type="file" class="custom-file-input" id="cv" name="cv">
															<label class="custom-file-label" for="cv">Commanditaire Vennootschap</label>
														</div>
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Submit" class="btn btn-primary" >
														<div class="submitting"></div>
													</div>
													
												</div>
											</div>
										</form>

					<?php else:?>
						
						<input id="commanditaire_vennootschap" type="button" value="+ commanditaire vennootschap ?" class="btn btn-primary mb-3" >
						<div class="table-responsive">
						
                        <table class="table table-borderless">
                        <thead>
                            <tr class="bg-primary" style="color:#ffffff">
                            <th scope="col"><?=$this->lang->line('title')?></th>
                            <th scope="col">Commanditaire Vennootschap</th>
							<th scope="col">Primary</th>
                            <th scope="col"></th>
                            
                            </tr>
                        </thead>
                        <tbody>
						<?php foreach ($mycv as $cv ) :?>
                            <tr style="color:#000000">
                            <td><?=$cv['title']?></td>
                            <td><?=$cv['cv']?></td>
							<td><?php if($cv['cv_key'] == 'FALSE'):?>
								<a href="<?=base_url('app/cv-data/commanditaire-vennootschap/primary/').$cv['_id']?>" class="btn btn-danger btn-sm"><?=$cv['cv_key']?> </a>
							<?php else:?>
								<?=$cv['cv_key']?>
							<?php endif;?>
							
							</td>
                            <td><a href="<?=base_url('app/cv-data/commanditaire-vennootschap/').$cv['_id']?>" class="btn btn-primary"><?=$this->laang->line('view')?> ?</a></td>
                           
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                        </table> 	
                        </div>

						<form method="POST" id="form_cv" name="contactForm" class="contactForm mt-5 mb-2" action="<?=base_url('app/cv-data/').$this->session->userdata('_id')?>"  enctype="multipart/form-data">
											<div class="row">
												
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="title"><?=$this->lang->line('title')?></label>
														<input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                                                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="title">Commanditaire Vennootschap</label>
														<div class="custom-file mt-3 mb-3">
														
															<input type="file" class="custom-file-input" id="cv" name="cv">
															<label class="custom-file-label" for="cv">Commanditaire Vennootschap</label>
														</div>
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Submit" class="btn btn-primary" >
														<input type="button" id="cansel_form_create_cv" value="Cansel" class="btn btn-danger" >
														<div class="submitting"></div>
													</div>
													
												</div>
											</div>
										</form>
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



