<?php $active = basename($_SERVER['PHP_SELF'], ".php");?>
<nav>
<a class="brand-logo" href="profiili.php"><img src="logo.png" alt="Brand Logo"></a>
<a class="<?= ($active == 'profiili') ? 'active':''; ?>" href="profiili.php">Profiili</a>
<a class="<?= ($active == 'kuvagalleria') ? 'active':''; ?>" href="kuvagaleria.php">Kuvagalleria</a>
<a class="<?= ($active == 'rekisteroitymislomake') ? 'active':''; ?>" href="nettikauppalomake.php">Rekisteröityminen</a>
<a class="<?= ($active == 'verkkosivu') ? 'active':''; ?>" href="verkkosivu.php">Verkkosivu</a>
<a class="<?= ($active == 'harjoitus2') ? 'active':''; ?>" href="harjoitus2.php">Harjoitus 2</a>
<a class="<?= ($active == 'navigaatioharjoitus') ? 'active':''; ?>" href="navigaatioharjoitus.php">Navigaatioharjoitus</a>
<a href="javascript:void(0);" class="icon" onclick="menutoggle()">
<i class="fa fa-bars"></i>
</a>
</nav>