<footer class="footer">
    <div class="container">
        <div class="row" style="justify-content: center;">

            <div class="col-md-6 col-lg-6 mb-md-0 mb-4">
                <h2 class="footer-heading"><?=$this->lang->line('service')?></h2>
                <ul class="list-unstyled">
                    <li><a href="#" class="py-1 d-block">Jl. Raya Cilegon No.KM, RW.12, Serdang, Kec. Kramatwatu,
                            Serang, Banten 42161 </a></li>
                    <li><a href="#" class="py-1 d-block">Telp. 0254 - 849 3568</a></li>

                </ul>
            </div>
            <div class="col-md-6 col-lg-6 mb-md-0 mb-4">
                <h2 class="footer-heading"><?=$this->lang->line('portal')?> </h2>
                <div class="tagcloud">

                    <a href="<?=base_url('job-vacancy')?>" class="tag-cloud-link"><?=$this->lang->line('job')?></a>
                    <a href="<?=base_url('company')?>" class="tag-cloud-link"><?=$this->lang->line('company')?></a>
                    <a href="<?=base_url('job-seekers')?>" class="tag-cloud-link"><?=$this->lang->line('seekers')?></a>
                    <a href="<?=base_url('activity-information')?>"
                        class="tag-cloud-link"><?=$this->lang->line('activity')?></a>
                    <?php foreach($majors_data as $major):?>
                    <a href="#" class="tag-cloud-link"><?=$this->lang->line($major['code'])?></a>
                    <?php endforeach;?>


                    <a href="#" class="tag-cloud-link"><?=$this->lang->line('general')?></a>


                </div>
            </div>

        </div>
    </div>
    <div class="w-100 mt-5 border-top py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-lg-12">

                    <p class="copyright mb-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> by <a
                            href="https://www.instagram.com/rafilatip212/" target="_blank">RafiLatip212</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>


<script src="<?=base_url('assets/public/')?>js/jquery.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/popper.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/bootstrap.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/jquery.easing.1.3.js"></script>
<script src="<?=base_url('assets/public/')?>js/jquery.waypoints.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/jquery.stellar.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/jquery.animateNumber.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/bootstrap-datepicker.js"></script>
<script src="<?=base_url('assets/public/')?>js/jquery.timepicker.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/owl.carousel.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/scrollax.min.js"></script>


<script src="<?=base_url('assets/public/')?>js/main.js"></script>



</body>

</html>