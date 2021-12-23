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
		<div class="container-fluid px-md-0">
			<div class="row no-gutters justify-content-center">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2><?=$this->lang->line('seekers')?></h2>
				
				</div>
			</div>

			<div class="row no-gutters justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					
					<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#general" role="tab" aria-controls="pills-home" aria-selected="true" style="background-color: transparent"><h5><?=$this->lang->line('general')?></h5></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#mi" role="tab" aria-controls="pills-profile" aria-selected="false" style="background-color: transparent"><h5><?=$this->lang->line('MI')?></h5></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#tm" role="tab" aria-controls="pills-profile" aria-selected="false" style="background-color: transparent"><h5><?=$this->lang->line('TM')?></h5></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#te" role="tab" aria-controls="pills-contact" aria-selected="false" style="background-color: transparent"><h5><?=$this->lang->line('TE')?></h5></a>
						</li>
					</ul>
				</div>
			</div>



			
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="pills-home-tab">
  <div class="row no-gutters">
            <?php foreach($job_seekres as $seekres):?>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="img" style="height:550px; background-image: url('<?=base_url('assets/public/images/profile/').$seekres['photo']?>'); "></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
                            
								<h3 class="mb-3"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>"><?=$seekres['name']?></a></h3>
								<ul class="list-accomodation">
									<li><?=$seekres['major']?></li>
								</ul>
								<p class="pt-1"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="btn-custom px-3 py-2"><?=$this->lang->line('view_job_seekers')?> <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
            <?php endforeach;?>
			</div>
  </div>
  <div class="tab-pane fade" id="mi" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="row no-gutters">
            <?php foreach($code_mi as $seekres):?>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="img" style="height:550px; background-image: url('<?=base_url('assets/public/images/profile/').$seekres['photo']?>'); "></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
                            
								<h3 class="mb-3"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>"><?=$seekres['name']?></a></h3>
								<ul class="list-accomodation">
									<li><?=$seekres['major']?></li>
								</ul>
								<p class="pt-1"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="btn-custom px-3 py-2"><?=$this->lang->line('view_job_seekers')?> <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
            <?php endforeach;?>
			</div>
  </div>
  <div class="tab-pane fade" id="tm" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="row no-gutters">
            <?php foreach($code_tm as $seekres):?>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="img" style="height:550px; background-image: url('<?=base_url('assets/public/images/profile/').$seekres['photo']?>'); "></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
                            
								<h3 class="mb-3"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>"><?=$seekres['name']?></a></h3>
								<ul class="list-accomodation">
									<li><?=$seekres['major']?></li>
								</ul>
								<p class="pt-1"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="btn-custom px-3 py-2"><?=$this->lang->line('view_job_seekers')?> <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
            <?php endforeach;?>
			</div>
  </div>
  <div class="tab-pane fade" id="te" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="row no-gutters">
            <?php foreach($code_te as $seekres):?>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="img" style="height:550px; background-image: url('<?=base_url('assets/public/images/profile/').$seekres['photo']?>'); "></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
                            
								<h3 class="mb-3"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>"><?=$seekres['name']?></a></h3>
								<ul class="list-accomodation">
									<li><?=$seekres['major']?></li>
								</ul>
								<p class="pt-1"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="btn-custom px-3 py-2"><?=$this->lang->line('view_job_seekers')?> <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
            <?php endforeach;?>
			</div>
  </div>
</div>



			
		</div>
	</section>