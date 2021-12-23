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
            <div class="col-md-12 wrap-about ftco-animate">
				<div class="contact-wrap w-100 p-md-5 p-4">
                    <img width="100%" src="<?=base_url('assets/public/images/aktifitas/').$actifity['image']?>" class="card-img-top">
                        <div class="text p-4 text-center">
                            <h1 class="heading"><?=$actifity['title']?></h1>
                            <h4 class="heading"><?=$this->lang->line('published')?> <?=$actifity['date_upload']?></h4>
                        </div>
                        <div>
                        <?=$actifity['desc_activity']?>
                        </div>
			    </div>						
			</div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
        <?php foreach($actifity_data as $actifity):?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?=base_url('activity-information/').$actifity['_id']?>" class="block-20 rounded" style="background-image: url('<?=base_url('assets/public/images/aktifitas/').$actifity['image']?>');">
              </a>
              <div class="text p-4 text-center">
                <h2 class="heading"><a href="<?=base_url('activity-information/').$actifity['_id']?>"><?=$actifity['title']?></a></h2>
                
                <p><?=$actifity['date_upload']?></p>
              </div>
            </div>
          </div>
        <?php endforeach;?>
        </div>
      </div>
    </section>