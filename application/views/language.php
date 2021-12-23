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
          <?php foreach($language as $lang):?>
          <div class="col-md-4 d-flex ftco-animate">
            <a href="#" action_url="<?=base_url()?>" class="btn btn-primary btn-block mt-4 set_lang" data_lang ="<?=$lang['id_language']?>"><?=$lang['language']?></a>
          </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=KPueOlyI"></script>
