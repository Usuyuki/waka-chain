<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\TestCase;
use Usuyuki\WakaChain\Repository\Ogura100;
use Usuyuki\WakaChain\Repository\Waka;

/**
 * 小倉百人一首を生成する
 */
class Ogura100Test extends TestCase
{
    public function test(): void
    {
        $subject = new Ogura100();

        $this->assertInstanceOf(Waka::class, $subject);
    }
}