<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\TestCase;
use Usuyuki\WakaChain\GenerateRandomWakaChain;
use Usuyuki\WakaChain\WakaChain;

final class GenerateRandomWakaChainTest extends TestCase
{

    /** @test */
    public function 小倉百人一首でひらがな出力できるか(): void
    {
        $subject = new GenerateRandomWakaChain();
        $this->assertInstanceOf(WakaChain::class, $subject->FromOgura100());
        $delimiter = '-';
        $this->assertMatchesRegularExpression('/\p{Hiragana}{4,6}-\p{Hiragana}{6,8}-\p{Hiragana}{4,6}-\p{Hiragana}{6,8}-\p{Hiragana}{6,8}/u', $subject->FromOgura100()->generateInJaKana($delimiter));
    }
    /** @test */
    public function 小倉百人一首で漢字が出力できるか(): void
    {
        $subject = new GenerateRandomWakaChain();
        $this->assertInstanceOf(WakaChain::class, $subject->FromOgura100());
        $delimiter = '-';
        $this->assertMatchesRegularExpression('/(\p{Han}|\p{Hiragana})+-(\p{Han}|\p{Hiragana})+-(\p{Han}|\p{Hiragana})+-(\p{Han}|\p{Hiragana})+-(\p{Han}|\p{Hiragana})+/u', $subject->FromOgura100()->generateInJaCC($delimiter));
    }
}