	<!DOCTYPE html>
	<html>
		<head>
			<title>Stripe Payment</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<style>
			body { margin-top:10%; }
				.panel-title {display: inline;font-weight: bold;}
				.checkbox.pull-right { margin: 0; }
				.pl-ziro { padding-left: 0px; }
			</style>
		</head>
	<body>
	
	<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-offset-4 col-md-4">
			<form role="form" action="/your-charge-code" method="POST" id="payment-form">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Payment Details
						</h3>
						<div class="checkbox pull-right">
							<label>
								<input type="checkbox" />
								Remember
							</label>
						</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="cardNumber">
								CARD NUMBER</label>
							<div class="input-group">
								<input type="text" class="form-control" id="cardNumber" data-stripe="number" placeholder="Valid Card Number"
									required autofocus />
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-7 col-md-7">
								<div class="form-group">
									<label for="expityMonth">
										EXPIRY DATE</label>
									<div class="col-xs-6 col-lg-6 pl-ziro">
										<input type="text" class="form-control" id="expityMonth" data-stripe="exp_month" placeholder="MM" required />
									</div>
									<div class="col-xs-6 col-lg-6 pl-ziro">
										<input type="text" class="form-control" id="expityYear" data-stripe="exp_year" placeholder="YY" required /></div>
								</div>
							</div>
							<div class="col-xs-5 col-md-5 pull-right">
								<div class="form-group">
									<label for="cvCode">
										CV CODE</label>
									<input type="password" class="form-control" id="cvCode" data-stripe="cvc"  placeholder="CV" required />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-row form-group">
									<label>
										<span>Billing Zip</span>
											<input type="text" size="6" class="form-control" data-stripe="address_zip" required>
									</label>
								</div>
							</div>
											
						</div>
					</div>
				</div>
             <br/>
            <input type="submit" class="submit btn btn-success btn-lg btn-block" value="Pay Now">
        </div>
	</form>
    </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript">

	  //Stripe.setPublishableKey(pk_test_D20DWEdTOx2CZhNhh1bvLPfu');
      
      Stripe.setPublishableKey('pk_test_D20DWEdTOx2CZhNhh1bvLPfu');
	  $(function() {
	  var $form = $('#payment-form');
	  $form.submit(function(event) {
		// Disable the submit button to prevent repeated clicks:
		$form.find('.submit').prop('disabled', true);
		$form.find('.submit').val('Please wait...');

		// Request a token from Stripe:
		Stripe.card.createToken($form, stripeResponseHandler);
		// Prevent the form from being submitted:
		return false;
	  });
	});
	 function stripeResponseHandler(status, response) {
		 
		 if (response.error) {
			alert(response.error.message);
		 } else {
			$.ajax({
				url: '<?php echo base_url('Stripe/payment/process');?>',
				data: {access_token: response.id},
				type: 'POST',
				dataType: 'JSON',
				success: function(response){
					console.log(response);
					if(response.success)
					window.location.href="<?php echo base_url('Stripe/payment/success'); ?>";
				},
				error: function(error){
					console.log(error);
				}
			});
			//console.log(response.id);
		}
	 }
	</script>
 
	
    </body>
</html>
