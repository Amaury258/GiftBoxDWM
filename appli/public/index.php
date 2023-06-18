<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

/* application boostrap */
$app = (require_once __DIR__ . '/../src/conf/bootstrap.php');

$app->setBasePath(__DIR__.'/index.php'); // A remplacer par le chemin vers ce fichier si jamais ça fonctionne pas

/* routes loading */
(require_once __DIR__ . '/../src/conf/routes.php')($app);

$app->run();
