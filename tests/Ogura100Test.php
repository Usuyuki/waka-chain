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
        /** @param  */
        $subject = new Ogura100();
        $this->assertInstanceOf(Waka::class, $subject);
    }
    /** @test */
    public function 小倉百人一首の配列が適切なものか(): void
    {
        /** @var string $subject */
        $subject = new Ogura100();
        $wakaArray = $subject->getWakaArray();

        //配列か？
        $this->assertIsArray($wakaArray);

        /**
         * 和歌配列全体の精査
         */
        foreach ($wakaArray as $waka) {
            //日本語とカナの連想配列が存在するか
            $this->assertArrayHasKey('JaCC', $waka);
            $this->assertArrayHasKey('JaKana', $waka);

            /**
             * 和歌配列個別の精査
             */
            foreach ($waka['JaCC'] as $ku) {
                //漢字またはひらがなの文字列になっているか（空白など無いか）
                echo 'asserting:' . $ku . "\n";
                $this->assertMatchesRegularExpression('/(\p{Han}|\p{Hiragana})+/u', $ku);
            }
            foreach ($waka['JaKana'] as $ku) {
                //ひらがなのみの文字列になっているか（空白など無いか）
                echo 'asserting:' . $ku . "\n";
                $this->assertMatchesRegularExpression('/\p{Hiragana}{4,6}/u', $ku);
            }
        }
    }
}