
    <div class="header pb-6" style="background-color:<?=$this->session->userdata('session_color')?>">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            
          </div>
          <!-- Card stats -->
          
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
                  <h3 class="mb-0"><?=$this->lang->line('company')?></h3>
                </div>
                <div class="col text-right">
                  <button data-toggle="modal" data-target="#new_company" class="btn btn-sm btn-primary"><?=$this->lang->line('create')?></button>
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
                    <th scope="col"><?=$this->lang->line('company')?></th>
                    <th scope="col"><?=$this->lang->line('email')?></th>
                    <th scope="col"><?=$this->lang->line('phone')?></th>
                    <th scope="col"><?=$this->lang->line('website')?></th>
                    <th scope="col">Status</th>
                  
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($data_company as $company):?>
                  <tr>
                    <th scope="row">
                      <?=$company['company_name']?>
                    </th>
                    <td>
                    <?=$company['company_mail']?>
                    </td>
                    <td>
                    <?=$company['company_phone']?>
                    </td>
                    <td>
                    <a target="__blank" href="<?=$company['company_site']?>"><?=$company['company_site']?></a>
                    </td>
                    <td>
                   
                      <?=$company['company_status']?>
                     
                    </td>
                    <td>
                    <a data-toggle="modal" href="#modal-quest<?=$company['id_company']?>"> <i class="ni ni-send text-info"></i> </a>
                    
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>




      <!-- Footer -->
     
<?php foreach($data_company as $company):?>
<div class="modal fade" id="modal-quest<?=$company['id_company']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                  <a data-toggle="modal" href="#modal-notification<?=$company['id_company']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('delete')?></a>
                  </div>
                 
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/company/data/detail/').$company['id_company']?>" class="btn btn-sm btn-outline-primary btn-block"><?=$this->lang->line('view')?></a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($data_company as $company):?>
<div class="modal fade" id="modal-notification<?=$company['id_company']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4"><?=$this->lang->line('delete_ques')?> !</h4>
                    <p><?=$this->lang->line('if_company')?></p>
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/company/data/delete/').$company['id_company']?>" class="btn btn-white"><?=$this->lang->line('oke')?></a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>

<div class="modal fade" id="new_company" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="<?=base_url('app/control/company/data/create/').$this->session->userdata('_id')?>?>" id="form_create_Company">
      
                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_name"><?=$this->lang->line('name')?></label>
                        <input type="text" id="input-company_name" name="company_name" class="form-control" placeholder="<?=$this->lang->line('name')?>">
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-company_status">Status</label>
                        <select class="form-control" name="company_status" id="company_status">
                            <option selected disabled>-</option>
							                <option value="Aktif"><?=$this->lang->line('aktif')?></option>
                            <option value="Not Aktif"><?=$this->lang->line('non_aktif')?></option>
                        </select>
                      </div>
                      
                    </div>
                    <div class="col-xl-12 text-right">
                      <button type="submit" class="btn-primary btn btn-sm"><?=$this->lang->line('submit')?></button>
                    </div>
                </div>  
        </form>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="modal_loading" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-body px-lg-5 py-lg-5">
                  <div class="progress">
                      <div class="progress-bar bg-primary" id="loading_reset_pass" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                  </div>
              </div>
    
            </div>
            
        </div>
    </div>
</div>


<div class="modal fade" id="_info" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 id="info_res_status" class="heading mt-4"></h4>
                    <p id="info_res_msg"></p>
                </div>        
            </div>
            <div class="modal-footer">
                <button type="button" id="close_info" class="btn btn-link text-white ml-auto" data-dismiss="modal"><?=$this->lang->line('close')?></button>
            </div>
            
        </div>
    </div>
</div>
