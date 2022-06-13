<?php

declare(strict_types=1);

use Usuyuki\WakaChain\GenerateRandomWakaChain;

require_once __DIR__ . '/../vendor/autoload.php';

$waka = new GenerateRandomWakaChain();
echo $waka->FromOgura100()->generateInJaCC('-') . "\n";
//日本語の小倉百人一首をランダムに1つ選んで57577の順に区切りを-でつける
echo $waka->FromOgura100()->generateInJaKana('_') . "\n";
//日本語ひらがなの小倉百人一首をランダムに1つ選んで57577の順に区切りを_でつける