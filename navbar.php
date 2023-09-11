<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="Kuvat/logo.png">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
<link rel="stylesheet" href="site.css">
<?php if (isset($css)) echo "<link rel='stylesheet' href='$css'>"; ?>
<script src="scripts.js"></script>
<title><?= $title ?? 'Sivusto'; ?></title>
</head>
<body>
<?php $active = basename($_SERVER['PHP_SELF'], ".php");?>
<nav>
<a class="brand-logo" href="profiili.php">
<img src="Kuvat/logo.png" alt="Brand Logo"></a>
<a class="<?= ($active == 'profiili') ? 'active':''; ?>" href="profiili.php">Profiili</a>
<a class="<?= ($active == 'kuvagalleria') ? 'active':''; ?>" href="kuvagalleria.php">Kuvagalleria</a>
<a class="<?= ($active == 'nettikauppalomake') ? 'active':''; ?>" href="nettikauppalomake.php">Nettikauppalomake</a>
<a class="<?= ($active == 'verkkosivu') ? 'active':''; ?>" href="verkkosivu.php">Verkkosivu</a>
<a class="<?= ($active == 'harjoitus2') ? 'active':''; ?>" href="harjoitus2.php">Harjoitus 2</a>
<a class="<?= ($active == 'navigaatioharjoitus') ? 'active':''; ?>" href="navigaatioharjoitus.php">Navigaatioharjoitus</a>
<a href="javascript:void(0);" class="icon" onclick="menutoggle()">
<i class="fa fa-bars"></i>
</a>
</nav>