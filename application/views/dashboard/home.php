
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
        <h1>WELCOME TO ADMIN PANEL</h1>
        <hr>
        <div class="row">
          
                <h2><u>Current Logged in Admin Login Details</u></h2>
     
                
          </div>

          <div class="row">
          <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li>Admin Username: <?php echo $this->session->userdata('current_admin_name') ?></li><br>
                    <li>Admin Power: <?php echo $this->session->userdata('session_power') ?> admin</li><br>
                    <li>Login time:<?php echo date(" h:i:sa");?></li>
                    

                </ul>
          </div>
          <hr>
          <h2><u>Recent Status</u></h2>
          <div class="row">
            <div class="col-xl-2 col-md-4 col-6">
              
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Total Clients</strong>
                  <div class="count-number"><?php if(isset($TotalClient)) echo $TotalClient?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Total</span> Reservation </strong><span></span>
                
                  <div class="count-number"><?php if(isset($TotalReservation)) echo $TotalReservation?></div>
                  <a href="<?php echo site_url('Orders/NewOrders'); ?>"><button class="btn btn-warning">Click To View Orders</button></a>
                </div>
              </div>
            </div>
            
          </div>
        <hr>
          
        </div>
      </section>
      
     