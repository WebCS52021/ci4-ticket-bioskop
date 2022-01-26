<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Navbar -->
<?= $this->include('layout/navbar'); ?>

<div class="p-10 bg-light-50 rounded-lg shadow w-96 mx-auto my-auto flex flex-col gap-4 mt-10">
    <div class="items-center">
        <p class="inline-block text-6xl">🍿 </p>
        <p class="inline-block text-6xl  font-bold" href="#">iTicket</p>
    </div>
    <p>Nama: <?= session()->get('user_name'); ?></p>
    <p>Judul: <?= $movies['movie_title']; ?></p>
    <p>Jumlah ticket: <?= $_POST['numseats']; ?></p>
    <p>Tempat duduk: <?= $_POST['seats']; ?></p>
    <p>Tanggal: <?= $_POST['date']; ?></p>
    <p>Studio: <?= 1; ?></p>
    <p>Total Biaya: <?= (int)$_POST['numseats'] * (int)$movies['movie_price']; ?></p>
    <button class="p-5 print:hidden" onclick="printInvoices()">
        Click to Print
    </button>
</div>

<script>
    function printInvoices() {
        window.print();
    }
</script>

<?= $this->endSection(); ?>