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
            <div class=" col-md-4 p-4 p-md-5 bg-white">
                <img width="100%" src="<?=base_url('assets/public/images/profile/').$seekres['photo']?>" class="card-img-top">
                <div class="text p-4 text-center">
                    <h3 class="heading"> <?=$seekres['name']?></h3>
                    <a href="<?=base_url('job-seekers')?>" class="btn btn-primary"><?=$this->lang->line('back')?> ?</a>
                </div>
               
            </div>
            <div class="col-md-8 wrap-about ftco-animate">
				<div class="contact-wrap w-100 p-md-5 p-4">
					<h3 class="mb-4"><?=$this->lang->line('data_finser')?> </h3>
				
					<div class="table-responsive">
                        <table class="table table-borderless">
                        <thead>
                            <tr class="bg-primary" style="color:#ffffff">
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
                            <tr class="bg-primary" style="color:#ffffff">
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
                            <th colspan="5" scope="row" class="bg-primary" style="color:#ffffff"><?=$this->lang->line('note')?></th>
                            </tr>
                            <tr>
                            
                            <td colspan="5" style="color:#000000"><?=$seekres['catatan']?></td>
                            </tr>
                            
                            <?php endif;?>
                            
                        </tbody>
                        </table> 	
                        </div>
                            <hr>
                        <form method="POST" id="form-account" name="contactForm" class="contactForm">
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
                                                            <a href="<?=base_url('job-seekers/data/certificate/').$certificate['id_certificate']?>"><li><h5><?=$certificate['value_certificate']?></h5></li></a>
                                                        <?php endforeach;?>
                                                        </ul>
													</div>
												</div>
                                                
												
											</div>
										</form>
                                        
				</div>
			</div>
        </div>
    </div>
</section>


