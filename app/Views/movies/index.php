<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="grid grid-cols-4">
    <?php foreach ($movies as $movie) : ?>
        <div class="max-w-smbg-white rounded-lg border border-gray-200 shadow-md m-10">
            <a href="#">
                <img class="rounded-t-lg object-cover h-48 w-96" src="/images/<?= $movie['movie_thumbnail'] ;?>">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                        <?= $movie['movie_title'] ;?>
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 truncate">
                    <?= $movie['movie_desc'] ;?>
                </p>
                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>

<!-- <table class="mx-auto my-auto rounded-lg shadow p-20">
    <thead class="bg-gray-100 ">
        <tr>
            <th class="table-head-cell">#</th>
            <th class="table-head-cell">Image</th>
            <th class="table-head-cell">Title</th>
            <th class="table-head-cell">Deskripsi</th>
            <th class="table-head-cell">Genre</th>
            <th class="table-head-cell">Rating</th>
            <th class="table-head-cell">Price</th>
            <th class="table-head-cell">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($movies as $movie) : ?>
            <tr class="bg-white border-b w-20">
                <td class="table-row-cell"><?= $movie['id'] ;?></td>
                <td class="table-row-cell">
                    <img src="/images/<?= $movie['movie_thumbnail']; ?>" class="w-20">
                </td>
                <td class="table-row-cell"><?= $movie['movie_title']; ?></td>
                <td class="table-row-cell"><?= $movie['movie_desc']; ?></td>
                <td class="table-row-cell"><?= $movie['movie_genre']; ?></td>
                <td class="table-row-cell"><?= $movie['movie_rating']; ?></td>
                <td class="table-row-cell"><?= $movie['movie_price']; ?></td>
                <td class="table-row-cell">
                    <a class="text-white bg-green-700 hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " href="#">
                        Detail
                    </a>
                </td>
            </tr>
        <?php endforeach ?>


    </tbody>
</table> -->

<?= $this->endSection(); ?>