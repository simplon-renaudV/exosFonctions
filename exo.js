var nbvoyelles = 0;
var voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
//var remp_voyelles = ['4', '3', '1', '0', '6', '9'];

do
{
	var phrase = prompt('Entrez une phrase : ');
	//phrase2 = '';

	nbvoyelles = 0;

	for (i = 0; i < phrase.length; i++)
	{
		//v=false;
		for (j = 0; j < voyelles.length; j++)
		{
			if (phrase[i] == voyelles[j])
			{
		//		phrase2 += remp_voyelles[j];
		//		v = true;
				nbvoyelles++;
			}
		}
		/*if (v == false)
		{
			phrase2 += phrase[i];
		} */
	}

	if (nbvoyelles <= 5)
	{
		alert('Il y a seulement ' + nbvoyelles + ' voyelles dans cette phrase, c\'est pas assez, il en faudrait 10');
	}
	else if (nbvoyelles > 5 && nbvoyelles < 10)
	{
		alert('Il y a ' + nbvoyelles + ' voyelles, c\'est pas mal, il en manque encore un peu pour arriver a 10');
	}
	else
	{
		alert('Il y a ' + nbvoyelles + ' voyelles, c\'est assez pour cet exercice');
	}	

} while (nbvoyelles <= 10);

alert(phrase2);