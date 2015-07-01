<?php include('../includes/header.php'); ?>

<div class="container">
	<h5 class="page-title"><strong>Contact</strong></h5>
	
	<h2 class="u-centered"><strong>Contact us today.</strong></h2><br>
	<p class="u-centered">Enquiries are completely confidential and without obligation.</p><br><br>

	<form class="contact-form" name="contact-form" method="POST" action="submit.php">
		<fieldset>
			<div id="firstname-entry">
				<label for="firstname"><strong>First Name <span class="asterisk">*</span></strong></label>
				<input type="text" id="firstname" name="firstname" class="text-input" tabindex="16" required><br>
			</div>
			
			<div id="lastname-entry">
				<label for="lastname"><strong>Last Name <span class="asterisk">*</span></strong></label>
				<input type="text" id="lastname" name="lastname" class="text-input" tabindex="17" required><br>
			</div>
		</fieldset>							

		<div id="email-entry">
			<label for="email"><br><strong>Email <span class="asterisk">*</span></strong></label>
			<input type="text" id="email" name="email" class="text-input" tabindex="18" required>
		</div>
		
		<div id="comment-entry">
			<label for="comment"><strong>Comment <span class="asterisk">*</span></strong></label>
			<textarea id="comment" name="comment" tabindex="19" required></textarea>
		</div>
		<input id="submit" name="submit" type="submit" value="Submit" tabindex="20">
	</form>
</div>

<?php include('../includes/footer.php'); ?>