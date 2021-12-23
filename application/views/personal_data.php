<section class="ftco-intro" style="background-image: url(<?=base_url('assets/public/')?>images/bg3.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 text-center">
			<h2><?=$this->lang->line('ready')?></h2>
				<p class="mb-4"><?=$this->lang->line('ready_sub')?></p>
				<?=$total_personal_data?>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
    	<div class="row no-gutters ftco-animate">
    		
            <div class="col-md-8 wrap-about ftco-animate">
				<div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4"><?=$this->lang->line('personal_data')?> </h3>
                        <?= $this->session->flashdata('message'); ?>

                        <?php if($total_personal_data == 0):?>
                            <h5><?=$this->lang->line('personal_data_info')?> </h5>
                            <input id="completed_personal" type="button" value="completed personal data ?" class="btn btn-primary mt-2 mb-5" >
                           

                          
										<form method="POST" id="form_personal" name="contactForm" class="contactForm mt-5 mb-2" action="<?=base_url('app/personal-data/').$this->session->userdata('_id')?>">
											<div class="row">
												
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="tinggi"><?=$this->lang->line('height')?> </label>
														<input type="text" class="form-control" name="tinggi" id="tinggi" placeholder="<?=$this->lang->line('height')?>  /cm" required>
                                                        <?= form_error('tinggi', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="berat"><?=$this->lang->line('weight')?> </label>
														<input type="berat" class="form-control" name="berat" id="berat" placeholder="<?=$this->lang->line('weight')?>  /kg" required>
                                                        <?= form_error('berat', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="negara"><?=$this->lang->line('country')?></label>
														<select name="negara" id="negara" class="form-control" required>
															<option selected disable>-</option>
															<option>WNI</option>
															<option>WNA</option>
														</select>
                                                        <?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="golonagn_darah"><?=$this->lang->line('blood_group')?></label>
														<select name="golonagn_darah" id="golonagn_darah" class="form-control" required>
                                                            <option selected></option>
															<option>A</option>
                                                            <option>B</option>
															<option>AB</option>
                                                            <option>O</option>
														</select>
                                                        <?= form_error('golonagn_darah', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
                                                <div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="sim"><?=$this->lang->line('vehicle_sim')?></label>
														<select name="sim" id="sim" class="form-control" required>
															<option>-</option>
															<option>SIM B I</option>
                                                            <option>SIM B II</option>
															<option>SIM C</option>
                                                            <option>SIM D</option>
														</select>
                                                        <?= form_error('sim', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
                                                
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="fisik"><?=$this->lang->line('physical')?></label>
														<select name="fisik" class="form-control" required>
															<option selected disable>-</option>
															<option>Normal</option>
															<option>Abnormal</option>
															
														</select>
                                                        <?= form_error('fisik', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="note"><?=$this->lang->line('note')?></label>
														<textarea name="note" class="form-control"  rows="2" placeholder="<?=$this->lang->line('note')?>"></textarea>
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
                        <div class="table-responsive">
                        <table class="table table-borderless">
                        <thead>
                            <tr class="bg-primary" style="color:#ffffff">
                            <th scope="col"><?=$this->lang->line('height')?></th>
                            <th scope="col"><?=$this->lang->line('weight')?></th>
                            <th scope="col"><?=$this->lang->line('country')?></th>
                            <th scope="col"><?=$this->lang->line('vehicle_sim')?></th>
							<th scope="col"><?=$this->lang->line('blood_group')?></th>
                            <th scope="col"><?=$this->lang->line('physical')?></th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:#000000">
                            <td><?=$personal_data['tinggi']?></td>
                            <td><?=$personal_data['berat']?></td>
                            <td><?=$personal_data['negara']?></td>
                            <td><?=$personal_data['sim']?></td>
						    <td><?=$personal_data['golongan_darah']?></td>
                            <td><?=$personal_data['fisik']?></td>
                            
                            </tr>
                            <?php if($personal_data['catatan'] !== null):?>
                            <tr>
                            <th colspan="6" scope="row" class="bg-primary" style="color:#ffffff"><?=$this->lang->line('note')?></th>
                            </tr>
                            <tr>
                            
                            <td colspan="6" style="color:#000000"><?=$personal_data['catatan']?></td>
                            </tr>
                            
                            <?php endif;?>
                            
                        </tbody>
                        </table> 	
                        </div>
                        <form method="POST" id="form_personal_update" name="contactForm" class="contactForm mt-5 mb-2" action="<?=base_url('app/personal-data/').$this->session->userdata('_id')?>">
											<div class="row">
												
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="tinggi"><?=$this->lang->line('height')?></label>
														<input type="text" class="form-control" name="tinggi" id="tinggi" placeholder="<?=$this->lang->line('height')?> /cm" value="<?=$personal_data['tinggi']?>" required>
                                                        <?= form_error('tinggi', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="berat"><?=$this->lang->line('weight')?></label>
														<input type="berat" class="form-control" name="berat" id="berat" placeholder="<?=$this->lang->line('weight')?> /kg" required value="<?=$personal_data['berat']?>">
                                                        <?= form_error('berat', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="negara"><?=$this->lang->line('country')?></label>
														<select name="negara" id="negara" class="form-control" required>
															<option selected ><?=$personal_data['negara']?></option>
															<option>WNI</option>
															<option>WNA</option>
														</select>
                                                        <?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												
                                                <div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="sim"><?=$this->lang->line('vehicle_sim')?></label>
														<select name="sim" id="sim" class="form-control" required>
															<option selected><?=$personal_data['sim']?></option>
															<option>SIM B I</option>
                                                            <option>SIM B II</option>
															<option>SIM C</option>
                                                            <option>SIM D</option>
														</select>
                                                        <?= form_error('sim', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="golonagn_darah"><?=$this->lang->line('blood_group')?></label>
														<select name="golonagn_darah" id="golonagn_darah" class="form-control" required>
															<option selected><?=$personal_data['golongan_darah']?></option>
															<option>A</option>
                                                            <option>B</option>
															<option>AB</option>
                                                            <option>O</option>
														</select>
                                                        <?= form_error('golonagn_darah	', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
                                                
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="fisik"><?=$this->lang->line('physical')?></label>
														<select name="fisik" class="form-control" required>
															<option selected><?=$personal_data['fisik']?></option>
															<option>Normal</option>
															<option>Abnormal</option>
															
														</select>
                                                        <?= form_error('fisik', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="note"><?=$this->lang->line('note')?></label>
														<textarea name="note" class="form-control"  rows="2" placeholder="<?=$this->lang->line('note')?>"><?=$personal_data['catatan']?></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Submit" class="btn btn-primary" >
                                                        <input type="button" id="cansel_personal_update" value="Cansel" class="btn btn-danger" >
														<div class="submitting"></div>
													</div>
													
												</div>
											</div>
										</form>
                        <input id="update_personal" type="button" value="update <?=$this->lang->line('personal_data')?> ?" class="btn btn-success" >

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
					<p class="mb-0"><a href="<?=base_url('app/account')?>" class="btn btn-primary px-4 py-3">Back To Menu ?</a>
				</p>
					
				</div>
			</div>			
			</div>
        </div>
    </div>
</section>


