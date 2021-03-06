<?= $this->extend('layout/template') ;?>

<?= $this->section('content') ;?>
<!-- Navbar -->
<?= $this->include('layout/navbar') ;?>
<div id="to_top">
<br>
</div>
<?php
////////////////////////////////////////////////////RECOMEND CODE START///////////////////////////////////////  
?>
<div class="bg-violet-500" name="">
    <p> </p>
    <h1 class="h1recomend white_recomend"><b>RECOMENDED FOR YOU</b></h1>
    <p> </p>
</div>

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
                <p class="mb-3 font-normal text-gray-700 truncate">
                    <?= $movie['movie_rating']; ?> ⭐️
                </p>
                <a href="/pages/detail/<?=$movie['slug'];?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 ">
                    Read more
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>


<?= $this->endSection();?>