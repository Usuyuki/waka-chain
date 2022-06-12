<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\GenerateRandomWakaChain;

$waka = new GenerateRandomWakaChain();

echo $waka->FromOgura100()->generateInJaCC("-");