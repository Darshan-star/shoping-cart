<?php include('inc/header.php');  ?>

<?php include('inc/nav.php');  ?>
 
 

<div class="container text-white">

    <section id="content">
		<div class="content-blog">
					<div class="page_header text-center  py-5">
						<h2>Shop - Checkout</h2>
						<p>Get the best kit for smooth shave</p>
					</div>

<div class="container ">
			<div class="row">
				<div class="col-md-6">
					<div class="billing-details">
						<h3 class="uppercase">Billing Details</h3>
						<div class="space30"></div>
						<form>
							<label class="">Country </label>
							<select class="form-control">
								<option value="">Select Country</option>
								<option value="AX">Aland Islands</option>
								<option value="AF">Afghanistan</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
							</select>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-6">
									<label>First Name </label>
									<input class="form-control" placeholder="" value="" type="text">
								</div>
								<div class="col-md-6">
									<label>Last Name </label>
									<input class="form-control" placeholder="" value="" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							<label>Company Name</label>
							<input class="form-control" placeholder="" value="" type="text">
							<div class="clearfix space20"></div>
							<label>Address </label>
							<input class="form-control" placeholder="Street address" value="" type="text">
							<div class="clearfix space20"></div>
							<input class="form-control" placeholder="Apartment, suite, unit etc. (optional)" value="" type="text">
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-4">
									<label>Town / City </label>
									<input class="form-control" placeholder="Town / City" value="" type="text">
								</div>
								<div class="col-md-4">
									<label>County</label>
									<input class="form-control" value="" placeholder="State / County" type="text">
								</div>
								<div class="col-md-4">
									<label>Postcode </label>
									<input class="form-control" placeholder="Postcode / Zip" value="" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							<label>Email Address </label>
							<input class="form-control" placeholder="" value="" type="text">
							<div class="clearfix space20"></div>
							<label>Phone </label>
							<input class="form-control" id="billing_phone" placeholder="" value="" type="text">
						</form>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="billing-details">
						<h3 class="uppercase">Ship to a different address?</h3>
						<div class="space30"></div>
						<form>
							<label class="">Country </label>
							<select class="form-control">
								<option value="">Select Country</option>
								<option value="AX">Aland Islands</option>
								<option value="AF">Afghanistan</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
							</select>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-6">
									<label>First Name </label>
									<input class="form-control" placeholder="" value="" type="text">
								</div>
								<div class="col-md-6">
									<label>Last Name </label>
									<input class="form-control" placeholder="" value="" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							<label>Company Name</label>
							<input class="form-control" placeholder="" value="" type="text">
							<div class="clearfix space20"></div>
							<label>Address </label>
							<input class="form-control" placeholder="Street address" value="" type="text">
							<div class="clearfix space20"></div>
							<input class="form-control" placeholder="Apartment, suite, unit etc. (optional)" value="" type="text">
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-4">
									<label>Town / City </label>
									<input class="form-control" placeholder="Town / City" value="" type="text">
								</div>
								<div class="col-md-4">
									<label>County</label>
									<input class="form-control" value="" placeholder="State / County" type="text">
								</div>
								<div class="col-md-4">
									<label>Postcode </label>
									<input class="form-control" placeholder="Postcode / Zip" value="" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							<label>Order Notes</label>
							<textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." rows="4" cols="5"></textarea>
						</form>
					</div>
				</div>
			</div>
			
			<div class="space30"></div>
			<h4 class="heading">Your order</h4>
			
			<table class="table table-bordered extra-padding bg-white text-dark">
				<tbody>
					<tr>
						<th>Cart Subtotal</th>
						<td><span class="amount">£190.00</span></td>
					</tr>
					<tr>
						<th>Shipping and Handling</th>
						<td>
							Free Shipping				
						</td>
					</tr>
					<tr>
						<th>Order Total</th>
						<td><strong><span class="amount">£190.00</span></strong> </td>
					</tr>
				</tbody>
			</table>
			
			<div class="clearfix space30"></div>
			<h4 class="heading">Payment Method</h4>
			<div class="clearfix space20"></div>
			
			<div class="payment-method mt-5">
                <form>
				<div class="row d-flex">
				
						<div class="col-md-4">
							<input name="payment" id="radio1" class="mr-2 css-checkbox" type="radio"><span>Direct Bank Transfer</span>
							<div class="space20"></div>
							<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
						</div>
						<div class="col-md-4">
							<input name="payment" id="radio2" class="mr-2 css-checkbox" type="radio"><span>Cheque Payment</span>
							<div class="space20"></div>
							<p>Please send your cheque to BLVCK Fashion House, Oatland Rood, UK, LS71JR</p>
						</div>
						<div class="col-md-4">
							<input name="payment" id="radio3" class="mr-2 css-checkbox" type="radio"><span>Paypal</span>
							<div class="space20"></div>
							<p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account</p>
						</div>
				
                </div>
            </form>
				<div class="space30"></div>
				<form>
					<input name="checkboxG2" id="checkboxG2" class="mr-2 css-checkbox " type="checkbox"><span>I've read and accept the <a href="#">terms &amp; conditions</a></span>
				</form>
				<div class="space30"></div>
				<a href="#" class="button btn-lg">Pay Now</a>
			</div>
        </div>		
        
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn">Pay Now</button>
            </div>
        </div>
		
		</div>
	</section>
</div>








<?php include('inc/footer.php');  ?>


