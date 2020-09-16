<?php include('dashboardHeader.php'); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Customer</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
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
                        <th>
                          Zip Code
                        </th>

                        <th>
                          Action
</th>
                      </thead>
                   <?php   if(!empty($results)){
                   foreach($results as $res){
                    $url = base_url() . 'admin/details?id=' . $res->user_id;
                     ?>
                  <tbody>
                        <tr onclick="location.href='<?php echo $url ;?>'">
                          <td>
                          <?php echo $res->user_id;?>
                          </td>
                          <td>
                          <?php echo ($res->usr_firstName) . " ".($res->usr_lastName)  ?>
                          </td>
                          <td>
                          <?php echo $res->usr_email;?>
                          </td>
                          <td>
                          <?php echo $res->usr_zipCode;?>
                          </td> 
                          <td>
                          <a href="<?php echo $url ;?>" class="btn btn-primary btn-round">View<div class="ripple-container"></div></a>
                          </td>
                        </tr>
                      </tbody>
                   <?php }} else {?>
                    <tbody>
                      No Record Found
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
            <a href="#" target="_blank">Sangita</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <?php include('dashboardFooter.php'); ?>
<style>
  .my-custom-scrollbar {
  position: relative;
  height: 350px;
  overflow: auto;
  }
  .table-wrapper-scroll-y {
  display: block;
  }
  </style>