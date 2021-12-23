
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
        
      <div class="col-xl-4 order-xl-2">
            

            <div class="card">
         
            <div class="card-body">
              
              <div class="row">
             
                <div class="col-md-12 py-3">
                    <img data-toggle="modal" data-target="#see_job" width="100%" src="<?=base_url('assets/public/')?>images/loker/<?=$job['poster']?>" alt="">
                </div>
             
              </div>
              
              
            </div>
        </div>  


        </div>
        <div class="col-xl-8">
        <div class="card">
         
         <div class="card-header border-0">
           <div class="row align-items-center">
             <div class="col">
               <h3 class="mb-0"><?=$this->lang->line('job_vacancy')?> </h3>
             </div>
             <div class="col text-right">
             <a href="<?=base_url('app/control/company/data/detail/').$job['company_id']?>" class="btn-sm btn btn-primary"><?=$this->lang->line('back')?> !</a>
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
                 <th scope="col"><?=$this->lang->line('title')?></th>
                 <th scope="col"><?=$this->lang->line('date_create')?></th>
                 <th scope="col"><?=$this->lang->line('delivery')?></th>
               
                
               </tr>
             </thead>
             <tbody>
             
               <tr>
                 <th scope="row">
                   <?=$job['title']?>
                 </th>
                 <td>
                 <?=$job['date_create']?>
                 </td>
                 <td>
                 <?=$job['delivery_destination']?>
                 </td>
               </tr>
             
             </tbody>
           </table>
         </div>
         <hr>
         <div>
            <ul>Note
                <ol><?=$job['note']?></ol>
            </ul>
         </div>
       </div>
        </div>
      </div>
      <?php  if($total != 0):?>
      <div class="row">
        <div class="col-xl-12">
        <div class="card">
         
         <div class="card-header border-0">
           <div class="row align-items-center">
             <div class="col">
               <h3 class="mb-0"><?=$this->lang->line('job_app')?> </h3>
             </div>
             
             
           </div>
         </div>
         <div class="text-center">
         <?= $this->session->flashdata('message'); ?>
         </div>
         <div class="table-responsive">
           <!-- Projects table -->
           <?php foreach($job_app as $app):?>
           <table class="table align-items-center table-flush">
             <thead class="thead-light">
               <tr>
               <th scope="col">Nim</th>
                 <th scope="col"><?=$this->lang->line('name')?></th>
                 <th scope="col"><?=$this->lang->line('email')?></th>
                 <th scope="col"><?=$this->lang->line('majors')?></th>
               
                
               </tr>
             </thead>
             <tbody>
             
               <tr>
               
                 <th scope="row">
                   <?=$app['nim']?>
                 </th>
                 <td>
                 <?=$app['name']?>
                 </td>
                 <td>
                 <?=$app['email']?>
                 </td>
                 <td> <?=$this->lang->line($app['code'])?></td>
               </tr>
             
             </tbody>
             <thead class="thead-light">
               <tr>
               <th scope="col"><?=$this->lang->line('phone_whas')?></th>
                 <th scope="col">Status <?=$this->lang->line('job_app')?></th>
                 <th scope="col"><?=$this->lang->line('date_send')?></th>
                 <th scope="col">Commanditaire Vennootschap</th>
                 
               
                
               </tr>
             </thead>
             <tbody>
             
               <tr>
               
                 <th scope="row">
                   <?=$app['phone']?>
                 </th>
                 <td>
                 <?=$this->lang->line($app['status_job_application'])?>
                 </td>
                
                 <td> <?=$app['date_send']?></td>
                 <td> <a href="<?=base_url('app/control/company/data/job-vacancy/download-cv/').$app['cv_id']?>" class="btn btn-primary btn-sm"><?=$this->lang->line('download')?> <?=$app['cv']?></a></td>
               </tr>
             
             </tbody>
           </table>
          
           <hr>
           <?php if($app['note_job_application']):?>
            <div>
              <ul> <b><?=$this->lang->lien('note')?></b>
                  <ol><?=$app['note_job_application']?></ol>
              </ul>
          </div>
          <?php endif;?>
        
           <?php endforeach;?>
         </div>
         
       </div>
        </div>
      </div>

           <?php endif;?>


<div class="modal fade" id="see_job" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
              
                <div class="col-md-12 py-3">
                    <img width="100%" src="<?=base_url('assets/public/')?>images/loker/<?=$job['poster']?>" alt="">
                </div>
             
            </div>
      </div>
      
    </div>
  </div>
</div>