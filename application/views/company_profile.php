<!-- https://mail.google.com/mail/u/0/#inbox?compose=new -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?=base_url('assets/public/images/sampul/').$company['company_sampul']?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread"><?=$company['company_name']?></h1>
            <p class="mb-4"><?=$this->lang->line('sub_name')?> <?=$company['company_name']?> <?=$this->lang->line('sub_com')?></p>


          </div>
        </div>
      </div>
    </section>
   
   	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">

                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									
										<h3><?=$this->lang->line('get_in_touch')?></h3>
										<p class="mb-4"><?=$this->lang->line('sub_get_in_touch')?></p>
									
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span><?=$this->lang->line('address')?>:</span> <?=$company['company_address']?>6</p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span><?=$this->lang->line('phone')?>:</span> <a href="tel://<?=$company['company_phone']?>"><?=$company['company_phone']?></a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span><?=$this->lang->line('email')?>:</span> <a href="mailto:<?=$company['company_mail']?>"><?=$company['company_mail']?></a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span><?=$this->lang->line('website')?></span> <a target="__blank" href="<?=$company['company_site']?>"><?=$company['company_site']?></a></p>
						          </div>
					          </div>
				          </div>
                          </div>

								<div class="col-lg-8 col-md-7 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4"><?=$company['company_name']?></h3>
										
                                        <?=$company['company_desc']?>
                                        <div class="row no-gutters">
                                        
                                        <?php foreach($company_gallery as $gallery):?>
                                        <div class="col-md-6 bg-white">
			                                <img data-target="#image<?=$gallery['_id']?>" data-toggle="modal" style="margin-left:15px; margin-right:15px;margin-buttom:15px;margin-top:15px" width="100%" src="<?=base_url('assets/public/images/gallery/').$gallery['image']?>" alt="">
                                        </div>
                                        <?php  endforeach;?>
                                        </div>

					      		    </div>
                                     
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>
<?php foreach($company_gallery as $gallery):?>
<div class="modal fade" id="image<?=$gallery['_id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      
      <div class="modal-body">
      <img width="100%" src="<?=base_url('assets/public/images/gallery/').$gallery['image']?>" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><?=$this->lang->line('close')?></button>
        
      </div>
    </div>
  </div>
</div>
<?php  endforeach;?>