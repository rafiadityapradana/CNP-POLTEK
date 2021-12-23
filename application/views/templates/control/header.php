<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your App And Use As Much As Possible">
  <meta name="author" content="Rafilatip212">
  <title>POLITEKNIK PGRI BANTEN</title>
  <!-- Favicon -->
  <link rel="icon" href="<?=base_url('assets/public/images/')?>icon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/private/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url()?>assets/private/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/private/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="<?=base_url('assets/private/')?>ck/summernote-lite.css">

  <!-- Code Mirror -->
  <link rel="stylesheet" href="<?=base_url('assets/private/mirror')?>/lib/codemirror.css">
<link rel="stylesheet" href="<?=base_url('assets/private/mirror')?>/addon/display/fullscreen.css">
<link rel="stylesheet" href="<?=base_url('assets/private/mirror')?>/theme/material.css">
<link rel="stylesheet"  href="<?=base_url()?>assets/private/datatables.css"/>
 

  <style>
    input[type="file"] {
        display: none;
    }

    input[type="button"] {
        display: none;
    }

    input[type="submit"] {
        display: none;
    }

    .custom-file-upload {
        display: inline-block;
        color: #035aa6;
        border-radius: 5px;
        font-size: 26px;
        margin-top: 9px
    }

    .custom-file-upload_job {
        display: inline-block;
        color: #035aa6;
        border-radius: 5px;
        font-size: 45px;
        margin-top: 25px
    }
    </style>

</head>

<body data-base="<?=base_url('api/')?>">
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <!-- <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img  src="<?=base_url('assets/public/images/')?>icon.png" class="navbar-brand-img" alt="...">
        </a>
      </div> -->
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('app/control')?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('app/control/users/').$this->session->userdata('_id')?>">
                <i class="ni ni-circle-08 text-orange"></i>
                <span class="nav-link-text"><?=$this->lang->line('users')?></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('app/control/company/').$this->session->userdata('_id')?>">
                <i class="ni ni-building text-primary"></i>
                <span class="nav-link-text"><?=$this->lang->line('company')?></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('app/control/job-vacancy/').$this->session->userdata('_id')?>">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text"><?=$this->lang->line('job')?></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('app/control/job-application/').$this->session->userdata('_id')?>">
                <i class="ni ni-email-83 text-success"></i>
                <span class="nav-link-text"><?=$this->lang->line('job_app')?></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('app/control/activity-information/').$this->session->userdata('_id')?>">
                <i class="ni ni-bullet-list-67 text-yellow"></i>
                <span class="nav-link-text"><?=$this->lang->line('activity')?></span>
              </a>
            </li>
           
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            
            <li class="nav-item">
              <a class="nav-link active active-pro" href="<?=base_url('look')?>">
                <i class="ni ni-key-25 text-danger"></i>
                <span class="nav-link-text"><?=$this->lang->line('look_screen')?></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom" style="background-color:<?=$this->session->userdata('session_color')?>">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link" id="full" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-tv-2"></i>
                
              </a>
            </li>
            <li class="nav-item dropdown">
            
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"><?php if($new_users || $notive_loker):?>
                  <?=$new_users+ $notive_loker?>
                <?php endif;?></i>
                
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0"><?=$this->lang->line('you_have')?> <strong class="text-primary"><?=$new_users?></strong> <?=$this->lang->line('new_user_req')?></h6>
               
                </div>
                <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0"><?=$this->lang->line('you_have')?> <strong class="text-primary"><?=$notive_loker?></strong> <?=$this->lang->line('new_loker')?></h6>
                </div>
                <!-- List group -->
                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                <div class="list-group list-group-flush">
                <?php foreach($user_request as $req):?>
                  <a href="<?=base_url('app/control/users/new-request/detail/').$req['_id']?>" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm"><?=$req['name']?></h4>
                          </div>
                          <div class="text-right text-muted">
                            <small><?=$req['nim']?></small>
                          </div>
                        </div>
                        <p class="text-sm mb-0"><?=$req['major']?></p>
                      </div>
                    </div>
                  </a>
                <?php endforeach;?>
                </div>
                <!-- View all -->
                
                <?php if($new_users):?>
                  <a href="<?=base_url('app/control/users/new-request/').$this->session->userdata('_id')?>" class="dropdown-item text-center text-primary font-weight-bold py-3"><?=$this->lang->line('view_all')?></a>
                <?php endif;?>
                <?php foreach($new_loker as $NEW):?>
                  <a href="<?=base_url('app/control/job-vacancy/data/').$NEW['_id']?>" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm"><?=$NEW['title']?></h4>
                          </div>
                          <div class="text-right text-muted">
                            <small><?=$NEW['date_create']?></small>
                          </div>
                        </div>
                        <p class="text-sm mb-0"><?=$NEW['company_name']?></p>
                      </div>
                    </div>
                  </a>

                <?php endforeach;?>
                <?php if($notive_loker):?>
                  <a href="<?=base_url('app/control/job-vacancy/').$this->session->userdata('_id')?>" class="dropdown-item text-center text-primary font-weight-bold py-3"><?=$this->lang->line('view_all')?></a>
                <?php endif;?>
              </div>
            </li>
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                <i class="ni ni-zoom-split-in"></i>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?=$myaccount['name']?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0"><?=$myaccount['email']?></h6>
                </div>
                <a href="<?=base_url('app/control/account/').$this->session->userdata('_id')?>" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span><?=$this->lang->line('setting_account')?></span>
                </a>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?=base_url('app/logout')?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span><?=$this->lang->line('logout')?></span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    