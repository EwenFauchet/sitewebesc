<?php
	include 'fonctions.php';
	EnteteTitrePage("Membres");
	menu();
?>

<div class="container espace">
<div class="shadow p-3 mb-5 bg-white rounded">
<h2> Présentation membres </h2>	
<?php
	
	 tab_mem();
	 
?>
</div>
</div>
<?php
	PiedDePage();
?>	