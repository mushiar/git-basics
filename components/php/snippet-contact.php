<section id="form_section" class="col-xs-12 col-sm-7 col-md-6 col-sm-offset-2 col-md-offset-3">
	<div class="col-xs-offset-2 col-sm-offset-4"><h2>Contact Us</h2></div><br>
	<form role="form">
		<div class="form-group">
			<label for="name">Name</label>
			<input class="form-control" type="text" placeholder="Your name" id="name"></input>
		</div>
		<div class="form-group">
			<textarea class="form-control" placeholder="Your message" rows="4"></textarea>
		</div>
		<div class="checkbox" id="mail_check">
			<label>
				<input type="checkbox" data-toggle="collapse" data-target="#subscribe_mail">Subscribe to our newsletter</input>
			</label>
		</div>
		<div class="form-group collapse" id="subscribe_mail">
			<label for="email">Email</label>
			<input class="form-control" type="email" placeholder="Your email id please!" id="email"></input>
		</div>
		<button type="reset" class="btn btn-danger">Reset</button>
		<button type="submit" class="btn btn-success">Send</button>
	</form><br>
</section><!-- form_section -->