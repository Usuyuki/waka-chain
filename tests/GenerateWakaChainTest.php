<?php

declare(strict_types=1);

namespace usuyuki\WakaChain;

use Usuyuki\WakaChain\TestCase;
use Usuyuki\WakaChain\GenerateWakaChain;

final class GenerateWakaChainTest extends TestCase
{
    public function test()
    {
        $subject = new GenerateWakaChain();

        $this->assertSame('a', $subject->randomCreateFromOgura100());
    }
}