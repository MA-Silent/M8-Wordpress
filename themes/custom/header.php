<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous" defer></script>

</head>
<title><?php the_title() ?></title>
<body <?php body_class(); ?>>
	<header><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(
        [
            'menu'            => 'header',
            'link_before'     => '',
            'link_after'      => '',
            'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'add_li_class'    => 'nav-item',
            'add_a_class'     => 'nav-link',
        ]
    ); ?>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="s" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

</header>
<?php wp_body_open(); ?>