<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?= $title ;?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/orderapp.css">
</head>

<body>

	<!-- HEADER: MENU + HEROE SECTION -->
	<?= $this->include('layout/navbar') ;?>
	
	<!-- CONTENT -->

	<?= $this->renderSection('content'); ?>

	<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

	<?= $this->include('layout/footer') ;?>

</body>

</html>