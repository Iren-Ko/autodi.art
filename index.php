<?php 
    // $file = 'count.txt';

    // $location = '';
    // $time = date('H:i dS F');
    // $ip = $_SERVER['REMOTE_ADDR'];

    // $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    // if($query && $query['status'] == 'success') {
    //     $location = "Location: " . $query['country'] .", " .$query['city'];
    // } else {
    //     $location = "Location unknown";
    // }

    // file_put_contents($file, "Time: $time\n", FILE_APPEND);
    // file_put_contents($file, "$location\n", FILE_APPEND);
    // file_put_contents($file, "$ip\n\n", FILE_APPEND);
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Autodi">
    <meta name="description" content="Illustrator, cartoonist, digital artist. Creating worldwide">
    <meta name="author" content="Autodi">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">

    <title>I, Autodi</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/photoswipe.css"> 
    <link rel="stylesheet" href="css/default-skin.css">    
    <link rel="stylesheet" href="css/aos.min.css" />
    <link rel="stylesheet" href="css/remodal.css">
    <link rel="stylesheet" href="css/remodal-default-theme.css">
    <link rel="stylesheet" href="css/index.min.css">

    <!-- meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://autodi.art">
    <meta property="twitter:title" content="Autodi">
    <meta property="twitter:description" content="Illustrator, cartoonist, digital artist. Creating worldwide">
    <meta property="twitter:image" content="https://autodi.art/img/cover.jpg">
    <?php /*<meta name="twitter:site" content="@autodihater">
    <meta name="twitter:creator" content="@autodihater">
    <meta name="twitter:title" content="Autodi. Digital Artist">
    <meta name="twitter:url" content="https://autodi.art">
    <meta name="twitter:description" content="Illustrator, cartoonist, digital artist. Creating worldwide">
    <meta name="twitter:image:src" content="https://autodi.art/img/cover_quadro.jpg">
    */ ?>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://autodi.art">
    <meta property="og:title" content="Autodi">
    <meta property="og:description" content="Illustrator, cartoonist, digital artist. Creating worldwide">
    <meta property="og:image" content="https://autodi.art/img/cover.jpg">

    <?php /*
    <meta property="og:title" content="Autodi">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://autodi.art">
    <meta property="og:image" content="https://autodi.art/img/cover.jpg">
    <meta property="og:image:url" content="https://autodi.art/img/cover.jpg">
    <meta property="og:image:secure_url" content="https://autodi.art/img/cover.jpg" /> 
    <meta property="og:image:type" content="image/jpeg"> 
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <meta property="og:site_name" content="Digital Artist">
    <meta property="og:description" content="Illustrator, cartoonist, digital artist. Creating worldwide">
    */ ?>
  </head>

  <body>
      <div class="wrapper">
        <header>
            <div class="wrapper-header">
                <div class="header-main">                    
                    <div>
                        <h1>AUTODI</h1>
                    </div>
                    <div class="header-icons">
                        <a href="https://twitter.com/autodihater" target="_blank"><img src="icon/twitter.svg" alt="Twitter"></a>
                        <?php /*<a href="https://instagram.com/autodi_art" target="_blank"><img src="icon/instagram.svg" alt="Instagram"></a> */?>
                        <a href="https://www.patreon.com/autodi" target="_blank"><img src="icon/patreon.svg" alt="Patreon"></a>
                    </div>     
                </div>

                <div class="header-subheader">
                    <div>
                        <h2>freelance illustrator working worldwide</h2>
                        <div class="button -commisionsinfo" data-remodal-target="modal">commissions info</div>
                    </div>
                    <div class="header-arrow">
                        <a href="#content"><img src="icon/arrow.svg" alt="Scroll down"></a>
                    </div>
                </div>
            </div>                       
        </header>

        <section id="content" class="wrapper-gallery" data-aos="fade-up" data-aos-duration="1300">
            <div data-aos="slide-up" data-aos-duration="1000">
                <div class="gal-header">Portfolio</div>
            </div>
            <div class="gal -portfolio">
                <div class="grid">
                    <div class="grid-sizer"></div>
                        <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

                        <?php
                                                   
                            $imageArray = glob("img/portfolio/*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
                            foreach ($imageArray as $i) { 
                                list($width, $height) = getimagesize($i);
                                echo '<div class="grid-item">';
                                    echo '<figure class="images-portfolio-single" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">';
                                        echo '<a href="img/portfolio/'. basename($i) .'" itemprop="contentUrl" data-size="'.$width .'x'. $height .'">';
                                            echo '<img data-index="" src="img/portfolio/'. basename($i) .'" itemprop="thumbnail" alt="Portfolio art of Autodi" />';
                                        echo '</a>';
                                    echo '</figure>';
                                echo '</div>';
                            } 
                        ?>

                  </div>
                </div><!-- /gal -->
            </div>
        </section>

        <section class="wrapper-gallery" data-aos="fade-up" data-aos-duration="1300">
            <div data-aos="slide-up" data-aos-duration="1000">
                <div class="gal-header">Patreon</div>
            </div>
            <div class="gal -patreon">
                <div class="grid_second">
                    <div class="grid-sizer"></div>
                        <div class="my-gallery_second" itemscope itemtype="http://schema.org/ImageGallery">
                
                            <?php
                                                   
                            $imageArray = glob("img/patreon/*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
                            foreach ($imageArray as $i) { 
                                list($width, $height) = getimagesize($i);
                                echo '<div class="grid-item">';
                                    echo '<figure class="images-portfolio-single" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">';
                                        echo '<a href="img/patreon/'. basename($i) .'" itemprop="contentUrl" data-size="'.$width .'x'. $height .'">';
                                            echo '<img data-index="" src="img/patreon/'. basename($i) .'" itemprop="thumbnail" alt="Patreon art of Autodi" />';
                                        echo '</a>';
                                    echo '</figure>';
                                echo '</div>';
                            } 
                        ?>
                
                  </div>
                </div><!-- /gal -->
            </div>
        </section>

        <footer>
            <div class="cntctscntcts -first" data-aos="slide-left" data-aos-duration="2000">contactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontacts</div>
            <div class="cntctscntcts -second" data-aos="slide-right" data-aos-duration="2000">contactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontactscontacts</div>
            <div class="contacts -icons" data-aos="slide-up">
                <a href="https://twitter.com/autodihater" target="_blank"><img src="icon/twitter.svg" alt="Twitter"></a>
                <?php /*<a href="https://instagram.com/autodi_art" target="_blank"><img src="icon/instagram.svg" alt="Instagram"></a> */?>
                <a href="https://www.patreon.com/autodi" target="_blank"><img src="icon/patreon.svg" alt="Patreon"></a>
            </div>
            <div class="contacts -email" data-aos="slide-up"></div>
            <div class="contacts -year" data-aos="slide-up">· · · <?php echo date('Y') ?> AUTODI · · ·</div>
        </footer>
      </div>

    <div class="preload" style="display: block;"></div>



    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
            It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div> 
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

            </div>

    </div>
    
  

    <div class="remodal" data-remodal-id="modal">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Commissions open</h1>
        <p>
            You can contact me via <a href="mailto:ask@autodi.art">ask@autodi.art</a> or as a DM on <a href="https://twitter.com/autodihater" target="_blank">Twitter</a>. 
        </p>
        <p>Paypal only.</p>
        <h2>Fullbody $100</h2>
        <div><img src="img/com_1.webp" style="width: 100%;"></div>
        <h2>Halfbody $90</h2>
        <div><img src="img/com_2.webp" style="width: 100%;"></div>
        <h2>Full illustration from  $130</h2>
        <p>Price depends on the number of characters (+ 70% for additional character) and complexity of background</p>
        <div><img src="img/com_3.webp" style="width: 100%;"></div>
        <h2>I draw</h2>
        <p>OC, DnD characters, women, men, couples, anthro, NSFW.</p>
        <h2>I do not draw</h2>
        <p>Tranformers, monsters, gore, fetishies.</p>
        
        <br>
        <button data-remodal-action="confirm" class="button -modal">Close</button>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script> 
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/aos.min.js"></script>  
    <script src="js/remodal.min.js"></script>  
    <script src="js/main.min.js"></script>

    </body>
</html>