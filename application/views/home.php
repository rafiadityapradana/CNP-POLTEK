<div class="hero-wrap js-fullheight" style="background-image: url('<?=base_url('assets/public/')?>images/bg3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <div>
                    <img width="150" class="mb-4" src="<?=base_url('assets/public/images/logo.png')?>" alt="">
                </div>


                <h1 class="mb-4"><?=$this->lang->line('welcome_message')?> </h1>


                <p>
                    <?php if(!$this->session->userdata('_id')):?>
                    <a href="<?=base_url('')?>" class="btn btn-primary"
                        id="login-button"><?=$this->lang->line('login')?></a>
                    <a href="<?=base_url('register')?>" class="btn btn-white"
                        id="login-register"><?=$this->lang->line('register')?></a>
                    <?php endif;?>
                </p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">

        <div class="row justify-content-end">
            <div class="col-lg-4">
                <?php if($this->session->userdata('_id')):?>
                <div class="appointment-form">
                    <a href="<?=base_url('app/account')?>" class="block-20 rounded"><img width="100%"
                            src="<?=base_url('assets/public/images/profile/').$myaccount['photo']?>"
                            class="card-img-top"></a>
                    <div class="text p-4 text-center">
                        <h3 class="heading"><a href="<?=base_url('app/account')?>"><?=$myaccount['name']?></a>
                        </h3>
                        <div class="meta mb-2">
                            <div><a href="<?=base_url('app/account')?>"><?=$myaccount['email']?></a></div>

                            <div><a href="<?=base_url('app/account')?>" class="meta-chat"><span
                                        class="fa fa-key"></span> <?=$this->session->userdata('date_time')?></a></div>
                        </div>
                        <p class="mb-0"><a href="<?=base_url('app/account')?>" class="btn btn-primary px-4 py-3">Go To
                                Profile ?</a>
                        </p>
                        <p class="mt-2"><a href="<?=base_url('app/logout')?>"
                                class="btn btn-danger"><?=$this->lang->line('logout')?> ?</a></p>
                    </div>
                </div>
                <?php else:?>
                <form action="<?=base_url('')?>" class="appointment-form" id="form-login" method="POST">
                    <h3 class="mb-3"><?=$this->lang->line('login')?></h3>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email"
                                    value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control"
                                    placeholder="<?=$this->lang->line('password')?>" name="password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="<?=$this->lang->line('login_now')?>"
                                    class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">

                <h2><?=$this->lang->line('activity')?></h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach($actifity_data as $actifity):?>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="<?=base_url('activity-information/').$actifity['_id']?>" class="block-20 rounded"
                        style="background-image: url('<?=base_url('assets/public/images/aktifitas/').$actifity['image']?>');">
                    </a>
                    <div class="text p-4 text-center">
                        <h2 class="heading"><a
                                href="<?=base_url('activity-information/').$actifity['_id']?>"><?=$actifity['title']?></a>
                        </h2>

                        <p><?=$actifity['date_upload']?></p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>






<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 wrap-about">

                <h2><?=$this->lang->line('ready_info')?></h2>
                <p><?=$this->lang->line('ready_info_sub')?></p>
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section">
                    <div class="pl-md-5">
                        <h2 class="mb-2"><?=$this->lang->line('category')?></h2>
                    </div>
                </div>
                <div class="pl-md-5">
                    <p><?=$this->lang->line('hi')?> <?=$this->session->userdata('name')?>
                        <?=$this->lang->line('hi_name')?></p>
                    <div class="row">

                        <?php foreach($majors_data as $major):?>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-workout"></span>
                            </div>
                            <div class="media-body pl-3">
                                <a href="<?=base_url('job-seekers/major/').$major['id_major']?>" class="rounded">
                                    <h4 class="heading"><?=$this->lang->line($major['code'])?></h4>
                                    <p><?=$this->lang->line('sub_major')?> <?=$this->lang->line($major['code'])?>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <?php endforeach;?>

                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-workout"></span>
                            </div>
                            <div class="media-body pl-3">
                                <a href="<?=base_url('job-seekers')?>" class="rounded">
                                    <h4 class="heading"><?=$this->lang->line('general')?></h4>
                                    <p><?=$this->lang->line('sub_general')?>
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

<section class="ftco-intro" style="background-image: url(<?=base_url('assets/public/')?>images/bg3.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 text-center">

                <h2><?=$this->lang->line('ready')?></h2>
                <p class="mb-4"><?=$this->lang->line('ready_sub')?></p>
                <?php if(!$this->session->userdata('_id')):?>
                <p class="mb-0"><a href="<?=base_url('')?>"
                        class="btn btn-primary px-4 py-3"><?=$this->lang->line('login')?></a>
                    <a href="<?=base_url('register')?>"
                        class="btn btn-white px-4 py-3"><?=$this->lang->line('register')?></a>
                </p>
                <?php endif;?>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2><?=$this->lang->line('job')?></h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach($job_vacancy as $vacancy):?>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="<?=base_url('job-vacancy/').$vacancy['_id']?>" class="block-20 rounded"
                        style="background-image: url('<?=base_url('assets/public/images/loker/').$vacancy['poster']?>');">
                    </a>
                    <div class="text p-4 text-center">
                        <h3 class="heading"><a
                                href="<?=base_url('job-vacancy/').$vacancy['_id']?>"><?=$vacancy['title']?></a></h3>
                        <div class="meta mb-2">
                            <div><a
                                    href="<?=base_url('job-vacancy/').$vacancy['_id']?>"><?=$vacancy['date_create']?></a>
                            </div>
                            <div><a
                                    href="<?=base_url('company-profile/').$vacancy['company_id']?>"><?=$vacancy['company_name']?></a>
                            </div>

                        </div>
                        <p> <?=$vacancy['note']?></p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>