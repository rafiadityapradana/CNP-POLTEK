
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
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">New User Request</h3>
                </div>
               
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nim</th>
                    <th scope="col">Name</th>
                    <th scope="col">Major</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($user_request as $request):?>
                  <tr>
                    <th scope="row">
                      <?=$request['nim']?>
                    </th>
                    <td>
                    <?=$request['name']?>
                    </td>
                    <td>
                    <?=$request['major']?>
                    </td>
                    <td>
                    <a href="<?=base_url('app/control/users/new-request/detail/').$request['_id']?>" > <i class="ni ni-send text-info"></i> </a>
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
               
                <div class="col text-right">
                  <a href="<?=base_url('app/control/users/').$this->session->userdata('_id')?>" class="btn btn-sm btn-primary">Back !</a>
                </div>
              </div>
            </div>
            <div class="cart-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <ul class="list-group list-group-flush h4">Nim
                        <li class="list-group-item h5"><?=$user_request_detail['nim']?></li>
                      </ul>
                      <ul class="list-group list-group-flush h4">Major
                        <li class="list-group-item h5"><?=$user_request_detail['major']?></li>
                      </ul>
                    
                      <ul class="list-group list-group-flush h4">Name
                        <li class="list-group-item h5"><?=$user_request_detail['name']?></li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="list-group list-group-flush h4">Email
                        <li class="list-group-item h5"><?=$user_request_detail['email']?></li>
                      </ul>
                      <ul class="list-group list-group-flush h4">Phone
                        <li class="list-group-item h5"><?=$user_request_detail['phone']?></li>
                      </ul>
                      <ul class="list-group list-group-flush h4">Gender
                        <li class="list-group-item h5"><?=$user_request_detail['jenis_kelamin']?></li>
                      </ul>
                    </div>
                    <div class="col-md-12">
                      <ul class="list-group list-group-flush h4">Address
                        <li class="list-group-item h5"><?=$user_request_detail['alamat']?></li>
                      </ul>
                    </div>
                    <div class="col-md-12 mb-4">
                    <a href="<?=base_url('app/control/users/activate-request/').$user_request_detail['_id']?>" class="btn btn-success btn-sm">Activate</a>
                      <a href="<?=base_url('app/control/users/disable-request/').$user_request_detail['_id']?>" class="btn btn-danger btn-sm">Disable it</a>
                    </div>
                  </div> 
                </div>
                
            </div>
           
          </div>
        </div>
      </div>
      <!-- Footer -->
     