<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\WakaInterface;

/**
 * 小倉百人一首を生成する
 */
class Ogura100 implements WakaInterface
{
    /**
     * 日本語(漢字とひらがな)で和歌チェーンを生成する
     * @param string $delimiter 区切り文字
     */
    public function generateInJpCC(string $delimiter): string
    {
        return "秋の田の-かりほの庵の-苫を荒み-わがころも手は-露に濡れつつ";
    }
    /**
     * 日本語(ひらがな)で和歌チェーンを生成する
     * @param string $delimiter 区切り文字
     */
    public function generateInJpKana(string $delimiter): string
    {
        return "あきのたの-かりほのいほの-とまをあらみ-わがころもでは-つゆにぬれつつ";
    }
    /**
     * 日本語(ローマ字)で和歌チェーンを生成する
     * @param string $delimiter 区切り文字
     */
    public function generateInJpRoman(string $delimiter): string
    {
        return "akinotano-karihonoihono-tomawoarami-wagakoromodehga-tuyuninuretutu";
    }
}
