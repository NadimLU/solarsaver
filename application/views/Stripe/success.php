<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css" crossorigin="anonymous">
    
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<!--
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />  
-->
    <!-- Custom style links -->
    <link rel="stylesheet" href="<?php base_url();?>assets/frontend/assets/css/form.css">
    <link rel="stylesheet" href="<?php base_url();?>assets/frontend/styles.css">
 

    <style>
      
        
        .panel-title {display: inline;font-weight: bold;}
		.checkbox.pull-right { margin: 0; }
		.pl-ziro { padding-left: 0px; }
    </style>
    
   
  </head>
  <body>
      <div class="container">
    	<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="disabled">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Reservation">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Contact Info">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Services">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Checkout">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="active">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Invoice">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

           
           
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
					<div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="invoice-title">
                                            <?php foreach($customer_details as $cd): ?>
                                                <h2>Invoice</h2><h3 class="pull-right">Order # <?php echo $cd->reference_no; ?></h3>
                                            <?php endforeach;  ?>      
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <address>
                                                    <?php foreach($customer_details as $cd): ?>
                                                    <strong>Billed To:</strong><br>
                                                        <?php echo $cd->first_name." ".$cd->last_name; ?><br>
                                                        <?php echo $cd->street_address; ?><br>
                                                        <?php echo $cd->zip; ?><br>
                                                        <?php echo $cd->country; ?><br>
                                                       
                                                    </address>
                                                    <?php endforeach;  ?>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                <?php foreach($customer_details as $cd): ?>
                                                <strong>Billed Fromo:</strong><br>
                                                    <?php echo ""//$cd->first_name." ".$cd->last_name; ?><br>
                                                    <?php echo "11340"; //$cd->street_address; ?><br>
                                                    <?php echo "Lakefield Dr";//$cd->street_address_line2; ?><br>
                                                    <?php echo "Suite 200, Johns Creek"; //$cd->city.", ".//$cd->state; ?><br>
                                                    <?php echo "GA 30097";//$cd->zip; ?><br>
                                                     <?php echo "Email: robert@protospan.com";//$cd->zip; ?><br>
                                                </address>
                                                <?php endforeach;  ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-xs-6 text-right">
                                                    <address>
                                                        <strong>Order Date:</strong><br>
                                                        <?php foreach($customer_details as $cd): ?>
                                                        <?php echo date("d F, Y", strtotime($cd->reservation_date)); ?> 
                                                       <?php echo date("h:i A", strtotime($cd->reservation_time)); ?>
                                                        <?php endforeach ; ?>
                                                        <br><br>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-condensed">
                                                            <thead>
                                                                <tr>
                                                                    <td><strong>Item</strong></td>
                                                                    <td class="text-center"><strong>Price</strong></td>
                                                                    <td class="text-center"><strong>Quantity</strong></td>
                                                                    <td class="text-right"><strong>Totals</strong></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($order_details as $od): ?>
                                                                <tr>
                                                                    <td><?php echo $od->product_name; ?></td>
                                                                    <td class="text-center">$<?php echo $od->product_unit_price;  ?></td>
                                                                    <td class="text-center"><?php echo $od->product_quantity ?></td>
                                                                   
                                                                </tr>
                                                                <?php endforeach;  ?>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center"><strong>Total</strong></td>
                                                                    <td class="no-line text-right">$<?php echo $od->grand_total; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
													
                                                </div>
                                            </div>
											<a class="btn btn-success" href="<?php echo site_url('form/another_order');?>" >Back for another order !! Click Here</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step2">
                           
                        </div>
                        
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <div class="step4">
                         
                            
                       
                        
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="step55">
						</div>
                    <div class="clearfix"></div>
                </div>
           
            <?php echo form_close(); ?>
        </div>
    </section>
    </div>

      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Include Required Prerequisites -->
<!--
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
     
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
-->
      

      
      <script type="text/javascript">
        $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});
 </script>
<script>
	function preventBack(){

		window.history.forward();
	}
	setTimeout("preventBack()", 0);
	windows.onunload = function(){null} 
		

</script>
 
      
  </body>
</html>