<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hallo World</title>

</head>
<body>
	<?php
	//String
	echo '<h3>Strings</h3>';
	echo '<hr>';

	$firstname = 'Matthias';
	$lastname = 'Gabel';
	$name = "Mein Name ist $firstname $lastname";

	echo $name;

	echo '<br><br>';
	
	echo 'Ausgabe von \' und \"';

	echo '<br><br>';

	echo <<<HereDocString
	Hier steht ein Text, <br>
	der von dem Begrenyer 'HereDocString'<br>
	begrenyt wird.
	HereDocString;

	echo '<br><br>';

	echo "Ich sitye hier an {$firstname}s PC";

	echo '<br><br>';

	echo $firstname . 's Nachname ist ' . $lastname;
	echo '<hr>';

	// Integer und Double/Float
	echo '<h3>Zahlen</h3>';
	echo '<hr>';

	$integer = 7;
	$minimum = -2147483647;
	$maximum = 2147483647;

	$double = 1.2;

	echo "$integer ist ein Integerwert.<br>";
	echo $double . ' ist ein Doublewert.<br>';
	echo '<hr>';

	//Boolean
	echo '<h3>Boolean</h3>';
	echo '<hr>';

	// true -> 1
	// false -> ''

	$true = true;

	$false = !$true; // negiert variable

	$true2 = 1 < 2; // liefert tru

	// logische Operatoren
	// UND: &&, and
	// ODER: ||, or
	// Explizites ODER: xor
	// NICHT: !

	$true3 = $true and $false; // $true3 ist wahr und wird danach UND-verknuepft
	$false2 = $true && $false; // $true und $false werden UND-verknuepft und $false2 wird falsch

	$true4 = $true || $false;
	// ABER: wieder Bindung beachten
	$false3 = $false or $true; // = bindet wieder staerker

	$true5 = $true || $true;

	// Expliyites ODER: "Entweder-Oder"

	$false4 = ($true xor $true);
	$true6 = ($false xor $true);

	var_dump($true,$true2,$true3,$true4,$true5,$true6);
	echo '<br>';
	var_dump($false,$false2,$false3,$false4);
	echo '<hr>';

	// Arrays
	echo '<h3>Arrays</h3>';
	echo '<hr>';

	// 'normale' Arrays

	$firstnames = array('Matze','Dirk','Saskia','Mickey'); // Nur Strings

	$datatypes = array('String',1,2.0,array(1,2,3,4),true); // Array mit mehreren Typen

	var_dump($datatypes);

	// assoziatives Array

	$fruits = array(
		'apple' => array('singular'=>'Apfel','plural'=>'Äpfel','amount'=>5),
		'banana' => array('singular'=>'Banane','plural'=>'Bananen','amount'=>7),
		'pinapple' => array('singular'=>'Ananas','plural'=>'Ananas','amount'=>2)
	);

	// Zugriff und Ausgabe

	echo '<br><br>';
	echo $firstnames[1] . ' hat ' . $fruits['apple']['amount'] . ' ' . $fruits['apple']['plural'];

	// Arithemtische und Stringoperationen

	$a = 1;
	$b = ++$a; // $b ist 2 weil $a um 1 erhoeht wird
	$c = $b++; // $c ist 2, weil zuerst $b zugewiesen wird und dann $b um 1 ehoeht wird

	$c = $c + $a;
	$c += $a; // Kurzschreibweise

	$c--;
	$c /= $a;
	$c *= $a;

	// Modulo-Operator: Restrechnung

	$d = 5 % 2; // $d ist 1, da durch % der Rest einer Ganzzahldivision zugwiesen wird

	// Potenzierung in PHP

	$e = 2 ** 3; // ** ist der Potenyoperator, somit ist $e 2^3 = 8

	// Punktoperator = Erweiterung

	$string = "Hier faengt der Satz an";
	$string .= " und geht hier weiter.";




	?>
</body>

</html>