<!--Map-->
<div id="service"  class="container-fluid">
            <div class="container heading-block">
                <h3>Our Location</h3>
                <div class="divider divider-center ">
                   <img src="assets/image/hammers.png">
                    <span style="font-family: 'Crimson Text', serif !important;">
                       Mahfuz Photography
                    </span>    
                </div>        
            </div>        
        </div>
    

    <div style="margin-top:5%" class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-12">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ-wlogSpVUDcRUhavAlSatqM&key=AIzaSyCGz8WzqxQw1OwHWey3LCTjqKFG9feCxP4"></iframe>
            </div>
          

        </div>
    </div>

<!--Address and form-->
 <div id="service"  class="container-fluid">
            <div class="container heading-block">
                <h3>Contact Us</h3>
                <div class="divider divider-center ">
                   <img src="assets/image/hammers.png">
                    <span style="font-family: 'Crimson Text', serif !important;">
                       Contact Us For Details
                    </span>    
                </div>        
            </div>        
        </div>

<div style="margin-top:5%"  class="container">
    <div class="row">
        <div class="col-md-8">
        
            <div class="well well-sm form_back">
            <div class="success" style="color:#D4AF37;font-size:18px;text-align:center"></div>
                <?php echo form_open('contact/contact_us', array('class' => 'cform')); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Me</button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<script>
					$(document).ready(function(){

						$('form.cform').on('submit', function(form){
							form.preventDefault();
							var URL = '<?php echo site_url('contact/contact_us') ?>';
							$.post(URL , $('form.cform').serialize(), function(data){

							$('div.success').html(data);
							$("#loading").load('#main-contact-form');
				
							setTimeout(function () { window.location.reload(); }, 3000)
							})
							
							
						});

					});
				</script>

