
    <div class="header pb-6" style="background-color:<?=$this->session->userdata('session_color')?>">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            
          </div>
          <!-- Card stats -->
          <div class="row">
          <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col text-success">
                      <h5 class="card-title text-uppercase text-muted mb-0"> <?=$this->lang->line('user_studen')?></h5>
                      <i class="fa fa-arrow-right"></i>
                      <span class="h2 font-weight-bold mb-0"><?=$user_student?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow" >
                      <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col text-success">
                      <h5 class="card-title text-uppercase text-muted mb-0"> <?=$this->lang->line('user_com')?></h5>
                      <i class="fa fa-arrow-right"></i>
                      <span class="h2 font-weight-bold mb-0"><?=$user_company?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col text-success">
                      <h5 class="card-title text-uppercase text-muted mb-0"> <?=$this->lang->line('company')?></h5>
                      <i class="fa fa-arrow-right"></i>
                      <span class="h2 font-weight-bold mb-0"><?=$company_total?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col text-success">
                      <h5 class="card-title text-uppercase text-muted mb-0"> <?=$this->lang->line('user_acses')?></h5>
                      <i class="fa fa-arrow-right"></i>
                      <span class="h2 font-weight-bold mb-0"><?=$user_access?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col text-success">
                      <h5 class="card-title text-uppercase text-muted mb-0"> <?=$this->lang->line('ip_acses')?></h5>
                      <i class="fa fa-arrow-right"></i>
                      <span class="h2 font-weight-bold mb-0"><?=$ip_access?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col text-success">
                      <h5 class="card-title text-uppercase text-muted mb-0"> <?=$this->lang->line('job')?></h5>
                      <i class="fa fa-arrow-right"></i>
                      <span class="h2 font-weight-bold mb-0"><?=$job_vacansy?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col text-success">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?=$this->lang->line('job_app')?></h5>
                      <i class="fa fa-arrow-right"></i>
                      <span class="h2 font-weight-bold mb-0"><?=$job_app?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col text-success">
                      <h5 class="card-title text-uppercase text-muted mb-0"> <?=$this->lang->line('activity')?></h5>
                      <i class="fa fa-arrow-right"></i>
                      <span class="h2 font-weight-bold mb-0"><?=$aktivity?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">


     

        <div class="col-xl-12">
          
          <div class="card" id="cart">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col-sm-9">
                  <h6 class="text-uppercase text-muted ls-1 mb-1"><?=$this->lang->line('Performance')?></h6>
                  <h5 class="h3 mb-0 class_year"></h5>
                </div> 
                <div class="col-sm-3">
                  <h6 class="text-uppercase text-muted ls-1 mb-1"><?=$this->lang->line('year')?></h6>
                  <div class="row">
                    <div class="col-sm-8">
                    <div class="form-group">
                    <select class="form-control form-control-sm y">
                    <option disabled selected>-</option>
                    <?php foreach($year as $y):?>
                    <option value="<?=$y['tahun']?>"><?=$y['tahun']?></option>
                    <?php endforeach;?>
                    </select>
                    
                  </div>
                    </div>
                    <div class="col-sm-4">
                    <button class="btn btn-outline-info btn-block btn-sm year"><?=$this->lang->line('view')?></button>
                    </div>
                  </div>
                  
                 


                </div>               
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <!-- <?=date('M')?> -->
              <div class="chart">
                <canvas id="chart-bars" class="chart-canvas"></canvas>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?=$this->lang->line('user_acses')?></h3>
                </div>
                <div class="col text-right">
                  <a href="<?=base_url('app/control/users-access/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary"><?=$this->lang->line('view_all')?></a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush dataTable">
                <thead style="background-color:<?=$this->session->userdata('session_color')?>;color:white">
                  <tr>
                    
                    <th scope="col">Ip</th>
                    <th scope="col"><?=$this->lang->line('login')?> <?=$this->lang->line('in')?></th>
                    <th scope="col"><?=$this->lang->line('device_name')?></th>
                    <th scope="col">Total</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php foreach($users_activity as $acti):?>
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
                    <td>
                    <a href="<?=base_url('app/control/ip-access/').$acti['ip_access']?>" class="text-default">  <?=$acti['total_access']?></a>
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
     



