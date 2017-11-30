<section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display"><?php if(isset($home)) echo $home; ?> / <?php if(isset($breadcumbs)) echo $breadcumbs; ?></h1>
          </header>
          <div class="col-md-16 col-md-offset-3">
                     <?php echo $this->session->flashdata('success_message'); ?>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header d-flex align-items-center">
                            <h2 class="h5 display display">Zip Code Entry</h2>
                    
                  </div>
                  <div class="card-block">
                    <p>Instruction:
                        <ul class="list-unstyled">
                          <li>1. First Field is Zip Code</li>
                          <li>2. Second Filed is Areaa Name</li>
                        </ul>
                        
                    </p>
                    <?php echo form_open('dashboard/insertzip', array('class'=>'jsform')); ?> 
                      <div class="form-group">
                        <label>Area Name</label>
                        <input type="text" name="area_name"  placeholder="area name" class="form-control">
                      </div>
                      <div class="form-group">       
                        <label>ZIP Code</label>
                        <input type="text" name="zip_code" placeholder="zip_code" class="form-control">
                      </div>
                      <div class="form-group">       
                      <input type="submit" value="save">
                      </div>
                      <div class="jsError"></div>
                    <?php echo form_close(); ?>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
        $(document).ready(function(){

            $('form.jsform').on('submit', function(form){
                form.preventDefault();
                var URL = '<?php echo site_url('dashboard/insertzip') ?>';
                $.post(URL , $('form.jsform').serialize(), function(data){

                   $('div.jsError').html(data);
                })
                 
                 
            });

        });
      </script>