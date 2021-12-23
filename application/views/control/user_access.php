
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
                  <h3 class="mb-0">Users Date Access App</h3>
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    
                    <th scope="col">Ip</th>
                    <th scope="col">Login In</th>
                    <th scope="col">Device Name</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php foreach($ip_access as $acti):?>
                  <tr>   
                    <th scope="row">
                    <a href="<?=base_url('app/control/ip-access/').$acti['ip_access']?>" class="text-default"> <?=$acti['ip_access']?></a> 
                    </th>
                    <td>
                      <a href="<?=base_url('app/control/ip-access/').$acti['ip_access']?>" class="text-default"> <?=$acti['time_login']?></a> 
                    </td>
                    <td>
                    <a href="<?=base_url('app/control/ip-access/').$acti['ip_access']?>" class="text-default">  <?=$acti['device_name']?></a>
                    </td>
                  
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
      </div>



