<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain\Repository;

use Usuyuki\WakaChain\Repository\Waka;

/**
 * 小倉百人一首のリポジトリ
 */
class Ogura100 extends Waka
{
    public function __construct()
    {
        $this->waka = [
            [
                "JaCC" => ['秋の田の', 'かりほの庵の', '苫をあらみ', 'わが衣手は', '露にぬれつつ'],
                'JaKana' => ['あきのたの', 'かりおのいおの', 'とまをあらみ', 'わがころもでは', 'つゆにぬれつつ'],
                'JaRoman' => ['', '', '', '', ''],
            ],
            [
                'JaCC' => ['春過ぎて', '夏来にけらし', '白妙の', '衣ほすてふ', '天の香具山'],
                'JaKana' => ['はるすぎて', 'なつきにけらし', 'しろたえの', 'ころもほすちょう', 'あまのかぐやま'],
                'JaRoman' => ['', '', '', '', ''],
            ],
        ];
    }
}