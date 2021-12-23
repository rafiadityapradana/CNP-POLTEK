
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
                  <h3 class="mb-0"><?=$this->lang->line('ip_acses')?></h3>
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="color:white; background-color:<?=$this->session->userdata('session_color')?>">
                  <tr>
                  
                    <th scope="col">Ip</th>
                    <th scope="col"><?=$this->lang->line('login')?> <?=$this->lang->line('in')?>n</th>
                    <th scope="col"><?=$this->lang->line('start_end')?></th>
                    <th scope="col"><?=$this->lang->line('device_name')?></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($ip_access as $acti):?>
                  <tr>   
                    <th scope="row">
                    <?=$acti['ip']?> 
                    </th>
                    <td>
                      <?=$acti['time_login']?> 
                    </td>
                    <td>
                      <?=$acti['start_access']?> - <?=$acti['end_access']?> 
                    </td>
                   
                    
                    <td>
                     <?=$acti['device_name']?>
                    </td>
                    
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
      </div>



