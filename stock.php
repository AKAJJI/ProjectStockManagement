<html>
<head></head>
<body>
	<span class="">menu</span>

	<div class=""></div>
	<div>
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=stockage','root','root');

  $rep = $bdd->query('select * from objet');
?>
<table class="">
	<tr id="">
			<th>ID</th>
			<th>Type</th>
			<th>Nom</th>
			<th>Description</th>
			<th>Localisation</th>
			<th>Quantité</th>
	</tr>
<?php
  while($donnees = $rep->fetch()){
  	
  	echo "<tr>
			<th>".$donnees['ID']."</th>
			<th>".$donnees['Type']."</th>
			<th>".$donnees['Nom']."</th>
			<th>".$donnees['Descriptions']."</th>
			<th>".$donnees['Localisation']."</th>
			<th>".$donnees['Quantit']."</th>
		</tr>";
  }
?>

</table>
</div>
</body>
</html>
