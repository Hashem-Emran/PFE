<!DOCTYPE html>
<html>
<head>
	<title>Checkout Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <style>
        body {
  background-color: #F8F9FA
}
    </style>
</head>

<body>

		<div class="col-md-4 container bg-default">
			
			<h4 class="my-4">
					Billing Address
			</h4>
			
			<form action="{{route('commande',['pass'])}}" method="get" >
				<div class="form-row">
					<div class="col-md-6 form-group">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control" id="firstname" placeholder="First Name">
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>

					<div class="col-md-6 form-group">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control" id="lastname" placeholder="Last Name">
						<div class="invalid-feedback">
							Valid last name is required.
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="username">Username</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">@</span>
							</div>	
							<input type="text" class="form-control" id="username" placeholder="Username" required>
							<div class="invalid-feedback">
								Your username is required.
							</div>
						</div>
				</div>

				<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="you@example.com" required>
				</div>

				<div class="form-group">
					<label for="adress">Address</label>
					<input type="text" class="form-control" id="adress" placeholder="1234 Main Street" required>
					<div class="invalid-feedback">
						Please enter your shipping address.
					</div>
				</div>



				<div class="row">
					<div class="col-md-4 form-group">
						<label for="country">Country</label>
						<select type="text" class="form-control" id="country">
							<option value>Choose...</option>
							<option>Morocco</option>
						</select>
						<div class="invalid-feedback">
							Please select a valid country.
						</div>
					</div>

					<div class="col-md-4 form-group">
						<label for="city">City</label>
						<select type="text" class="form-control" id="city">
							<option value>Choose...</option>
							<option>Martil</option>
						</select>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
						
					<div class="col-md-4 form-group">
						<label for="postcode">Postcode</label>
						<select type="text" class="form-control" id="postcode">
							<option value>Choose...</option>
							<option>1000</option>
						</select>
						<div class="invalid-feedback">
							Postcode required.
						</div>
					</div>
				</div>

				<hr>
				


				<hr>

				<h4 class="mb-4">Payment</h4>
				
				<div class="form-check">
					<input type="radio" class="form-check-input" id="credit" name="payment-method" checked required>
					<label for="credit" class="form-check-label">Credit Card</label>
				</div>

				<div class="form-check">
					<input type="radio" class="form-check-input" id="debit" name="payment-method" required>
					<label for="debit" class="form-check-label">Debit Card</label>
				</div>

				<div class="form-check">
					<input type="radio" class="form-check-input" id="paypal" name="payment-method"  required>
					<label for="paypal" class="form-check-label">PayPal</label>
				</div>
			
				<div class="row mt-4">
					<div class="col-md-6 form-group">
							<label for="card-name">Name on card</label>
							<input type="text" class="form-control" id="card-name" placeholder required>
							<div class="invalid-feedback">
								Name on card is required
							</div>
						</div>

						<div class="col-md-6 form-group">
							<label for="card-no">Card Number</label>
							<input type="text" class="form-control" id="card-no" placeholder required>
							<div class="invalid-feedback">
								Credit card number is required
							</div>
						</div>
				</div>

				<div class="form-row">
					<div class="col-md-5 form-group">
							<label for="expiration">Expire Date</label>
							<input type="text" class="form-control" id="card-name" placeholder required>
							<div class="invalid-feedback">
								Expiration date required
							</div>
						</div>
					

					<div class="col-md-5 form-group">
							<label for="ccv-no">Security Number</label>
							<input type="text" class="form-control" id="sec-no" placeholder required>
							<div class="invalid-feedback">
								Security code required
							</div>
					</div>
				</div>

					<hr class="mb-4">
				
					<button class="btn btn-primary bt-lg btn-block" type="submit">Continue to Checkout</button>
                    <button  class="btn btn-primary bt-lg btn-block" type="submit" ><a href="{{route('cltcart')}}">cancel</a></button>
			</form>
		</div>
</body>
</html>
