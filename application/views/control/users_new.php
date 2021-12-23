
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
                  <h3 class="mb-0">Users College Student Table New</h3>
                </div>
                <div class="col text-right">
                  <a href="<?=base_url('app/control/users/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary">Back</a>
                </div>
              </div>
            </div>
            <div class="text-center">
            <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nim</th>
                    <th scope="col">Name</th>
                    <th scope="col">Major</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($user_allt_new as $user):?>
                  <tr>
                    <th scope="row">
                      <?=$user['nim']?>
                    </th>
                    <td>
                    <?=$user['name']?>
                    </td>
                    <td>
                    <?=$user['major']?>
                    </td>
                    <td>
                    <?=$user['email']?>
                    </td>
                    <td>
                    <?=$user['phone']?>
                    </td>
                    <td>
                    <?=$user['jenis_kelamin']?>
                    </td>
                    <td>
                    <a data-toggle="modal" href="#modal-quest<?=$user['_id']?>"> <i class="ni ni-send text-info"></i> </a>
                    <!-- <a href="<?=base_url('app/control/users/data/').$user['_id']?>" > <i class="ni ni-send text-info"></i> </a> -->
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
     
<?php foreach($user_allt_new as $user):?>
<div class="modal fade" id="modal-quest<?=$user['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                  <a data-toggle="modal" href="#modal-notification<?=$user['_id']?>" class="btn btn-sm btn-outline-primary btn-block">Delete</a>
                  </div>
                  
                  <div class="col-md-6">
                  <a href="<?=base_url('app/control/users/new-request/detail/').$user['_id']?>" class="btn btn-sm btn-outline-primary btn-block">Detail</a>
                  </div>
                </div>               
            </div>    
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($user_allt_new as $user):?>
<div class="modal fade" id="modal-notification<?=$user['_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-body mt-5">        	
                <div class="py-3 text-center mt-3">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You sure delete this!</h4>
                    <p>If you delete this data, then you will delete all data related to that account</p>
                </div>        
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('app/control/users/data/delete/').$user['_id']?>" class="btn btn-white">Ok, Got it</a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach;?>

