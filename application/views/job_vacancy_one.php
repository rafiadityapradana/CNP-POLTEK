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

        <?php if($job_vacancy_one != null):?>
        <div class="row no-gutters ftco-animate">
            <div class="col-md-7 wrap-about ftco-animate ">
                <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4"><?=$this->lang->line('send_job_app')?> </h3>

                    <?= $this->session->flashdata('message'); ?>
                    <?php if($this->session->userdata('_id')):?>
                    <h5><?=$this->lang->line('sub_send_job_app')?></h5>
                    <div id="form-message_false" class="mb-4 text-danger"></div>
                    <div id="form-message_success" class="mb-4 text-success"></div>
                    <div class="text p-4 text-center" id="loading_send_job_appliacation">
                        <div class="spinner-grow bg-primary" style="width: 8rem; height: 8rem;" role="status"></div>



                    </div>
                    <?php if($myaccount['role_id'] == 3):?>

                    <form method="POST" id="form_send_job_application" name="contactForm" class="contactForm mt-5 mb-2"
                        action="<?=base_url('job-vacancy/send/job-application/').$job_vacancy_one['_id']?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="cv_send"> Your Commanditaire Vennootschap</label>
                                    <select name="cv_send" id="cv_send" class="form-control" required>
                                        <option selected disable></option>
                                        <?php foreach($my_cv as $cv):?>
                                        <option value="<?=$cv['_id']?>"><?=$cv['cv']?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <?= form_error('cv_send', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="cv_send"> Purpose of sending applications</label>
                                    <input type="text" name="tujuan" id="tujuan" class="form-control" required
                                        value="<?=$job_vacancy_one['delivery_destination']?>" readonly>

                                    <?= form_error('tujuan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <div class="submitting"></div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <?php endif?>
                    <?php else :?>
                    <h5>You must log in first to be able to send job applications and download posters</h5>
                    <a href="<?=base_url('')?>" class="btn btn-primary px-4 py-3"> <?=$this->lang->line('login')?> ?</a>
                    <?php endif;?>

                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 p-4 p-md-5 bg-white">

                <a href="#staticBackdrop" data-toggle="modal" class="block-20 rounded"
                    style="background-image: url('<?=base_url('assets/public/')?>images/loker/<?=$job_vacancy_one['poster']?>');"></a>
                <div class="text p-4 text-center">
                    <h4 class="heading"><a href="#staticBackdrop" data-toggle="modal"><?=$job_vacancy_one['title']?></a>
                        </h3>
                        <div class="meta mb-2">
                            <div><a href="#staticBackdrop" data-toggle="modal" class="meta-chat">publish on
                                    <?=$job_vacancy_one['date_create']?></a></div>
                            <div><a
                                    href="<?=base_url('company-profile/').$job_vacancy_one['company_id']?>"><?=$job_vacancy_one['company_name']?></a>
                            </div>

                            <a href="<?=base_url('job-vacancy/file/download/').$job_vacancy_one['_id']?>"
                                class="btn btn-success">Download Poster?</a>
                        </div>
                        <p class="mb-0"><a href="<?=base_url('job-vacancy')?>" class="btn btn-primary px-4 py-3">Back
                                ?</a>
                        </p>
                </div>

            </div>
        </div>
    </div>
    <?php else:?>
    <div class="row no-gutters ftco-animate">
        <div class="col-md-12 wrap-about ftco-animate">
            <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4">Oops Sorry Job Vacancies Were Not Found !</h3>
                <h5>please return to the job vacancies page and find another job that suits you,<b> good luck ...</b>
            </div>
        </div>
    </div>
    <?php endif?>

    </div>
</section>



<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <img width="100%" src="<?=base_url('assets/public/')?>images/loker/<?=$job_vacancy_one['poster']?>"
                    alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>