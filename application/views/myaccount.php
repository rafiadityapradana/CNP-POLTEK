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
    		<div class="col-md-4 p-4 p-md-5 bg-white">
                <a href="<?=base_url('app/account')?>" class="block-20 rounded"><img width="100%" src="<?=base_url('assets/public/images/profile/').$myaccount['photo']?>" class="card-img-top"></a>
				<div class="text p-4 text-center" id="lading_profile">
					<div class="spinner-grow bg-primary" style="width: 6rem; height: 6rem;" role="status"></div>
				</div>
				<div class="text p-4 text-center" id="profile_info">
					<h3 class="heading"><a href="<?=base_url('app/account')?>"><?=$myaccount['name']?></a></h3>
					<div class="meta mb-2">
						<div><a href="<?=base_url('app/account')?>"><?=$myaccount['email']?></a></div>
									
					    <div><a href="<?=base_url('app/account')?>" class="meta-chat"><span class="fa fa-key"></span> <?=$this->session->userdata('date_time')?></a></div>
					</div>
					<p class="mb-0"><a href="<?=base_url('app/account')?>" class="btn btn-primary px-4 py-3">Back To Menu ?</a>
				</p>
					
				</div>
			</div>
            <div class="col-md-8 wrap-about ftco-animate">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4"><?=$this->lang->line('my_account_info')?> </h3>
					      		<div id="form-message_false" class="mb-4 text-danger"></div>
								  <div id="form-message_success" class="mb-4 text-success"></div>
								  <?= $this->session->flashdata('message'); ?>
										<form method="POST" id="form-account" name="contactForm" class="contactForm" action="<?=base_url('app/account-update/').$this->session->userdata('_id')?>">
											<div class="row">
												
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name"> <?=$this->lang->line('full_name')?></label>
														<input type="text" class="form-control" name="name" id="name" placeholder="<?=$this->lang->line('full_name')?>"  value="<?=$myaccount['name']?>" required>
                                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email"><?=$this->lang->line('email_address')?></label>
														<input type="email" class="form-control" name="email" id="email" placeholder="<?=$this->lang->line('email_address')?>" value="<?=$myaccount['email']?>" required>
                                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="phone"><?=$this->lang->line('phone')?></label>
														<input type="text" class="form-control" name="phone" id="phone" placeholder="<?=$this->lang->line('phone')?>" value="<?=$myaccount['phone']?>" required>
                                                        <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="tempat_tanggal_lahir"> <?=$this->lang->line('date_of_birth')?></label>
														<input type="text" class="form-control" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" placeholder="<?=$this->lang->line('date_of_birth')?>" value="<?=$myaccount['tempat_tanggal_lahir']?>" required>
                                                        <?= form_error('tempat_tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="jenis_kelamin"><?=$this->lang->line('gender')?></label>
														<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
															<option selected><?=$myaccount['jenis_kelamin']?></option>
															<option value="Male"><?=$this->lang->line('male')?></option>
															<option value='Female'><?=$this->lang->line('female')?></option>
														</select>
                                                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="status_pernikahan"><?=$this->lang->line('marital')?></label>
														<select name="status_pernikahan" id="status_pernikahan" class="form-control" required>
															<option selected><?=$myaccount['status_pernikahan']?></option>
															<option value="Single"><?=$this->lang->line('single')?></option>
															<option value="Married"><?=$this->lang->line('married')?></option>
															<option value="Divorced"><?=$this->lang->line('divorced')?></option>
															<option value="Divorced Died"><?=$this->lang->line('dvorced_died')?></option>

														</select>
                                                        <?= form_error('status_pernikahan', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#"><?=$this->lang->line('address')?></label>
														<textarea name="alamat" class="form-control" id="alamat" rows="2" placeholder="<?=$this->lang->line('address')?>"><?=$myaccount['alamat']?></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" id="btn-account" value="Submit" class="btn btn-primary" >
														<input type="button" id="btn-photo" value="Update Photo Profile ?" class="btn btn-primary" >
														<input type="button" id="btn_pass" value="Update Password ?" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample">
														<div class="submitting"></div>
													</div>
													
												</div>
											</div>
										</form>
										<form method="POST" class="contactForm" enctype="multipart/form-data" id="form-photo" action="<?=base_url('app/account-photo/').$this->session->userdata('_id')?>">
										<img id="perimage-profile" src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>" width=" 100%">
										
										<div class="custom-file mt-3 mb-3">
											<input type="file" class="custom-file-input" id="image" name="image">
											<label class="custom-file-label" for="image">Choose file</label>
										</div>
											<input type="submit" value="Submit" class="btn btn-primary" >
											<input type="button" value="Cansel" id="btn-cansel" class="btn btn-danger" >
										</form>

										<div class="collapse" id="collapseExample">

											<div id="form-password_false" class="mb-4 text-danger"></div>
								 		 <div id="form-password_success" class="mb-4 text-success"></div>
										  	<div class="progress">
												<div class="progress-bar bg-primary" id="loading_proesess" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										
											<form method="POST" class="contactForm mt-5" enctype="multipart/form-data" id="form-passoword" action="<?=base_url('app/account-password/').$this->session->userdata('_id')?>">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#"><?=$this->lang->line('old_pass')?></label>
														<input type="password" class="form-control"  name="old_password" placeholder="<?=$this->lang->line('old_pass')?>"  required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="#"><?=$this->lang->line('new_pass')?></label>
														<input type="password" class="form-control" name="new_password" placeholder="<?=$this->lang->line('new_pass')?>"  required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="#"><?=$this->lang->line('con_pass')?></label>
														<input type="password" class="form-control"  name="confirm_password" placeholder="<?=$this->lang->line('con_pass')?>"  required>
													</div>
												</div>
												<input type="submit" value="Submit" class="btn btn-primary" id="btn_pas">
											</div>
											</form>
										</div>
									</div>
								</div>
								
								</div>
        </div>
    </div>
</section>





<script>
	document.getElementById('image').addEventListener("change", function () {
		const file = this.files[0];
		if (file) {
			const render = new FileReader();
			render.addEventListener("load", function () {
				document.getElementById('perimage-profile').src = this.result
			})
			render.readAsDataURL(file)
		}
	})
</script>


