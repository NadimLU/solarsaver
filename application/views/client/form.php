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
  <!--  -->

  
<!--
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />  
-->
    <!-- Custom style links -->
    <link rel="stylesheet" href="<?php base_url();?>assets/frontend/assets/css/form.css">
    <style>
        #map {
    width: 100%;
    height: 200px;
        }
        .controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }
        #searchInput {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 50%;
        }
        #searchInput:focus {
            border-color: #4d90fe;
        }
    </style>
 

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

                    <li role="presentation" class="active">
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

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Invoice">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

           
            <?php  echo form_open('form/FormData', array('id' => 'myForm', 'role' => 'role'));?>
                <div class="tab-content">
                    <div class="tab-pane" role="tabpanel" id="step2">
                    <div class="step2">
                    <div class="col-md-12 text-center">
                        <h2>Start Reservation</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <label for="exampleInputEmail1">Where should we go?</label><br><br>
                          <input id="searchInput" class="controls" type="text" placeholder="Enter a location">
                    <div id="map"></div>
                     </div>
                    </div>
                    <div class="row" id="geoData">
                        <div class="col-md-8 col-md-offset-2">
                             <ul id="geoData" class="list-group">
                            <li class="list-group-item"><label for="exampleInputEmail1">Street Address:</label> <input type="hidden"  name="street_address" id="addressfiled" value=""><span id="location"></span></li>
                            <li class="list-group-item"><label for="exampleInputEmail1">Postal Code:</label><input type="hidden" name="zip" id="postal_code_filed"><span id="postal_code"></span></li>
                            <li class="list-group-item"> <label for="exampleInputEmail1">Country:  </label><input type="hidden" name="country" id="country_filed"><span id="country"></span></li>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                         </ul>
                            
                        </div>
                    </div>
                    
                   
                </div> 
                    </div>
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <div class="step_21">
                                <div class="col-md-12 text-center">
                                    <h2>Profile</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="exampleInputEmail1">Lets get started</label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                       
                                        <div class="col-md-6 address">
                                            
                                            <input type="text" name="first_name" data-toggle="collapse" data-target="#demo" class="form-control" id="exampleInputEmail1" placeholder="John" required>
                                            <label for="exampleInputEmail1">First Name</label>
                                        </div>
                                        <div class="col-md-6 address">
                                            
                                            <input type="text" class="form-control" name="last_name" id="exampleInputEmail1" placeholder="Smith" required="required">
                                            <label for="exampleInputEmail1">Last Name</label>
                                            
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div id="demo" class="collapse">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <label for="exampleInputEmail1">Company Name</label>
                                            <input type="text" class="form-control" name="company_name" id="exampleInputEmail1" placeholder="Optional" required="required">
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="johndoe@example.com" required="required">
                                            <label for="exampleInputEmail1">NO SPAM - WE TAKE PRIVACY SERIOUS</label>
                                            
                                        </div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="col-md-6 address">
                                                <label for="exampleInputEmail1">Phone Number</label><br>
                                                <div class="col-md-4 address">
                                                    <input type="number" class="form-control" name="area_code" id="exampleInputEmail1" placeholder="" required="required">
                                                    <label for="exampleInputEmail1">Area Code</label>
                                                </div>
                                                <div class="col-md-1 address text-center"> <span>-</span> </div>
                                                <div class="col-md-6 address">
                                                    <input type="number" class="form-control" name="phone_number" id="exampleInputEmail1" placeholder="" required="required">
                                                    <label for="exampleInputEmail1">Phone Number</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="step-22">
                                <div class="col-md-12 text-center">
                                    <h2>Choose Time</h2>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="exampleInputEmail1">When should we come service your car? </label><br>
                                        <div class="col-md-6 address">
                                            <input type="date" name="reservation_date" class="form-control" id="exampleInputEmail1" placeholder=""  min="2017-01-01" required="required">
                                            <label>Date</label>
                                        </div>
                                        <div class="col-md-6 address">
                                            <input type="time" name="reservation_time" class="form-control" id="exampleInputEmail1" placeholder="" min="9" max="6" required="required">
                                            <label>Time</label>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12 text-left alert alert-danger"  role="alert">
                                            <p>* We only operate within business hours Monday- Friday (9am - 5pm)</p>
                                            
                                        </div>
                                        
                                        
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                                
                                </div>
                                

                                
                                
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="step33">
                            <div class="col-md-12 text-center">
                                    <h2>Services</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label>Year/Make/Model</label>
                                    <input type="text" name="" class="form-control" id="exampleInputEmail1" placeholder="">
                                    <label for="exampleInputEmail1">Car details</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label>Car Tinting / Headlight Services </label>
                                    <?php foreach($vehicledata as $vehicle_name => $res): ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default panel-table">
                                              <div class="panel-heading">
                                                <div class="row">
                                                <?php foreach($res as $vd): ?>
                                                <?php endforeach ;?>  
                                                  <div class="col col-xs-6">
                                                  
                                                    <div class="pull-left" style="padding-right:25px"><img src="<?php echo site_url($vd->vehicle_avatar);?>" width="80" height="60"></div>
                                                   
                                                    <div class="checkbox pull-center">
                                                      <label class="radio-inline"><input type="radio" name="vehicle_name" id="enableAll" value="<?php echo $vd->vehicle_name; ?>"><?php echo $vehicle_name; ?></label>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                            
                                              </div>
                                              <fieldset id="myFieldset">
                                              <div class="panel-body">
                                             
                                                <table class="table table-striped table-bordered table-list">
                                                  <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="hidden-xs">Options</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                    </tr> 
                                                  </thead>
                                                  <tbody>
                                                  
                                                  <?php foreach($res as $vd): ?>
                                                          <tr>
                                                            <td></td>
                                                            <td class="hidden-xs"><?php echo $vd->service_name; ?></td>
                                                            <td>$<?php echo $vd->price; ?></td>
                                                            <td>
                                                                <div class="form-group">
                                                                <?php //echo "<select class='form-control' id='sel1' onchange=addToCart(this.value)>"; ?>
                                                                  <select class="form-control" id="field" onchange="addToCart(this.value)">
                                                                    <option value="<?php echo $vd->service_id."|".$vd->price."|".$vd->service_name."|0";?>" selected>Select Quantity</option>
                                                                   <?php //echo "<option value='" . $vd->service_id . "|" . $vd->price . "|" . $vd->service_name . "|" .'1'. "'>" . 1 ."</option>";
                                                                   for($counter = 1; $counter <=10; $counter++) {
                                                                   ?>
                                                                    <option value="<?php echo $vd->service_id."|".$vd->price."|".$vd->service_name."|".$counter;?>"><?=$counter?></option> 
                                                                   <?php
                                                                   }
                                                                   ?>
                                                                  </select>
                                                                </div>
                                                            </td>
                                                          </tr>
                                                    <?php endforeach;?>      
                                                        </tbody>
                                                </table>

                                              </div>
                                              </fieldset>                     
                                            </div>


                                        </div>
                                    </div>
                                    <?php endforeach ;?>  
                                </div>
                            </div>
                            <br><br><br>


                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label>Enter Coupon</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="If any">
                                    
                                </div>
                            </div>
                            
                            <br>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-md-6 address">
                                        <label>Total: </label>
                                    </div>
                                    <div class="col-md-6 address">
                                        <label id="cartTable"></label>
                                        <input type="button" onclick="resetCart();" class="btn btn-warning btn-sm pull-right" value="Reset">
                                 
                                    </div>
                                    <hr>    
                                </div>
                                
                            </div>
                            
   
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <!--  -->
                            <li><input type="submit" name="submit" class="btn btn-primary btn-info-full" value="Check Out"></li>
                        </ul>
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

  <script type="text/javascript">
  
  <?php
	@$cartDataSession = $this->session->userdata('cart');
	if($cartDataSession != '') {
	?>

	var cartArray = <?php echo $this->session->userdata('cart'); ?>;

	<?php
	} else {
	?>

	var cartArray = [];

	<?php
	}

	?>
	createCart();

	function addToCart(productDetails) {

		console.log(productDetails);
		console.log(cartArray);
		var productDetailsArray = productDetails.split("|");

		var productID = Number(productDetailsArray[0]);
		var productPrice = Number(productDetailsArray[1]);
		var productName = productDetailsArray[2];
        var ProductQuantity = productDetailsArray[3];
        // if(ProductQuantity == "0"){
        //     removeFromCart();
        // }
        //console.log(ProductQuantity*productPrice);
        
		var itemExists = false;
		
		if(cartArray.length > 0) {
            
                        for(var i = 0; i < cartArray.length; i++) {
            
                            if(cartArray[i].id == productID) {
            
                                itemExists = true;

                                if(ProductQuantity == "0"){
                                    cartArray.splice(i,1);
                                } else {
                                    cartArray[i].qnty = ProductQuantity;
                                }
                                break;
            
                            }
            
                        }
            
                    }
            
                    if(itemExists == false) {
            
                        var singleProductArray = {};
                        singleProductArray.id = productID;
                        singleProductArray.price = productPrice;
                        singleProductArray.name = productName;
                        singleProductArray.qnty = ProductQuantity;
                        cartArray.push(singleProductArray);
            
                    }
            
                    setCartToSession();
                    createCart();
                    // console.log(cartArray);
                    // console.log(cartDataJSON);
                }
            
                function setCartToSession(cartDataJSON) {
            
                    var cartDataJSON = JSON.stringify(cartArray);
            
                    var xhttp = new XMLHttpRequest();
            
                    xhttp.open("POST", "<?php echo base_url(); ?>Cart/setDataToSession", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("cartData=" + cartDataJSON);
            
                }
	function createCart() {
		//console.log(cartArray);

		var cartHTML =  '<div class="col-md-6 address">'+
                        ' <label></label>'+
                        '</div>';

		if(cartArray.length == 0) {

			cartHTML += '<div class="col-md-6 address">'+
                        ' <label>$0.00</label>'+
                        '</div>';
		} else {

			var grandTotal = 0;

			for (var i = 0; i < cartArray.length; i++) {

				var price = Number(cartArray[i].qnty * cartArray[i].price).toFixed(2);
				grandTotal += Number(price);
				
			}
            cartHTML += '<div class="col-md-6 address">'+
                             ' <label>$' + Number(grandTotal).toFixed(2); + '</label>'+
                             '</div>';

			
		}
        // localStorage.setItem("grandTotal",Number(grandTotal).toFixed(2));
			
	    // var grandTotal = localStorage.getItem("grandTotal");

       //document.getElementById('cartTable').innerHTML = cartHTML;
        //console.log(grandTotal);
       
		document.getElementById('cartTable').innerHTML = cartHTML;
	
	}
    
	function increaseQnty(cartIndex) {

		cartArray[cartIndex].qnty = cartArray[cartIndex].qnty + 1;
		setCartToSession();
		createCart();

	}
    function resetCart(){


		cartArray = [];
		setCartToSession();
        //document.getElementById("myForm").reset();
      
        // var field= document.getElementById('field');
        // field.value= field.defaultValue;
         
		createCart();
        window.location.reload();
        

	}

	function decreaseQnty(cartIndex) {

		if(cartArray[cartIndex].qnty == 1) {

			cartArray.splice(cartIndex,1);

		} else {

			cartArray[cartIndex].qnty = cartArray[cartIndex].qnty - 1;

		}

		setCartToSession();
        createCart();
        
        

	}
    var myFieldset = document.getElementById("myFieldset");
disableAll.onclick = function () {  alert('true');}//myFieldset.disabled = true; }
enableAll.onclick = function () { alert('false');}//myFieldset.disabled = false; }
</script>  

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBstIcPIqFDHl-lbWUi4zJvZM9WzBfFSws&libraries=places&callback=initMap" async defer></script>
<script>
    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -33.8688, lng: 151.2195},
      zoom: 13
    });
    var input = document.getElementById('searchInput');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });

    autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }
  
        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
        marker.setIcon(({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
    
        var address = '';
        if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    
        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);
      
        //Location details
        for (var i = 0; i < place.address_components.length; i++) {
            if(place.address_components[i].types[0] == 'postal_code'){
                var postal_code =  document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
                $("#postal_code_filed").val(postal_code);
            }
            if(place.address_components[i].types[0] == 'country'){
                var country = document.getElementById('country').innerHTML = place.address_components[i].long_name;
                $("#country_filed").val(country);
            }
        }
        var address = document.getElementById('location').innerHTML = place.formatted_address;
        $("#addressfiled").val(address);
        document.getElementById('lat').innerHTML = place.geometry.location.lat();
        document.getElementById('lon').innerHTML = place.geometry.location.lng();
    });
}
</script>


 
      
  </body>
</html>