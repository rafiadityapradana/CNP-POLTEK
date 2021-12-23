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
    <div class="container-fluid px-md-0">



        <?php if($job_seekres):?>
        <div class="row no-gutters">

            <?php foreach($job_seekres as $seekres):?>
            <div class="col-lg-6">
                <div class="room-wrap d-md-flex">
                    <a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>" class="img"
                        style="height:550px; background-image: url('<?=base_url('assets/public/images/profile/').$seekres['photo']?>'); "></a>
                    <div class="half left-arrow d-flex align-items-center">
                        <div class="text p-4 p-xl-5 text-center">

                            <h3 class="mb-3"><a
                                    href="<?=base_url('job-seekers/data/').$seekres['user_id']?>"><?=$seekres['name']?></a>
                            </h3>
                            <ul class="list-accomodation">
                                <li><?=$seekres['major']?></li>
                            </ul>
                            <p class="pt-1"><a href="<?=base_url('job-seekers/data/').$seekres['user_id']?>"
                                    class="btn-custom px-3 py-2"><?=$this->lang->line('view_job_seekers')?>
                                    <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>


        </div>
        <?php else:?>
        <div class="row no-gutters justify-content-center">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2><?=$this->lang->line('not_data')?></h2>

            </div>
        </div>
        <?php endif;?>



    </div>
</section>