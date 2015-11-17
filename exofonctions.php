<!DOCTYPE html>
  <html lang="fr">

    <head>
      <meta charset="utf-8">
    <body>


<?php

$dictee ="Les courses en mer

Sur les quais, la foule agglutinée qui lance à cor et à cri un au revoir aux équipages annonce l'imminence du départ. \"Ohé !\" Des mains et des mouchoirs, semblables à des oriflammes bariolées, sont agités par la famille, les amis, des enfants... Puis les ancres surjalées sont relevées: \"Larguez les amarres !\"

Qu'il s'agisse de Christophe Colomb, de Florence Arthaud ou du charismatique Eric Tabarly, que ce soit à bord de trois-mâts, de catamarans ou de simples canots, les navigateurs, inlassables, depuis la nuit des temps, ont sillonné les océans. Tous ces découvreurs d'îlots inconnus, ces marins sportifs familiers des top niveaux et ces scientifiques de haut vol ont confié leur phénoménal destin à la mer.

Dépourvus du moindre biscuit de survie, certains se sont sustentés avec des harengs pacqués, des clovisses charnues, avec du phytoplancton, voire des rhodophycées, et ont ainsi survécu. Croisant des vraquiers ou des thoniers, vainquant des vents cycloniques, ils se sont aussi dégagés de lames qui les auraient engloutis. 

Que n'auraient-ils donné alors pour rallier les atolls ensoleillés du Pacifique ou même pour voir, tel Jonas, les fanons des baleines ! \"Terre à bâbord !\" A mille milles des côtes, loin du pays qui les a vus naître, ils ont vécu dans l'immensité pélagique, là où l'horizon rejoint l'infini.

Quels qu'ils soient, un jour, après s'être laissé buriner par les embruns salés et s'être mesurés à la force des flots lors des courses transocéaniques, hantés par l'inénarrable aventure des mers, ils ont retrouvé la terre ferme.";

function extraireMots($dictee, $nbcar = 5, $mot='')
{
	$dictee = str_replace("\n", " ", $dictee);
	$tableau = explode(' ', $dictee);
	
	$nbmots = count($tableau);
	$dictionnaire = [];

	foreach($tableau as $mots)
	{
		
		$mots = rtrim($mots, ',');
		$mots = rtrim($mots, '.');
		$mots = rtrim($mots, ':');
		$mots = ltrim($mots, '"');
		
		if (strpbrk($mots, "-")!=false)
		{
			$motComposes = explode('-', $mots);
			
			if (mb_strlen($motComposes[0])>= $nbcar)
			{
				$dictionnaire[]=$motComposes[0];
			}
			if (mb_strlen($motComposes[1])>= $nbcar)
			{
				$dictionnaire[]=$motComposes[1];
			}
		}
		elseif (mb_strlen($mots) >= $nbcar)
		{
			$dictionnaire[] = $mots;
		}

	}
	
	$motPresent = in_array($mot, $dictionnaire);
	$resultat = array($nbmots, $dictionnaire, $motPresent);
	
	return $resultat;
}

$dictionnaire = extraireMots($dictee, 5, "soient");

foreach ($dictionnaire[1] as $mots)
{
	echo $mots." ".mb_strlen($mots)."<br/>";
}

echo "<br/>Contient ".$dictionnaire[0]." mots<br/>";

if ($dictionnaire[2]==true)
{
	echo "<br/>Ce mot est present";
}
else
{
	echo "<br/>Ce mot n'est pas présent";
}
?>


</body>
</html>