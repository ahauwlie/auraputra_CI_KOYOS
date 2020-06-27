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
				<div class="contact-block">
					<div style="background-color: white; height: 90px;"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.871711628557!2d106.5937773!3d-6.23497895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc2623076c0f%3A0x5eb7d12a71a0705c!2sYasmin%20Hotel%20Karawaci!5e0!3m2!1sid!2sid!4v1593197106342!5m2!1sid!2sid" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-5">
								<div class="heading-smallest heading-smallest heading-smallest_has-offset heading-smallest heading-smallest_size_small">Information</div>
								<div class="contact-block__place">Kota, <span class="contact-block__place-marker">Negara</span></div>
								<div class="contact-block__text">
									<p>Alamat<br />Alamat</p>
									<p><a href="tel:+00853462188">+62 123-4567-8910</a></p>
									<p><a href="#"><span class="__cf_email__">email@email.com</span></a></p>
								</div>
								<a href="#" class="contact-block__link">Map Direction<span class="contact-block__link-icon icon-chevron-right"></span></a>
							</div>
							<div class="col-12 col-lg-7">
								<div class="heading-smallest heading-smallest heading-smallest_has-offset heading-smallest heading-smallest_size_small">get in touch</div>
								<form class="contact-block__form">
									<div class="row">
										<div class="col-12 col-sm-6"><input type="text" placeholder="Name" class="contact-block__input-text" /></div>
										<div class="col-12 col-sm-6"><input type="text" placeholder="Email" class="contact-block__input-text" /></div>
										<div class="col-12"><textarea placeholder="Here goes your message" class="contact-block__input-textarea"></textarea><button class="contact-block__submit">Send Message<span class="contact-block__submit-icon icofont-caret-right"></span></button></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php echo $footer; ?>
		</div>
		<?php echo $js; ?>
	</body>
</html>