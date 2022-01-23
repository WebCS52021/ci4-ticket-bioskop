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




    <?php foreach ($movies as $movie) : ?>
        <div class="column">
            <div class="card">
                <img class="imgrecomend" src="/images/<?= $movie['movie_thumbnail']; ?>" alt="">
                <p><?= $movie['movie_rating']; ?>⭐</p>
            </div>
 
        </div>
    <p id="demo"></p>
</div>
<script>
 

</script>
   
<?php endforeach ?>
<?= $this->endSection();?>