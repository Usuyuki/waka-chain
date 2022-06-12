<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain\Repository;

class Waka
{
    /** @var array<array{JaCC:array<string>,JaKana:array<string>,JaRoman:array<string>}> */
    protected $waka = [
        [
            'JaCC' => ['', '', '', '', ''],
            'JaKana' => ['', '', '', '', ''],
            'JaRoman' => ['', '', '', '', ''],
        ],
    ];

    public function getWakaArray()
    {
        return $this->waka;
    }

    /**
     * 日本語(漢字とひらがな)で和歌チェーンを生成する
     * @phpstan-param positive-int $id 何番目の和歌かを表すid
     * @param string $delimiter 区切り文字
     */
    public function calculateNumberOfWaka(): int
    {
        return count($this->waka);
    }
}