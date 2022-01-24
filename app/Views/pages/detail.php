<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="column">
  <div class="card">
    <img src="/images/<?= $movies['movie_thumbnail']; ?>" alt="">
  </div>
  <div class="card">
    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
      <?= $movies['movie_title']; ?>
    </h1>
  </div>
</div>

<div class="">
  <div style="padding-right: 60px; padding-top: 120px;">
    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
      <?= $movies['movie_title']; ?>
    </h1>

    <p class="mb-3 font-normal text-gray-700">
      <?= $movies['movie_desc']; ?>
    </p>
  </div>
  <div>
    <p><b>Genre :</b> <?= $movies['movie_genre']; ?> </p>
  </div>
  <div>
    <p><b>Rating :</b> <?= $movies['movie_rating']; ?>⭐</p>
  </div>
  <div>
    <p><b>Price :</b> <?= $movies['movie_price']; ?></p>
  </div>
  <div>
    <a href="/pages/order/<?=$movies['slug'];?>" class="button" style="vertical-align:middle"><span>PESAN</span></a>
  </div>
</div>


<?= $this->endSection(); ?>