<div class="header pb-6" style="background-color:<?=$this->session->userdata('session_color')?>">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">

            </div>
            <!-- Card stats -->
            <div class="row">

            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <form method="POST" enctype="multipart/form-data"
        action="<?=base_url('app/control/activity-information/info/').$activity['_id']?>">
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <img id="perin" width="100%"
                                src="<?=base_url('assets/public/images/aktifitas/').$activity['image']?>" alt="">

                        </div>
                        <div class="text-center text-muted mb-4">
                            <small id="name_image_in"><?=$activity['image']?></small>
                        </div>
                        <hr class="my-4" />
                        <div class="form-group text-center">
                            <label class="custom-file-upload">
                                <input type="file" id="cuse_in_upload" name="image" />
                                <i class="ni ni-image"></i>
                            </label>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">



                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"> </h3>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <div class="col text-right">
                                <a class="btn btn-primary btn-sm"
                                    href="<?=base_url('app/control/activity-information/').$this->session->userdata('_id')?>"><?=$this->lang->line('back')?>
                                    !</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">



                        <h6 class="heading-small mb-4"> <?=$this->lang->line('activity')?> </h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label"
                                            for="input-company_mail"><?=$this->lang->line('title')?></label>
                                        <input type="text" id="input-company_mail" name="title" class="form-control"
                                            placeholder="<?=$this->lang->line('title')?>"
                                            value="<?=$activity['title']?>">
                                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label"><?=$this->lang->line('desc')?></label>
                                        <textarea rows="6" name="desc_activity" class="form-control" id="desc"
                                            placeholder="<?=$this->lang->line('desc')?>"><?=$activity['desc_activity']?></textarea>
                                        <?= form_error('desc_activity', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary btn-sm"><?=$this->lang->line('update')?></button>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

            </div>
        </div>

    </form>