<table border="1">
<tr>
<th>reference</th>
<th>nom</th>
<th>date_creation</th>
<th>prix</th>
<th>auteur</th>
</tr>
<?php
include("config.php");
include("document.php");
$c=new config();
$conn=$c->getconnexion();
$doc=new document(1,"tutoriel","12-02-2003","2","auteur");
$liste=$doc->afficherdocument($conn);
foreach($liste as $l)
{
?>
<tr>
<td><?php echo $l[0]?></td>
<td><?php echo $l[1]?></td>
<td><?php echo $l[2]?></td>
<td><?php echo $l[3]?></td>
<td><?php echo $l[4]?></td>
<td><a href="suppDocument.php?ref=<?php echo[$l[0]]?>"supprimer</a> </td>
</tr>
</tr>