<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your App And Use As Much As Possible">
  <meta name="author" content="Rafilatip212">
  <title><?=$myaccount['company_name']?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?=base_url('assets/public/images/')?>icon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?=base_url('assets/private/')?>vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url('assets/private/')?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=base_url('assets/private/')?>css/argon.css?v=1.2.0" type="text/css">

  <link rel="stylesheet" href="<?=base_url('assets/private/')?>ck/summernote-lite.css">
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
 
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom ">
      <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" >
        
       
    
        
           
            
          <ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img height="36px" alt="Image placeholder" src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?=$myaccount['name']?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0"><?=$myaccount['company_name']?></h6>
                </div>

                <a href="<?=base_url('app/company/account/').$this->session->userdata('_id')?>" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span><?=$this->lang->line('setting_account')?></span>
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
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?=base_url('assets/public/')?>images/sampul/<?=$myaccount['company_sampul']?>); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-4"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white"><?=$myaccount['company_name']?></h1>
            <p class="text-white mt-0 mb-5"><?=$myaccount['company_address']?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="<?=base_url('assets/public/')?>images/sampul/<?=$myaccount['company_sampul']?>" alt="Image placeholder" class="card-img-top" data-target="#modal-Question_sampul" data-toggle="modal">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#modal-Question" data-toggle="modal">
                    <img height="140px"  src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            
            <div class="card-body pt-0 mt-5">
            
              <div class="text-center mt-5">
              <?= $this->session->flashdata('message'); ?>
                <h5 class="h3">
                <?=$myaccount['name']?>
                </h5>
                <div class="h5 font-weight-300">
                  <a href="<?=base_url('company-profile/').$myaccount['company_id']?>"><i class="ni location_pin mr-2"></i><?=$myaccount['company_name']?></a>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$myaccount['email']?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><?=$myaccount['alamat']?>
                </div>
              </div>

              
            </div>
            <!-- <a href="<?=base_url('app/company')?>" class="btn btn-sm btn-primary">Home </a> -->
          </div>

          <div class="card card-profile">
          <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-dark">
                  <tr>
                   
                    <th scope="col"><?=$this->lang->line('language')?></th>
                    
                    
                    <th scope="col"></th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php foreach($langue as $lang):?>
                  <tr>
                    
                    <th scope="row">
                      <?=$lang['language']?>
                    </th>
                   
                    <td>
                    
                    <a class="set_lang" data_lang ="<?=$lang['id_language']?>"> <i class="ni ni-send text-info"></i> </a>
                  
                    
                    </td>
                   
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>

          </div>

        </div>

        


<div class="modal fade" id="modal-Question" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
            
        <div class="card bg-secondary border-0 mb-0">

            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-2">
                    <small><?=$this->lang->line('question')?></small>
                </div>
              <div class="row">
                <div class="col-6">
                <button type="button" class="btn btn-outline-secondary my-1 ques_profile" data-type="_view_profile"><?=$this->lang->line('view')?> <?=$this->lang->line('photo')?></button>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-outline-secondary my-1 ques_profile" data-type="_edit_profile"><?=$this->lang->line('edit')?> <?=$this->lang->line('photo')?></button>
                </div>
              </div>
                   
            </div>
        </div>   
      </div> 
    </div>
  </div>
</div>



<div class="modal fade" id="modal-Question_sampul" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
            
        <div class="card bg-secondary border-0 mb-0">

            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-2">
                    <small><?=$this->lang->line('question')?></small>
                </div>
              <div class="row">
                <div class="col-6">
                <button type="button" data-type="_view_sampul" class="btn btn-outline-secondary my-1 ques_sampul" ><?=$this->lang->line('view')?> <?=$this->lang->line('photo')?> <?=$this->lang->line('company')?></button>
                </div>
                <div class="col-6">
                <button type="button" data-type="_edit_sampul" class="btn btn-outline-secondary my-1 ques_sampul"><?=$this->lang->line('edit')?> <?=$this->lang->line('photo')?> <?=$this->lang->line('company')?></button>
                </div>
              </div>
                   
            </div>
        </div>   
      </div> 
    </div>
  </div>
</div>




<div class="modal fade" id="_view_profile" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        	

            
            <div class="modal-body">
            <img width="100%" src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>" alt="">
                
            </div>
           
        </div>
    </div>
</div>



<div class="modal fade" id="_edit_profile" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
<div class="card bg-secondary border-0 mb-0">

    <div class="card-body px-lg-5 py-lg-5">
      <img width="100%" id="perimage_profile" src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>" alt="">
        <div class="text-center text-muted mb-4">
            <small id="name_image"><?=$myaccount['photo']?></small>
        </div>
        <form role="form" method="POST" id="form_update_profile" enctype="multipart/form-data" action="<?=base_url('app/company/account-photo/').$this->session->userdata('_id')?>">
            <div class="form-group mb-3 text-center">
            <label class="custom-file-upload">
                 <input type="file" id="cuse_file" name="image" />
                  <i class="ni ni-image"></i>
             </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4"><?=$this->lang->line('update')?> ?</button>
                <button type="button" class="btn btn-danger my-4" data-dismiss="modal"><?=$this->lang->line('close')?> ?</button>
            </div>
        </form>
    </div>
</div>



                
            </div>
            
        </div>
    </div>
</div>



<div class="modal fade" id="_view_sampul" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        	

            
            <div class="modal-body">
            <img width="100%" src="<?=base_url('assets/public/')?>images/sampul/<?=$myaccount['company_sampul']?>" alt="">
                
            </div>
           
        </div>
    </div>
</div>



<div class="modal fade" id="_edit_sampul" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
<div class="card bg-secondary border-0 mb-0">

    <div class="card-body px-lg-5 py-lg-5">
      <img width="100%" id="perimage_profile_sampul" src="<?=base_url('assets/public/')?>images/sampul/<?=$myaccount['company_sampul']?>" alt="">
        <div class="text-center text-muted mb-4">
            <small id="name_image_sampul"><?=$myaccount['company_sampul']?></small>
        </div>
        <form role="form" method="POST" enctype="multipart/form-data" action="<?=base_url('app/company/account-photo-sampul/').$myaccount['id_company']?>">
            <div class="form-group mb-3 text-center">
            <label class="custom-file-upload">
                 <input type="file" id="cuse_file_sampul" name="image" />
                  <i class="ni ni-image"></i>
             </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4"><?=$this->lang->line('update')?> ? </button>
                <button type="button" class="btn btn-danger my-4" data-dismiss="modal"><?=$this->lang->line('close')?> ?</button>
            </div>
        </form>
    </div>
</div>



                
            </div>
            
        </div>
    </div>
</div>



