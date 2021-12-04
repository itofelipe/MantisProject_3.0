<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mantis Project, Web design, Graphic design and Branding.">
    <meta name="keywords" content="design,web design,graphic design,branding">
    <meta name="author" content="Mantis Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" />
    <title>Mantis Project</title>


    <?php wp_head(); ?>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-default">
            <div class="container">
                <a data-aos="fade" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="1000" class="navbar-brand" href="#home"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png"></a>
                <button data-aos="fade" data-aos-delay="600" data-aos-easing="ease-in-out" data-aos-duration="1000" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li data-aos="fade" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="1000" class="nav-item">
                            <a class="nav-link" aria-current="page" href="#home">Home</a>
                        </li>
                        <li data-aos="fade" data-aos-delay="600" data-aos-easing="ease-in-out" data-aos-duration="1000" class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li data-aos="fade" data-aos-delay="900" data-aos-easing="ease-in-out" data-aos-duration="1000" class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li data-aos="fade" data-aos-delay="1200" data-aos-easing="ease-in-out" data-aos-duration="1000" class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="close_bottom">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                                <i class="far fa-times-circle"></i>
                            </button>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>