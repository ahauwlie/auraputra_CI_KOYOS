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
						<div data-rellax-speed="-3" data-rellax-percentage="0.5" style="background-image:url(../inti/img/zoom-image-head-bg.jpg)" class="parallax-image__image"></div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-8 offset-lg-2">
								<div class="single-post__header">
									<a href="#" class="single-post__category">Kategori</a>
									<div class="single-post__date">Tanggal</div>
								</div>
								<div class="single-post__title">Judul</div>
								<blockquote class="quote single-post__quote">
									<div class="quote__text">ceritanya ini quotes.</div>
									<div class="quote__name">Nama</div>
								</blockquote>
								<div class="single-post__text">
									<p style="text-indent: 50px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
									</p>
								</div>
							</div>
						</div>
						<div class="single-post__images row">
							<div class="col-12"><img src="<?php echo base_url('/inti/img/studio-post-image-1.jpg'); ?>" alt="" class="single-post__image" /></div>
							<div class="col-6"><img src="<?php echo base_url('/inti/img/studio-post-image-1.jpg'); ?>" alt="" class="single-post__image" /></div>
							<div class="col-6"><img src="<?php echo base_url('/inti/img/studio-post-image-1.jpg'); ?>" alt="" class="single-post__image" /></div>
						</div>
						<div class="row">
							<div class="col-12 col-lg-8 offset-lg-2">
								<div class="single-post__links">
									<div class="single-post__links-title">Share:</div>
									<a href="#" class="single-post__links-item single-post__links-item_iconed icofont-facebook">
										<div class="visually-hidden">Facebook</div>
									</a>
									<a href="#" class="single-post__links-item single-post__links-item_iconed icofont-twitter">
										<div class="visually-hidden">Twitter</div>
									</a>
									<a href="#" class="single-post__links-item single-post__links-item_iconed icofont-pinterest">
										<div class="visually-hidden">Pinterest</div>
									</a>
								</div>
							</div>
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
									<div class="comments__list">
										<div class="comment-card">
											<img src="<?php echo base_url('/inti/img/studio-post-image-1.jpg'); ?>" alt="" class="comment-card__image" />
											<div class="comment-card__content">
												<div class="comment-card__head">
													<div class="comment-card__name">Nama</div>
													<div class="comment-card__date">Tanggal</div>
												</div>
												<div class="comment-card__text">isi comment</div>
											</div>
										</div>
									</div>
									<div class="comments__title heading-smallest">leave a comment</div>
									<form>
										<div class="row">
											<div class="col-12 col-lg-6"><input type="text" name="name" placeholder="Name" class="comments__input-text" /></div>
											<div class="col-12 col-lg-6"><input type="text" name="email" placeholder="Email" class="comments__input-text" /></div>
											<div class="col-12"><input type="text" name="subject" placeholder="Subject (Optinal)" class="comments__input-text" /></div>
											<div class="col-12"><textarea name="message" placeholder="Message" class="comments__input-textarea"></textarea><button class="comments__submit">Post Comment</button></div>
										</div>
									</form>
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