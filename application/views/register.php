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

                <form action="<?=base_url('register')?>" class="appointment-form" method="POST" id="form-pendaftaran">


                    <h3 class="mb-3"><?=$this->lang->line('register')?></h3>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nim" class="form-control" placeholder="NIM"
                                    value="<?= set_value('nim'); ?>">
                                <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control"
                                    placeholder="<?=$this->lang->line('full_name')?>" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"
                                    placeholder="<?=$this->lang->line('email')?>" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control"
                                    placeholder="<?=$this->lang->line('phone')?>" value="<?= set_value('phone'); ?>">
                                <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="tempat_tanggal_lahir" class="form-control"
                                    placeholder="<?=$this->lang->line('date_of_birth')?>"
                                    value="<?= set_value('tempat_tanggal_lahir'); ?>">
                                <?= form_error('tempat_tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="jenis_kelamin" id="" class="form-control">
                                            <option disabled selected><?=$this->lang->line('gender')?></option>
                                            <option value="Male"><?=$this->lang->line('Male')?></option>
                                            <option value="Female"><?=$this->lang->line('Female')?> </option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="jurusan" id="" class="form-control">
                                            <option disabled selected> <?=$this->lang->line('majors')?></option>
                                            <?php foreach($majors_data as $major):?>
                                            <option value="<?=$major['id_major']?>">
                                                <?=$this->lang->line($major['code'])?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control"
                                    placeholder="<?=$this->lang->line('password')?>">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" name="confirm_password" class="form-control"
                                    placeholder="<?=$this->lang->line('con_pass')?>">
                                <?= form_error('confirm_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="<?=$this->lang->line('register_now')?>"
                                    class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
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
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                    is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the
                    all-powerful Pointing has no control about the blind texts it is an almost unorthographic life
                    One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
                    far World of Grammar.</p>
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