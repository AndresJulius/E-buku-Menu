<?php
	require_once 'header_template.php';
?>

<div class="content">
	<div class="container">
		
		<h1 class="page-title">Beranda</h1>
		<div class="card">
			<h2>Hai <?= $_SESSION['uname'] ?>,</h2>
			<p>Selamat Datang di Website Pondok Cita Rasa Sunda.</p>
		</div>
	</div>
</div>
<?php require_once 'footer_template.php'; ?>