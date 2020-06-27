<?php
    /**
     * Created by PhpStorm.
     * User: Hauw
     * Date: 9/26/2018
     * Time: 9:11 AM
     */
    defined('BASEPATH') OR exit('No direct script access allowed');
    ?>
<!DOCTYPE html>
<html lang="en">
	 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aura Putra Wijaya</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400" rel="stylesheet">
        <?php echo $css; ?>
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="../favicons/site.webmanifest">
        <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    </head>
	<body class="page">
		<div class="page__inner animsition">
			<?php echo $header; ?>
			<main>
				<div class="error-block">
					<div style="background-color: white; height: 90px;"></div>
					<div class="container">
						<div class="error-block__body">
							<img src="<?php echo base_url('/inti/img/error-image.jpg'); ?>" alt="" class="error-block__image" />
							<div class="error-block__title">Ohh Tidakkkk! Aku nyasarrrr!</div>
							<div class="error-block__text">Tolong kembalikan aku ke <a href="<?php echo site_url('home'); ?>">Homepage.</a></div>
						</div>
					</div>
				</div>
			</main>
			<?php echo $footer; ?>
		</div>
		<?php echo $js; ?>
	</body>
</html>