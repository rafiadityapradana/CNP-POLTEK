
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
 <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12 mb-5">   
<article>

<form method="POST" action="<?=base_url('app/control/setting/lang/put/').$lang?>">
<textarea id="code" name="code" rows="5">

<?= read_file(APPPATH.'language/'.$lang.'/app_lang.php');?>
</textarea>
<textarea id="form_validation_lang" name="form_validation_lang" rows="5">

<?= read_file(APPPATH.'language/'.$lang.'/form_validation_lang.php');?>
</textarea>
<div class="row align-items-center">
<div class="col text-left">
<button type="submit" class="btn btn-primary mt-5 mb-5 btn-sm btn-block"><?=$this->lang->line('submit')?></button>
</div>
</div>
</form>

</article>
      </div>
    </div>
    
<!-- Code Mirror -->

<script src="<?=base_url('assets/private/mirror')?>/lib/codemirror.js"></script>
  <script src="<?=base_url('assets/private/mirror')?>/mode/javascript/javascript.js"></script>
  <script src="<?=base_url('assets/private/mirror')?>/addon/display/fullscreen.js"></script>
<script>
  const Code = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    theme: "material",
    
  });
  Code.setSize("100%", "100%");
  const form_validation_lang = CodeMirror.fromTextArea(document.getElementById("form_validation_lang"), {
    lineNumbers: true,
    theme: "material",
    
  });
  form_validation_lang.setSize("100%", "100%");
</script>