<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/slideshow.css">
		<script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
	<body>
		<?php include "header.php" ?>
		<div class="padding-left">
			<h1>Contactez-nous</h1>
			<input type="text" name="nom" placeholder="Nom" class="email"/><br>
		  	<input type="email" name="email" placeholder="Email" class="email"/><br>
		  	<input type="text" name="sujet" placeholder="Sujet" class="email"/><br>
		  	<textarea name="message" class="message" placeholder="Message"></textarea><br>
		  	<a href="#" class="btn">Envoyer</a>
		</div>

        <!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="EJ6S4DBFCSAQL">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>-->


        <?php include "footer.php" ?>

	</body>
</html>