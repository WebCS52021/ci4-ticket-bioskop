<?= $this->extend('layout/template'); ?>


<?= $this->section('content') ;?>
<p><?php echo session()->get('user_name') ?></p>

<!-- Slideshow container -->
<div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <?php foreach ($movies as $movie) : ?>
        <div class="mySlides fade">
            <img class="object-fit h-96 w-full" src="/images/<?= $movie['movie_thumbnail']; ?>">
        </div>
    <?php endforeach ?>
</div>

<div class="text-2xl font-bold mx-auto pt-10 flex items-center justify-center">All Movie 🎞 Now Playing</div>
<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 mx-auto">
    <?php foreach ($movies as $movie) : ?>
        <div class="max-w-xs bg-white rounded-lg border border-gray-200 shadow-md m-10">
            <a href="#">
                <img class="rounded-t-lg object-cover object-top h-48 w-96" src="/images/<?= $movie['movie_thumbnail']; ?>">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                        <?= $movie['movie_title']; ?>
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 truncate">
                    <?= $movie['movie_desc']; ?>
                </p>
                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 ">
                    Read more
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>

<!-- data movie -->


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
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>

<?= $this->include('layout/footer') ;?>
<?= $this->endSection(); ?>
