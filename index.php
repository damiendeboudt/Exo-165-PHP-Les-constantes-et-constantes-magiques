<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
const MACONST1 = 12;
const MACONST2 = 2;
echo "Resultat de constante 1 * constante 2 = ".MACONST1 * MACONST2 . "<br>";


const MACONST3 = "C'est cool PHP";
echo "Longueur de constante3 = ".strlen(MACONST3). "<br>";

$result = (MACONST1 + MACONST2) * strlen(MACONST3);
echo "Resultat de (const1 + const2) * longueur const3 = ".$result . "<br>";


echo "<br><br>";
echo "Info sur le fichier: <br>";
echo "- ".basename(__DIR__). "<br>";
echo "- ".basename(__FILE__). "<br>";
echo "- ".maClasse::class . "<br>";

/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum
 * d'informations sur la page actuelle4
 */
// TODO Votre code ici.