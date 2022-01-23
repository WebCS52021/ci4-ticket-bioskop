<?= $this->extend('layout/template') ;?>

<?= $this->section('content') ;?>
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



<?php
////////////////////////////////////////////////////RECOMEND CODE END///////////////////////////////////////  
?>

<div class="float-container">

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




   
<?php
////////////////////////////////////////////////////GENRE CODE START///////////////////////////////////////  
?>
<div class="sidenav_recomend">
<h1 class="h1recomend violet_recomend sidebarjudulrecomended"><b>POPULAR PRODUCTION COMPANIES</b></h>
<a class="h1recomend violet_recomend" href="#WarnerBros">Warner Bros</a>
<a class="h1recomend violet_recomend" href="#Sony">Sony Pictures Motion Picture Group</a>
<a class="h1recomend violet_recomend" href="#Disney">Walt Disney Studios</a>
<a class="h1recomend violet_recomend" href="#CenturyFox">20th Century Fox</a>
<a class="h1recomend violet_recomend" href="#ParamountPictures">Paramount Pictures</a>
<a class="h1recomend violet_recomend" href="#LionsgateFilms">Lionsgate Films</a>
<a class="h1recomend violet_recomend" href="#UniversalPictures">Universal Pictures</a>
<a class="h1recomend violet_recomend" href="#Weinstein">The Weinstein Company</a>
<a class="h1recomend violet_recomend" href="#Goldwyn">Metro-Goldwyn-Mayer Studios</a>
<a class="h1recomend violet_recomend" href="#DreamWorks">DreamWorks Pictures</a>

</div>


<?php
////////////////////////////////////////////////////GENRE CODE END///////////////////////////////////////  
?>

<?php
////////////////////////////////////////////////////GENRE RECOMENDED GENRE START///////////////////////////////////////  
?>
<div class="float-container">
    <div id="WarnerBros" class="float-child bg-violet-500" name="WarnerBros">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>Warner Bros</b></h1>
        <p> </p>
    </div>


    <div id="Sony" class="float-child bg-violet-500" name="Sony">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>Sony Pictures Motion Picture Group</b></h1>
        <p> </p>
    </div>
</div>

<div class="float-container">

    <div id="Disney" class="float-child bg-violet-500" name="Disney">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>Walt Disney Studios</b></h1>
        <p> </p>
    </div>


    <div id="CenturyFox" class="float-child bg-violet-500" name="CenturyFox">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>20th Century Fox</b></h1>
        <p> </p>
    </div>

</div>

<div class="float-container">

    <div id="ParamountPictures" class="float-child bg-violet-500" name="ParamountPictures">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>Paramount Pictures</b></h1>
        <p> </p>
    </div>


    <div id="Lionsgate Films" class="float-child bg-violet-500" name="LionsgateFilms">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>Lionsgate Films</b></h1>
        <p> </p>
    </div>

</div>

<div class="float-container">

    <div id="UniversalPictures" class="float-child bg-violet-500" name="UniversalPictures">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>Universal Pictures</b></h1>
        <p> </p>
    </div>


    <div id="Weinstein" class="float-child bg-violet-500" name="Weinstein">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>The Weinstein Company</b></h1>
        <p> </p>
    </div>

</div>

<div class="float-container">

    <div id="Goldwyn" class="float-child bg-violet-500" name="Goldwyn">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>Metro-Goldwyn-Mayer Studios</b></h1>
        <p> </p>
    </div>


    <div id="DreamWorks" class="float-child bg-violet-500" name="DreamWorks">
        <p> </p>
        <h1 class="h1recomend white_recomend"><b>DreamWorks Pictures</b></h1>
        <p> </p>
    </div>

</div>

<?php
////////////////////////////////////////////////////GENRE RECOMENDED GENRE START///////////////////////////////////////  
?>

<div style="text-align: center;">
<a class="h1recomend violet_recomend" href="#to_top">BACK TO TOP</a>
</div>




<?= $this->endSection();?>