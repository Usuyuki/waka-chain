<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\TestCase;
use Usuyuki\WakaChain\GenerateRandomWakaChain;
use Usuyuki\WakaChain\WakaInterface;
use Usuyuki\WakaChain\Ogura100;

final class GenerateRandomWakaChainTest extends TestCase
{
    public function test(): void
    {
        $subject = new GenerateRandomWakaChain(new Ogura100);

        $this->assertInstanceOf(WakaInterface::class, $subject->FromOgura100());
    }
}
