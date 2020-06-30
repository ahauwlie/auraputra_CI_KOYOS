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
				<div class="main-slide main-slide main-slide_size_large">
					<div class="parallax-image main-slide__image">
						<div data-rellax-speed="-3" data-rellax-percentage="0.5" style="background-image: url(<?php echo $lol['img_4_pro']; ?>);" class="parallax-image__image"></div>
					</div>
					<div class="main-slide__container container" style="color: black;">
						<div class="main-slide__slide-inner">
							<div class="main-slide__subtitle-wrapper">
								<div class="main-slide__subtitle"><?php echo $lol['kategori_pro']; ?></div>
							</div>
							<div class="main-slide__title-wrapper">
								<div class="main-slide__title"><?php echo $lol['judul_pro']; ?></div>
								<div class="main-slide__label-wrapper">
									<div class="main-slide__label">Telah selesai pada</div>
									<div class="main-slide__label-value"><?php echo $lol['tanggal_pro']; ?></div>
								</div>
							</div>
							<div class="main-slide__text-wrapper">
								<div class="main-slide__text"><?php echo $lol['mini_text_pro']; ?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="project-detail">
					<div class="container">
						<div class="back-link"><a href="#" class="back-link__link"><span class="back-link__icon icon-chevron-left"></span>Back to Projects Image</a></div>
						<div class="project-detail__head-items">
							<div class="row">
								<div class="col-12 col-lg-4">
									<div class="project-detail__head-item"><strong>Location: <?php echo $lol['lokasi_pro']; ?></strong> </div>
									<div class="project-detail__head-item"><strong>Client: <?php echo $lol['nama_client_pro']; ?></strong> </div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="project-detail__head-item"><strong>Completed: <?php echo $lol['tanggal_pro']; ?></strong> </div>
									<div class="project-detail__head-item"><strong>Author: <?php echo $lol['id_adm']; ?></strong> </div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="project-detail__head-item"><strong>Bebas:</strong> bebas</div>
									<div class="project-detail__head-item"><strong>Bebas:</strong> bebas</div>
								</div>
							</div>
						</div>
						<div class="project-detail__title"><?php echo $lol['judul_pro']; ?></div>
						<div class="project-detail__text" style="text-indent: 50px;">
							<p><?php echo $lol['isi_pro']; ?></p>
						<div class="simple-slider">
							<button type="button" class="simple-slider__control simple-slider__control_prev icon-chevron-left"><span class="visually-hidden">prev</span></button><button type="button" class="simple-slider__control simple-slider__control_next icon-chevron-right"><span class="visually-hidden">next</span></button>
							<div class="simple-slider__slider swiper-container">
								<div class="swiper-wrapper">
									<div class="simple-slider__slide swiper-slide"><img src="<?php echo $lol['img_1_pro']; ?>" alt="" /></div>
									<div class="simple-slider__slide swiper-slide"><img src="<?php echo $lol['img_3_pro']; ?>" alt="" /></div>
									<div class="simple-slider__slide swiper-slide"><img src="<?php echo $lol['img_2_pro']; ?>" alt="" /></div>
								</div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
						<a href="<?php echo site_url('project'); ?>" class="project-detail__footer-link project-detail__footer-link_inverted">Let’s work together !</a>
					</div>
				</div>
			</main>
			<?php echo $footer; ?>
		</div>
		<?php echo $js; ?>
	</body>
</html>