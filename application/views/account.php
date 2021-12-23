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
    	<div class="row no-gutters">
			
    		<div class="col-md-4 p-4 p-md-5 bg-white">
			<a href="<?=base_url('app/account')?>" class="block-20 rounded"><img width="100%" src="<?=base_url('assets/public/images/profile/').$myaccount['photo']?>" class="card-img-top"></a>
				<div class="text p-4 text-center">
					<h3 class="heading"><a href="<?=base_url('app/account')?>"><?=$myaccount['name']?></a></h3>
					<div class="meta mb-2">
						<div><a href="<?=base_url('app/account')?>"><?=$myaccount['email']?></a></div>
									
					    <div><a href="<?=base_url('app/account')?>" class="meta-chat"><span class="fa fa-key"></span> <?=$this->session->userdata('date_time')?></a></div>
					</div>
					<p class="mb-0"><a href="<?=base_url('app/account/').$this->session->userdata('_id')?>" class="btn btn-primary px-4 py-3"><?=$this->lang->line('update')?> <?=$this->lang->line('coount_info')?> ?</a></p>
					<p class="mt-2"><a href="<?=base_url('app/logout')?>" class="btn btn-danger"><?=$this->lang->line('logout')?> ?</a></p>
				</div>
			</div>
            <div class="col-md-8 wrap-about ftco-animate">
					<div class="heading-section">
						<div class="pl-md-5">
							<h2 class="mb-2">Menu <span class="flaticon-workout"></span></h2>
						</div>
					</div>
					<div class="pl-md-5">
						<p><?=$this->lang->line('hi')?> <?=$myaccount['name']?> <?=$this->lang->line('hi_name')?></p>
						<div class="row">


							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-workout"></span>
								</div>
								<div class="media-body pl-3">
                                	<a href="<?=base_url('app/personal-data/').$this->session->userdata('_id')?>" class="rounded">
										<h3 class="heading"><?=$this->lang->line('personal_data')?></h3>
										<p><?=$this->lang->line('sub_personal_data')?>
										</p>
									</a>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-workout"></span>
								</div>
								<div class="media-body pl-3">
                                	<a href="<?=base_url('app/cv-data/').$this->session->userdata('_id')?>" class="rounded">
										<h3 class="heading"><?=$this->lang->line('commanditaire')?></h3>
										<p><?=$this->lang->line('sub_commanditaire')?>
										</p>
									</a>
								</div>
							</div>
							
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-workout"></span>
								</div>
								<div class="media-body pl-3">
                                	<a href="<?=base_url('app/experience-data/').$this->session->userdata('_id')?>" class="rounded">
										<h3 class="heading"><?=$this->lang->line('experience')?></h3>
										<p><?=$this->lang->line('sub_experience')?>
										</p>
									</a>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-workout"></span>
								</div>
								<div class="media-body pl-3">
                                	<a href="<?=base_url('app/job-application-data/').$this->session->userdata('_id')?>" class="rounded">
										<h3 class="heading"><?=$this->lang->line('job_app')?></h3>
										<p><?=$this->lang->line('sub_job_app')?>
										</p>
									</a>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-workout"></span>
								</div>
								<div class="media-body pl-3">
                                	<a href="<?=base_url('app/ability-data/').$this->session->userdata('_id')?>" class="rounded">
										<h3 class="heading"><?=$this->lang->line('ability')?></h3>
										<p><?=$this->lang->line('sub_ability')?>
										</p>
									</a>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-workout"></span>
								</div>
								<div class="media-body pl-3">
                                	<a href="<?=base_url('app/certificate-data/').$this->session->userdata('_id')?>" class="rounded">
										<h3 class="heading"><?=$this->lang->line('certificate')?></h3>
										<p><?=$this->lang->line('sub_certificate')?>
										</p>
									</a>
								</div>
							</div>
						</div>
				</div>
			</div>
        </div>
    </div>
</section>



