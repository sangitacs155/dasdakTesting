<style>
  .my-custom-scrollbar {
position: relative;
height: 150px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
  </style>
<?php include('dashboardHeader.php'); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Customer Information</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          No. of Guest
                        </th>
                        <th>
                        SignUp  up reason
                        </th>
                      </thead>
                   <?php   if(!empty($guestData)){
                   foreach($guestData as $res){
                     ?>
                  <tbody>
                        <tr>
                          <td>
                          <?php echo $res->user_id;?>
                          </td>
                          <td>
                          <?php echo ($res->usr_firstName) . " ".($res->usr_lastName)  ?>
                          </td>
                          <td>
                          <?php echo $res->usr_noOfGuest  ?>
                          </td>
                          <td>
                          <?php 
                          $reason = "";
                          if($res->usr_sub_seasonTicketWaitlist == 1) 
                          {
                            $reason .= "Sign Up for the FREE Season Ticket Waitlist." ."\n";
                          }
                          if($res->usr_sub_womensClub == 1)
                          {
                            $reason .= "Sign Up for the FREE Redskins Women's club." ."\n";
                          }
                          if($res->usr_sub_offers == 1)
                          {
                            $reason .= "Sign Up for the offers from the Redskins and her Partner." ."\n";
                          }
                          if($res->usr_sub_saluteMilitaryAppreciationClub == 1)
                          {
                            $reason .= "Sign Up for the FREE Redskins Salute Military Appreciation Club." ."\n";
                          }
                          
                          echo nl2br($reason) ;?>
                          </td>
                        </tr>
                      </tbody>
                   <?php }} else {?>
                    <tbody>
                      <tr>
                     <td> No Record Found</td></tr>
                   </tbody>
                   <?php } ?>
                    </table>
                  </div>
                </div>
                   </div>
                   <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Customer Guest Information</h4>
                </div>
                <div class="card-body">
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                 <table class="table table-bordered table-striped mb-0">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>

                      </thead>
                   <?php   if(!empty($frndData)){
                   foreach($frndData as $res){
                     ?>
                  <tbody>
                        <tr>
                          <td>
                          <?php echo $res->frnd_id ;?>
                          </td>
                          <td>
                          <?php echo ($res->frnd_fname) . " ".($res->frnd_lname)  ?>
                          </td>
                          <td>
                          <?php echo $res->frnd_email;?>
                          </td>
                        </tr>
                      </tbody>
                   <?php }} else {?>
                    <tbody>
                     <tr> <td>
                      No Guest Friend Found </td></tr>
                   </tbody>
                   <?php } ?>
                    </table>
                  </div>
                </div>

              </div>
           
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">Sangita</a> .
          </div>
        </div>
      </footer>
    </div>
  </div>
  <?php include('dashboardFooter.php'); ?>
