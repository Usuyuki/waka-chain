<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\TestCase;
use Usuyuki\WakaChain\GenerateRandomWakaChain;
use Usuyuki\WakaChain\WakaChain;

final class GenerateRandomWakaChainTest extends TestCase
{
    public function test(): void
    {
        $subject = new GenerateRandomWakaChain();

        $this->assertInstanceOf(WakaChain::class, $subject->FromOgura100());
        $delimiter = '-';
        $this->assertMatchesRegularExpression('/.{4,6}-.{6,8}-.{4,6}-.{6,8}-.{6,8}/u', $subject->FromOgura100()->generateInJaKana($delimiter));
    }
}