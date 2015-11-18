<?php 
$bilder = scandir ('horizons'); 							// Bilder einlesen
$bilder_sauber = array_slice($bilder, 2); 			// Parent und Home entfernen
shuffle ($bilder_sauber); 									// Reihenfolge mischen
$anzahl_bilder = count($bilder_sauber); 				// Anzahl ermitteln für den counter 
$count = 0; 													// counter
$eins = 1; 														// array fängt bei 0 an, für modulo will ich aber bei 1 anfangen
while($count < $anzahl_bilder) { 						// für jedes Element des Array einen html-code ausgeben
	echo "<img src=\"horizons/$bilder_sauber[$count]\" alt=\"\" />";
	if ($eins%3 == 0) 										// jedes dritte Mal einen Linebreak
		echo "<br>";
	$count++;
	$eins++;
	}
?>
	