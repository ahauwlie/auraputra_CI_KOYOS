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
			<div style="background-color: white; height: 90px;"></div>
			<?php echo $header; ?>
			<main>
				<div class="single-post">
					<div class="parallax-image single-post__head">
						<div data-rellax-speed="-3" data-rellax-percentage="0.5" style="background-image:url(<?php echo $lol['img_1_blog']; ?>)" class="parallax-image__image"></div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-8 offset-lg-2">
								<div class="single-post__header">
									<a href="#" class="single-post__category"><?php echo $lol['kategori_blog']; ?></a>
									<div class="single-post__date"><?php echo $lol['tanggal_blog']; ?></div>
								</div>
								<div class="single-post__title"><?php echo $lol['judul_blog']; ?></div>
								<blockquote class="quote single-post__quote">
									<div class="quote__text"><?php echo $lol['quotes_blog']; ?></div>
									<div class="quote__name"><?php echo $lol['quotes_author_blog']; ?></div>
								</blockquote>
								<div class="single-post__text">
									<?php echo $lol['isi_blog']; ?>
								</div>
							</div>
						</div>
						<div class="single-post__images row">
							<div class="col-12"><img src="<?php echo $lol['img_3_blog']; ?>" alt="" class="single-post__image" /></div>
							<div class="col-6"><img src="<?php echo $lol['img_2_blog']; ?>" alt="" class="single-post__image" /></div>
							<div class="col-6"><img src="<?php echo $lol['img_4_blog']; ?>" alt="" class="single-post__image" /></div>
						</div>
						<div class="person-block single-post__author">
							<img src="<?php echo base_url('/inti/img/studio-post-image-1.jpg'); ?>" alt="" class="person-block__image" />
							<div class="person-block__content">
								<div class="person-block__name">Admin Aura</div>
								<div class="person-block__text">sedikit kata" gitu.
								</div>
								<div class="person-block__share"><a href="#" class="person-block__share-item">facebook</a> - <a href="#" class="person-block__share-item">twitter</a> - <a href="#" class="person-block__share-item">pinterest</a></div>
							</div>
						</div>
					</div>
					<div class="comments">
						<div class="container">
							<div class="row">
								<div class="col-12 col-lg-8 offset-lg-2">
									<div class="comments__title heading-smallest">Comments</div>
									<?php echo $comments; ?>
									<div class="comments__title heading-smallest">leave a comment</div>
									<a href="<?php echo site_url('nyoba/index/'.$lol['id_blog']); ?>" class="btn btn-success">Comment disini</a>
								</div>
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