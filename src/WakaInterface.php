<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

interface WakaInterface
{
    /**
     * 日本語(漢字とひらがな)で和歌チェーンを生成する
     * @param string $delimiter 区切り文字
     */
    public function generateInJpCC(string $delimiter): string;
    /**
     * 日本語(ひらがな)で和歌チェーンを生成する
     * @param string $delimiter 区切り文字
     */
    public function generateInJpKana(string $delimiter): string;
    /**
     * 日本語(ローマ字)で和歌チェーンを生成する
     * @param string $delimiter 区切り文字
     */
    public function generateInJpRoman(string $delimiter): string;
}
