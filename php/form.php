<?php include('form_process.php'); ?>

<link rel="stylesheet" media="screen" type="text/css" href="../css/form.css">

<form id="contact" method="post" name="emailform" action="<?= $_SERVER['PHP_SELF']; ?>">
	<h2>Say Hi!</h2>
	<fieldset>
		<input type="text" id="name" name="name" placeholder="Your name.." value="<?= $name ?>" tabindex="1">
		<span class="error"><?= $name_error ?></span>
	</fieldset>
	<fieldset>
		<input type="text" id="email" name="emai" placeholder="Your email.." value="<?= $email ?>" tabindex="3">
		<span class="error"><?= $email_error ?></span>
	</fieldset>
	<fieldset>
		<textarea type="text" id="message" name="message" placeholder="Write something.." style="height:200px" value="<?= $message ?>" tabindex="5"></textarea>
	</fieldset>
	<fieldset>
		<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
	</fieldset>
	<div class = "success"><?= $success; ?></div>
</form>