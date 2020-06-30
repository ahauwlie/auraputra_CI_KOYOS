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
				<div style="background-color: white; height: 90px;"></div>
				<div class="heading-default heading-default heading-default_context_default">
					<div class="container">
						<div class="heading-default__title">Our Blogs</div>
						<ul class="heading-default__breadcrumbs">
							<li class="heading-default__breadcrumb-item"><a href="<?php echo site_url('home'); ?>" class="heading-default__breadcrumb-link">Home</a></li>
							<li class="heading-default__breadcrumb-item">Blogs</li>
						</ul>
					</div>
				</div>
				<div class="masonry masonry-block">
					<div class="container">
						<div class="masonry-block__head">
							<div class="masonry__primary-filters">
								<button type="button" data-tab-button="category" class="masonry__primary-filter-button masonry__primary-filter-button_active">Category</button>
							</div>
							<div class="masonry__secondary-filters-wrapper">
								<div data-tab-group="category" class="masonry__secondary-filters masonry__secondary-filters_active">
									<button type="button" data-filter="*" class="masonry__secondary-filter-button masonry__secondary-filter-button_active">All</button>
									<button type="button" data-filter="1" class="masonry__secondary-filter-button">1</button>
									<button type="button" data-filter="2" class="masonry__secondary-filter-button">2</button>
									<button type="button" data-filter="3" class="masonry__secondary-filter-button">3</button>
								</div>
							</div>
						</div>
						<div class="masonry__grid masonry-block__grid row">
							<?php foreach ($blog as $row) : ?>
								<div class="masonry__item masonry-block__item col-12 col-sm-6 col-lg-4">
									<a href="<?php echo site_url('blog/detail/'.$row->id_blog); ?>" class="masonry-item" data-filters="1">
										<div class="masonry-item__image-wrapper"><img src="<?=  $row->img_1_blog  ?>" alt="" class="masonry-item__image" /></div>
										<span class="masonry-item__title"><?=  $row->judul_blog  ?></span>
										<span class="masonry-item__category"><?=  $row->kategori_blog  ?></span>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="show-more">
						<div class="container"><a href="#" class="show-more__link show-more__link_inverted">more blogs</a></div>
					</div>
				</div>
			</main>
			<?php echo $footer; ?>
		</div>
		<?php echo $js; ?>
	</body>
</html>