<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta name="author" content="Sigma" />
    <title>Praneesh portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      href="assets/images/logo/favicon.png"
      type="image/x-icon"
    />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/flipclock.css" rel="stylesheet" />
    <link href="assets/css/fontawesome6.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
      rel="stylesheet"
    />

    <!-- Responsive CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />

    <!-- Animate CSS -->
    <link href="assets/css/animate.css" rel="stylesheet" />

    <!-- fancyBox helpers -->
    <link href="assets/css/fancybox.css" rel="stylesheet" />

    <meta property="og:site_name" content="Praneesh Portfolio" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Praneesh Portfolio" />
    <!-- Dynamically generate the URL based on the server request -->
    <?php
     $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
     $canonical = $_SERVER['REQUEST_URI'];
     ?>
    <meta property="og:url" content="<?php echo $base_url . $canonical; ?>" />
    <meta
      property="og:image"
      itemprop="image"
      content="<?php echo $base_url; ?>/assets/images/logo/logo.png"
    />
    <meta property="og:type" content="website" />
    <meta
      property="og:image:secure_url"
      content="<?php echo $base_url; ?>/assets/images/logo/logo.png"
    />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:alt" content="Praneesh Portfolio Logo" />
    <meta
      property="og:description"
      content="Discover the professional portfolio of Praneesh, showcasing expertise in your industry, innovative projects, and a passion for your skills. Explore achievements, experience, and creative work."
    />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Praneesh" />
    <meta name="twitter:title" content="Praneesh Portfolio" />
    <meta
      name="twitter:description"
      content="Discover the professional portfolio of Praneesh, showcasing expertise in your industry, innovative projects, and a passion for your skills. Explore achievements, experience, and creative work."
    />
    <meta
      name="twitter:image"
      content="<?php echo $base_url; ?>/assets/images/logo/logo.png"
    />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Praneesh" />
  </head>

  <body>
    <section class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <div class="nav-head">
              <div class="logo-main">
                <a href="#home" aria-label="close">
                  <img src="assets/images/logo/logo.png" alt="Logo" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="nav-items">
              <ul>
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#service" class="nav-link">Services</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="linkWrap">
              <a
                href="assets/images/resume.pdf"
                download="Resume.pdf"
                class="style-4"
              >
                <span>Download Resume</span>
                <svg viewBox="0 0 13 20">
                  <polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mob-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-10">
            <div class="mob-logo" aria-label="close">
              <a href="#home" aria-label="close">
                <img src="assets/images/logo/logo.png" alt="Logo" />
              </a>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-2">
            <!-- <div class="mob-offcanvas">
                  <button class="btn btn-primary" type="button" data-toggle="offcanvas" data-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="menu-image">
                      <img src="assets/images/main-page/menu-bar.png" alt="menu-bar" title="menu" />
                    </div>
                  </button>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <div class="mob-logo-2">
                        <img src="assets/images/logo/logo.png" alt="Logo" />
                      </div>
                      <button type="button" class="btn-close text-reset" data-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <div class="mob-nav">
                        <ul>
                          <li><a href="#home" class="nav-link">Home</a></li>
                          <li><a href="#about" class="nav-link">About</a></li>
                          <li><a href="#service" class="nav-link">Services</a></li>
                          <li><a href="#experience" class="nav-link">Experience</a></li>
                          <li><a href="#projects" class="nav-link">Projects</a></li>
                          <li><a href="#contact" class="nav-link">Contact</a></li>
                        </ul>
                        <div class="linkWrap">
                          <a href="assets/images/resume.pdf-" download="Resume.pdf" class="style-4">
                            <span>Download Resume</span>
                            <svg viewBox="0 0 13 20">
                              <polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

            <div class="mob-offcanvas">
              <button
                class="btn btn-primary"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"
              >
                <div class="menu-image">
                  <img
                    src="assets/images/main-page/menu-bar.png"
                    alt="menu-bar"
                    title="menu"
                  />
                </div>
              </button>

              <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel"
              >
                <div class="offcanvas-header">
                  <div class="mob-logo-2">
                    <img src="assets/images/logo/logo.png" alt="Logo" />
                  </div>
                  <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body">
                  <div class="mob-nav">
                    <ul>
                      <li><a href="#home" class="nav-link">Home</a></li>
                      <li><a href="#about" class="nav-link">About</a></li>
                      <li><a href="#service" class="nav-link">Services</a></li>
                      <li>
                        <a href="#experience" class="nav-link">Experience</a>
                      </li>
                      <li><a href="#projects" class="nav-link">Projects</a></li>
                      <li><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="linkWrap">
                      <a
                        href="assets/images/resume.pdf"
                        download="Resume.pdf"
                        class="style-4"
                      >
                        <span>Download Resume</span>
                        <svg viewBox="0 0 13 20">
                          <polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
