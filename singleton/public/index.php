<?php
require('../vendor/autoload.php');


# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = App\Config::getInstance();
$config2 = App\Config::getInstance();
if ($config === $config2) {
    echo "Les deux instances sont identiques";
} else {
    echo "Les deux instances sont différentes";
}