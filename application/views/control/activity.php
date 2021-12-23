
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
   
      

    
    


      <div class="row">
        <div class="col-xl-12">
          <div class="card">
         
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('activity')?></h3>
                </div>
                <div class="col text-right">
                <a class="btn btn-primary btn-sm" href="<?=base_url('app/control/activity-information/create/').$this->session->userdata('_id')?>"><?=$this->lang->line('create')?> !</a>
                </div>
              </div>
            </div>
            <div class="text-center">
            <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                    <th scope="col"><?=$this->lang->line('title')?></th>
                    <th scope="col"><?=$this->lang->line('desc')?></th>
                    <th scope="col"><?=$this->lang->line('img')?></th>
                    <th scope="col"><?=$this->lang->line('date_up')?></th>
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($activity as $aktiv):?>
                  <tr>
                    <th scope="row">
                    <?=substr($aktiv['title'],0,50)?> ...
                    </th>
                    <td>
                    <?=substr($aktiv['desc_activity'],0,70)?> ...
                    </td>
                    <td>
                    <?=$aktiv['image']?>
                    </td>
                       
                    <td> 
                    <?=$aktiv['date_upload']?>
                    </td>
                   
                    <td>
                    <a data-toggle="modal" href="#modal-quest<?=$aktiv['_id']?>"> <i class="ni ni-send text-info"></i> </a>
                    
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>





<?php foreach($activity as $aktiv):?>
<div class="modal fade" id="modal-quest<?=$aktiv['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">	
                <div class="row text-center">
                  <div class="col-md-6">
                  <a data-toggle="modal" href="#modal-notification<?=$aktiv['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('delete')?></a>
                  </div>
                 
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/activity-information/info/').$aktiv['_id']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?></a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($activity as $aktiv):?>
<div class="modal fade" id="modal-notification<?=$aktiv['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4"><?=$this->lang->line('delete_ques')?></h4>
                   
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/activity-information/delete/').$aktiv['_id']?>" class="btn btn-white"><?=$this->lang->line('oke')?></a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>