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

    <div class="row no-gutters">
        <?php if($job_vacancy):?>
        <?php foreach($job_vacancy as $vacancy):?>
        <div class="col-lg-6">
            <div class="room-wrap d-md-flex">
                <a href="<?=base_url('job-vacancy/').$vacancy['_id']?>" class="img"
                    style="height:550px; background-image: url('<?=base_url('assets/public/images/loker/').$vacancy['poster']?>'); "></a>
                <div class="half left-arrow d-flex align-items-center">
                    <div class="text p-4 p-xl-5 text-center">

                        <h3 class="mb-3"><a
                                href="<?=base_url('job-vacancy/').$vacancy['_id']?>"><?=$vacancy['title']?></a>
                        </h3>
                        <ul class="list-accomodation">
                            <li><?=$this->lang->line('close')?> <?=$vacancy['close_in']?></li>
                        </ul>
                        <p class="pt-1"><a href="<?=base_url('job-vacancy/').$vacancy['_id']?>"
                                class="btn-custom px-3 py-2"><?=$this->lang->line('view')?>
                                <?=$this->lang->line('job')?>
                                <span class="icon-long-arrow-right"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <?php else:?>
        <div class="col-md-12 heading-section text-center ftco-animate">
            <h2><?=$this->lang->line('not_data')?></h2>

        </div>
        <?php endif;?>
    </div>


</section>