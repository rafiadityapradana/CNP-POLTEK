<!DOCTYPE html>
<html lang="en">

<head>
	<title ><?=$this->lang->line('title_head')?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?=base_url('assets/public/images/')?>icon.png" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/animate.css">
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/magnific-popup.css">

	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/jquery.timepicker.css">

	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/flaticon.css">
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/style.css">
</head>

<body data-base="<?=base_url('api/')?>">
	<div class="wrap" style="background-color: #2D3B7C;">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col d-flex align-items-center">
					<p class="mb-0 phone"> <a href="#">Email : yy@gmail.com</a></p>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="https://www.facebook.com/poltekpgribanten/" target="_blank" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="https://www.instagram.com/politeknikpgribanten/?hl=id" target="_blank" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							
							
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
		<!-- job fairs and internships -->
			<a class="navbar-brand" href="<?=base_url('')?>"> <?=$this->lang->line('welcome_message')?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> 
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item"><a href="<?=base_url('job-vacancy')?>" class="nav-link"><?=$this->lang->line('job')?></a></li>
					<li class="nav-item"><a href="<?=base_url('company')?>" class="nav-link"><?=$this->lang->line('company')?></a></li>
					<li class="nav-item"><a href="<?=base_url('job-seekers')?>" class="nav-link"><?=$this->lang->line('seekers')?></a></li>
					<li class="nav-item"><a href="<?=base_url('activity-information')?>" class="nav-link"><?=$this->lang->line('activity')?></a></li>
					<li class="nav-item"><a href="<?=base_url('language')?>" class="nav-link"><?=$this->lang->line('language')?></a></li>
				</ul>
			</div>
		</div>
	</nav>

	
	<!-- END nav -->
