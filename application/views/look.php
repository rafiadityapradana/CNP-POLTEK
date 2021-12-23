<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html >

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
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/private/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default"  id="html_body">
  <!-- Navbar -->
 
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-8" style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
      <div class="container">
        <div class="header-body text-center">
          <div class="row justify-content-center">
           
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
     
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--9 pb-2">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            
            <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center">
            <img height="140px"  src="<?=base_url('assets/public/')?>images/profile/<?=$myaccount['photo']?>" class="rounded-circle">
            </div>
              <div class="text-center text-muted mt-3 mb-4">
              
                <small><?=$myaccount['name']?></small>
                <hr>
              </div>
              <form role="form" method="POST" action="<?=base_url('look-screen')?>">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="password" required>
                    
                  </div>
                  
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; <?=date('Y')?> <a href="https://www.instagram.com/rafilatip212/" class="font-weight-bold ml-1" target="_blank">Rafilatip212</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?=base_url()?>assets/private/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/private/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/private/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?=base_url()?>assets/private/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?=base_url()?>assets/private/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?=base_url()?>assets/private/js/argon.js?v=1.2.0"></script>

</body>

</html>