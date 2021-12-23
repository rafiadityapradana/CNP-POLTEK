<section class="ftco-intro" style="background-image: url(<?=base_url('assets/public/')?>images/bg3.jpg);"
    data-stellar-background-ratio="0.5">
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
                    <div class="text p-4 text-center">
                        <h2 class="heading"><?=$certificate_data['value_certificate']?></h2>
                        <iframe width="100%" height="500" id="commanditaire_vennootschap_cv"
                            src="<?=base_url('assets/public/')?>images/certificate/<?=$certificate_data['certificate_file']?>"></iframe>
                        <a href="<?=base_url('job-seekers/data/').$certificate_data['user_id']?>"
                            class="btn btn-primary"><?=$this->lang->line('back')?> <?=$certificate_data['name']?>?</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>