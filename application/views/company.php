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
        <div class="row d-flex">
        <?php foreach($company as $com):?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?=base_url('company-profile/').$com['id_company']?>" class="block-20 rounded" style="background-image: url('<?=base_url('assets/public/images/sampul/').$com['company_sampul']?>');">
              </a>
              <div class="text p-4 text-center">
                <h2 class="heading"><a href="<?=base_url('company-profile/').$com['id_company']?>"><?=$com['company_name']?></a></h2>
                
                <p><?=$com['company_address']?></p>
              </div>
            </div>
          </div>
        <?php endforeach;?>
        </div>
      </div>
    </section>