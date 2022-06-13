<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\Repository\Waka\Ogura100;
use Usuyuki\WakaChain\Repository\Waka\Waka;

/**
 * 小倉百人一首を生成する
 */
class Ogura100Test extends TestCase
{
    /** @test */
    public function 小倉百人一首がWakaクラスか(): void
    {
        $subject = new Ogura100();

        $this->assertInstanceOf(Waka::class, $subject);
    }
}