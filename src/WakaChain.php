<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\Repository\Waka\Waka;

/**
 * ランダムに和歌チェーンを生成する
 */
class WakaChain
{
    public function __construct(
        private int $id,
        private Waka $waka
    ) {
    }

    /**
     * 日本語(漢字とひらがな)で和歌チェーンを生成する
     */
    public function generateInJaCC(string $delimiter): string
    {
        $waka = $this->waka->getWakaArray();
        return implode($delimiter, $waka[$this->id]['JaCC']);
    }

    /**
     * 日本語(ひらがな)で和歌チェーンを生成する
     */
    public function generateInJaKana(string $delimiter): string
    {
        $waka = $this->waka->getWakaArray();
        return implode($delimiter, $waka[$this->id]['JaKana']);
    }

    /**
     * 日本語(ローマ字)で和歌チェーンを生成する
     * ヘボン式
     * @todo ヘボン式のルールを自作関数で組み込むのが少し難易度高い
     */
//    public function generateInJaRoman(string $delimiter): string
//    {
//        $waka = $this->waka->getWakaArray();
//        return implode($delimiter, $waka[$this->id]['JaRoman']);
//    }
}