		
		<!--=================================  FOOTER START ==========================================-->
		
		<footer class="section-padding section-1-bg footer-section" id="contact">
			<div class="container">			
 				<div class="text-center footer-div">
					<div class="col-sm-12">
						<div class="row contact-row">
							
							<?php 
								$contact_item = get_field('contact_item', 'options');
							?>
							<?php 
								foreach($contact_item as $contact) :
							?>
							<div class="col-xs-6 col-sm-3 contact-space contact-space-1">
								<img src="" alt="48x48x5" />
								<p>1800-234-7689</p>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="separator"></div>
						<ul class="social-icon">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
						<div class="separator"></div>
						<div class="copyright">
							<p>2017 &copy; All Rights Reserved</p>								
						</div>
					</div>
				</div>
			</div>			
		</footer>		
		
		<!--================================= FOOTER ENDS ==========================================-->		
		
		<!-- POPUP FORM --> 
		<div id="fadeandscale" class="popup-bg">
			<div>	
				<div style="padding:10px 15px 50px 0;">
					<button class="popup_close fadeandscale_close close close-icon-1" title="Close" aria-label="Close"><span aria-hidden="true">x</span></button>
				</div>		
				<div class="popup-bg-pad">
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST" class="popup-form" id="popup-form">
					
					<h2 class="donation-h2">Donation Form</h2>
					
					<div class="row">
						<input class="name col-xs-12 col-sm-12" type="text" name="name" placeholder="Enter Your Name" required autocomplete="off">
						<input class="email col-xs-12 col-sm-12" type="email" name="email" placeholder="Enter Your Email" required autocomplete="off">
						<input class="phoneno col-xs-12 col-sm-12" type="text" name="phoneno" placeholder="Enter Your Phone Number" required autocomplete="off">
						<input class="phoneno col-xs-3 col-sm-3 price" type="text" name="amount" id="amounts" placeholder="Amount" autocomplete="off">
						<p class="col-xs-2 col-sm-2 or p-white">or</p>
						<select name="amount" class="col-xs-7 col-sm-7 price" id="price-1" >
							<option value="0">Choose the amount</option>
							<option value="10">$10</option>
							<option value="20">$20</option>
							<option value="50">$50</option>						
						</select>
						</div>
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="item_name" value="DONATION">
						<input type="hidden" name="business" value="kanimozhi@keenicon.com">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="return" value="http://pennyblacktemplates.com/demo/ws/charity/preview/demo-1.html?success=true">					
						<input type="hidden" name="cancel_return" value="http://pennyblacktemplates.com/demo/ws/charity/preview/demo-1.html?cancel=true">
						
						<div class="row popup-btn-div">
							<input  type="submit" name="submit" id="donate-btn" class="btn donate-bg col-xs-6 col-sm-6" value="Donate Now">
							
							<button class="popup_close fadeandscale_close btn btn-cancel col-xs-6 col-sm-offset-1 col-sm-4" title="Close" aria-label="Close"><span aria-hidden="true">CANCEL</span></button>
							
						</div>
					
				</form>
				</div>
			</div>
		</div>
		
		
		<!-- POPUP MSG BOX -->
		<div id="messageDiv">	
			<div id="content">
				<div id="success_btn">
					<a href="#" class="close close-icon">x</a>
					<div class="cancel-head-pad">
						<h3 class="no-margin">Thank You For Donation</h3>
					</div>
					<div class="text-center">
						<a href="#"><div class="ok-icon close">OK</div></a>
					</div>
				</div>
			</div>

			<div id="content-1">
				<div id="cancel_btn">
					<a href="#" class="close close-icon">x</a>
					<div class="cancel-head-pad">
						<h3 class="no-margin">Sorry, Your Transaction Failed, Please Try Agian.</h3>
					</div>
					<div class="text-center">
						<a href="#"><div class="ok-icon close">OK</div></a>
					</div>
					
				</div>
			</div>
		</div>
		<div id="fade"></div>	
		<?php wp_footer(); ?>	
	</body>
</html>