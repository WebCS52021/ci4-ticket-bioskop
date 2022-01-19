<?= $this->extend('layout/template') ;?>

<?= $this->section('content') ;?>
<p>ini home <?php echo session()->get('user_name') ?></p>
<?= $this->endSection() ;?>