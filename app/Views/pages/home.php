<?= $this->extend('layout/template') ;?>

<?= $this->section('content') ;?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing:border-box}

        body {font-family: Verdana, sans-serif; margin:0}
        
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
        max-width: 100%;
        height: 700px;
        position: relative;
        margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
        display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
        }

        @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
        }

        /* Add a black background color to the top navigation */
        .topnav {
        background-color: #333;
        overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
        background-color: #ddd;
        color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
        background-color: #04AA6D;
        color: white;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 10px 60px 10px 60px;
            font-size: 30px;
            text-align: center;
        }

        /* Clear floats after the columns */
        .row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            background-color: #2196F3;
            padding: 10px;
        }

    </style>

    <title>Home</title>
  </head>
  <body>

  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#news">Movie Now</a>
    <a href="#contact">Booking</a>
    <a href="#about">Coming Soon</a>
    </div>

  <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="/img/movie-1.jpg" style="height: 800px; width: 100%;">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="/img/movie-2.jpg" style="height:800px; width: 100%;">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="/img/movie-3.jpg" style="height:800px; width: 100%;">
        <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <h2 style="margin-top: 100px; position:absolute; text-align: center; width: 100%;">Now Playing Movies</h2>
    <br>

    <!-- data movie -->
    <div class="row" style="margin-top: 120px;">
        <?php foreach($movies as $item) : ?>
        <div class="column">
            <img src="/img/<?= $item['movie_img'] ?>"" alt="Avatar" style="width:200px;">
            <h5><b><?= $item['movie_name'] ?></b></h5> 
            <input type="button" onclick="location.href='https://google.com';" value="Details" />
        </div>
        <?php endforeach; ?>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
   
  </body>
</html>
<?= $this->endSection() ;?>