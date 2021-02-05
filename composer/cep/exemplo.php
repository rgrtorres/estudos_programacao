<?php

require_once "vendor/autoload.php";

use rgrto\cep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('11390300');

print_r($resultado);