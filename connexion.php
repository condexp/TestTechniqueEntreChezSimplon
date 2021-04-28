<html>
 <head>
  <title>Simplon Cinema </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>
 <body>

<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=cinema;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$minsiege=1;
$maxsiege=9;
 
$minranges=1;
$maxranges=8;
 

$nbresiegeR=null;
$nbrerangeR=null;

if (isset($_GET['colonne'])) {
  if( ((($_GET['colonne']) <=  $maxsiege)) && (($_GET['colonne'])>= $minsiege))
  {
	  $nbresiegeR=(int)$_GET['colonne'];  
	  //echo $nbresiegeR;
  } 
}

if (isset($_GET['lesranges'])) {
  if( ((($_GET['lesranges']) <=  $maxsiege)) && (($_GET['lesranges'])>= $minsiege))
  {
	  $nbrerangeR=(int)$_GET['lesranges'];
	 // echo $nbrerangeR;
  } 
}

echo "<br />";
echo '<form action="" method="GET">';
echo '-------------Je reserve :------------------------------';
echo "<br />";
echo "<br />";

echo '<input type="number" name="colonne" placeholder="Entre 1 et 9  sieges"  >';

echo "<br />";
echo "<br />";
echo '------------ Entre le 1er et le 8ème rangé :-------';
echo "<br />";
echo "<br />";
echo '<input type="number" name="lesranges" placeholder="Entre 1er et 8è rangé" >';
echo "<br />";


echo '<p><input type="submit" value="Valider" ></p>';

echo '</form>';


echo "<br />";
echo "<br />";

echo '---------------------------------------------';

$reponse = $bdd->query('SELECT * FROM masalle');

echo '<p> voici mes  infos de ma table:</p>';

echo '<table border="15">';
echo"<tr>";
	echo"<th>ligne 0</th>";
    echo"<th>1 </th>";
    echo"<th>2</th>";
	echo"<th>3</th>";
    echo"<th>4</th>";
	echo"<th>5</th>";
    echo"<th>6</th>";
	echo"<th>7</th>";
    echo"<th>8</th>";
	echo"<th>9</th>";
  echo"</tr>";
  
  $NbrLigne = 8;
  $NbrCol = 10;
while ($donnees = $reponse->fetch() )
	
{ 	$d1=$donnees[1];
	$d2=$donnees[2];
	$d3=$donnees[3];
	$d4=$donnees[4];
	$d5=$donnees[5];
	$d6=$donnees[6];
	$d7=$donnees[7];
	$d8=$donnees[8];
	$d9=$donnees[9];
	$d10=$donnees[10];
	
		
	$tableau = array($d1,$d2,$d3,$d4,$d5,$d6,$d7,$d8,$d9,$d10);
	
	$NbreData = sizeof($tableau);
	
if ($NbreData != 0) {
$k = 0;
for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
	
      if ($k<$NbreData) {
         echo '<td>';
          // ------------------------------------------
          // AFFICHAGE de l'element
        
			echo $tableau[$k];			
			$tp1=$tableau[1];		
			$tp2=$tableau[2];
			$tp3=$tableau[3];
			$tp4=$tableau[4];
			$tp5=$tableau[5];
			$tp6=$tableau[6];
			$tp7=$tableau[7];
			$tp8=$tableau[8];
			
			$tps=array($tp1,$tp2,$tp3,$tp4,$tp5,$tp6,$tp7,$tp8);
			
			$nbreR=count(array_keys($tps, "R"));
			$nbreD=count(array_keys($tps, "D"));
			
          // ------------------------------------------
         echo '</td>';
		
         $k++;
		
		} else {    //  case vide
     
	 echo '<td> </td>';
      }
   }
   echo '<tr>';
   $j=1;
    break;
  
}


$siegeSAISI=$nbresiegeR;
echo $nbrerangeR;
echo $siegeSAISI;

				  if ($siegeSAISI < $nbreD){
					  for ($x = 0;$x <= $siegeSAISI; $x++) {
						 
						  $count=0;
					
					 if  ( ($tp1="D") and ($count < $siegeSAISI)){		 
											
						$reponse1=$bdd->query( "UPDATE masalle SET col1='R' where idmasalle='{$nbrerangeR}'");
						$count ++;
						
						}
						
						 if  (($tp2="D") and ($count < $siegeSAISI)){
						
						$reponse1=$bdd->query( "UPDATE masalle SET col2='R' where idmasalle='{$nbrerangeR}'");
						$count ++;
						}
						
						 if  (($tp3="D") and ($count < $siegeSAISI)){
						
						$reponse1=$bdd->query( "UPDATE masalle SET col3='R' where idmasalle='{$nbrerangeR}'");
						$count ++;
						}
						 if  (($tp4="D") and ($count < $siegeSAISI)){
						
				
						$reponse1=$bdd->query( "UPDATE masalle SET col4='R' where idmasalle='{$nbrerangeR}'");
						$count ++;
						}
						 if  (($tp5="D") and ($count < $siegeSAISI)){
						
						$reponse1=$bdd->query( "UPDATE masalle SET col5='R' where idmasalle='{$nbrerangeR}'");
						$count ++;
						}
						 if  (($tp6="D")and ($count < $siegeSAISI)){
						
						$reponse1=$bdd->query( "UPDATE masalle SET col6='R' where idmasalle='{$nbrerangeR}'");
						$count ++;
						}
						 if  (($tp7="D")and ($count < $siegeSAISI)){
						
						$reponse1=$bdd->query( "UPDATE masalle SET col7='R' where idmasalle='{$nbrerangeR}'");
						$count ++;
						}
						 if  (($tp8="D") and ($count < $siegeSAISI)){
						
						$reponse1=$bdd->query( "UPDATE masalle SET col8='R' where idmasalle='{$nbrerangeR}'");
						$count ++;
						}				
						break;
							} //FIN FOR
				  }
				  else{
					  echo 'valeur trop grand reprenez la saisi';
				  }

} else {
echo 'pas de données à afficher';
}
}
echo '</table>';
$reponse->closeCursor();
//$reponse1->close();


?>
</body>
</html>