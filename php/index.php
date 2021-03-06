<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Artisan raw honey which can be traced to the apiary it came from and the beekeeper who looked after the bees. Taste and enjoy the difference.">

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    
    <link rel="stylesheet" type="text/css" href="src/css/main.css">
    <link rel="stylesheet" type="text/css" href="src/css/queries.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    
    <title>Hidden Valley Honey</title>
</head>

<body>
      
    <header>
        <nav>
            <div class="row">
                <ul class="main-nav">
                    <li><a href="#products">Products</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="hero-text-box">
            <h1>Hidden Valley Honey</h1>
            <h2>Waiheke Island | New Zealand</h2>
        </div>
    </header>
    
    
    <section id="products" class="section-products">
        <div class="row">
            <h3>Organic Local Products
                <i class="ion-leaf icon"></i>
            </h3>
            <p class="long-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        
        <div class="row">
            <div class="col span-1-of-2 box">
                <div class="product-box">
                    <div>
                        <h4>Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="product-image">
                        <img src="https://via.placeholder.com/400x400" alt="Placeholder Image">
                    </div>
                </div>
            </div>
            
            <div class="col span-1-of-2 box">
                <div class="product-box">
                    <div>
                        <h4>Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="product-image">
                        <img src="https://via.placeholder.com/400x400" alt="Placeholder Image">
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
    
     <section id="gallery" class="section-gallery">
            <ul class="gallery-showcase clearfix gallery-1">
                <li>
                    <figure class="gallery-photo">
                        <img src="src/img/hives-1-min.jpg" alt="Bee Hives">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="src/img/bee-1-min.jpg" alt="Bee on Flower">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="src/img/bush-2-min.jpg" alt="New Zealand Bush">
                    </figure>
                </li>

            </ul>
            <ul class="gallery-showcase clearfix">
                <li>
                    <figure class="gallery-photo">
                        <img src="src/img/bush-1-min.jpg" alt="Polaris in New Zealand Bush">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="src/img/hives-2-min.jpg" alt="Bee Hives Close Shot">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="src/img/bee-flowers-min.jpg" alt="Bee Amongst Flowers">
                    </figure>
                </li>
            </ul>
        </section>
    
    
    <section id="about" class="section-about">     
        <div class="row">
            <h3>Our Story</h3>
            <p class="long-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
    
        <div class="row">
        </div>
    </section>
    
    
    <section id="contact" class="section-contact">
        
        <div id="form">
            
            <div class="row">
                <h3>Contact Us</h3>
            </div>

            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">

                    <div class="row">
                        <?php
                        if ($_GET['success'] == 1) {
                            echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                        } 
                        
                        if ($_GET['success'] == -1) {
                            echo "<div class=\"form-messages error\">Something went wrong!! Please try again.</div>";
                        } 
                        ?>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>

                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Message</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="Submit">
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </section>
    
    
    <div class="section-map">
        <div id="map"></div>
        
        <div class="map-box">
            <h4>Hidden Valley Honey</h4>
            <p>Waiheke Island
            <br>
            Tel: +64 22 407 0024
            </p>
            <p>
            PO Box 67-130
            <br>
            Mt Eden 1024
            <br>
             Auckland | New Zealand
            </p>
        </div>
    </div>
    

    <footer>
        <div class="row">
               <ul class="social-links">
                  <li>
                     <a href="https://www.facebook.com/Hidden-Valley-Honey-Company-NZ-658143510995138/" target="_blank">
                        <i class="ion-social-facebook"></i>
                     </a>
                </li>
            </ul>
        </div>
        
        <div class="row">
            <p> &copy; Copyright 2018. All rights reserved.
                <br>
                This webpage was created by <a href="https://github.com/adamjq" target="_blank">
                Adam Quigley</a>.
            </p>
        </div>
    </footer>
    
</body>
    
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBD64x5jCNLeEZKjPFcDO9uRtU530Nr-F4"></script>
    <script src="src/js/gmaps.js"></script>
    <script src="src/js/script.js"></script>
    
</html>
