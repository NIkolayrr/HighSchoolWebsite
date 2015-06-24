<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Галерия</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/jpg" href="images/fav.jpg" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body class="gallerypage">
<div id="wrapper" >
<!-- begin of header -->
<?php include 'includes/head.php'; ?>
<!-- end of header -->
<section>
<img class="banner" src="images/banner2.png"  alt="">
 <div class="slider-wrapper theme-dark">
            <div id="slider" class="nivoSlider">
                <img src="data/nivo-slider/pmg1.png" alt="" />
                <img src="data/nivo-slider/pmg2.png" alt="" title="This is an example of a caption" />
                <img src="data/nivo-slider/pmg3.png" alt="" data-transition="slideInLeft" />
                <img src="data/nivo-slider/pmg4.png" alt="" title="#htmlcaption" />
                <img src="data/nivo-slider/pmg5.png" alt="" data-transition="slideInLeft" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>
</section>

<img class="banner1" src="images/banner.png"  alt="">
<section>
<ul class="gallery">
    <li ><a href="data/album1/pmg-1.jpg" rel="lightbox[pmg]"><img src="data/album1/pmg-1.jpg" alt=""></a></li>
    <li ><a href="data/album1/pmg-2.jpg" rel="lightbox[pmg]"><img src="data/album1/pmg-2.jpg" alt=""></a></li>
    <li ><a href="data/album1/pmg-3.jpg" title="Опа опа опа поа" rel="lightbox[pmg]"><img src="data/album1/pmg-3.jpg" alt=""></a></li>
    <li ><a href="data/album1/in-1.jpg" rel="lightbox[inside]"><img src="data/album1/in-1.jpg" alt=""></a></li>
    <li ><a href="data/album1/in-5.jpg" rel="lightbox[inside]"><img src="data/album1/in-5.jpg" alt=""></a></li>
    <li ><a href="data/album1/in-3.jpg" rel="lightbox[inside]"><img src="data/album1/in-3.jpg" alt=""></a></li>
    <li ><a href="data/album1/in-4.jpg" rel="lightbox[inside]"><img src="data/album1/in-4.jpg" alt=""></a></li>
    <li ><a href="data/album1/in-5.jpg" rel="lightbox[inside]"><img src="data/album1/in-5.jpg" alt=""></a></li>
</ul>
</section>

<?php include 'includes/footer.php'; ?>
</div><!-- end of wrapper -->
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script src="js/effect.js"></script>
    <script >
    /* for the nivo slider */
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
    });
/* for the nivo slider */
    </script>
</body>
</html>