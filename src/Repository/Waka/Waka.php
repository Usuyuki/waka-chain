<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain\Repository\Waka;

/**
 * 和歌の基底クラス
 * @phpstan-type wakaArray array<array{JaCC:array<string>,JaKana:array<string>}>
 */
class Waka
{
    /** @var wakaArray */
    protected $waka = [
        [
            'JaCC' => ['', '', '', '', ''],
            'JaKana' => ['', '', '', '', ''],
        ],
    ];
    /**
     * 配列をそのまま帰す関数
     *
     * @phpstan-return wakaArray
     */
    public function getWakaArray(): array
    {
        return $this->waka;
    }

    /**
     * 日本語(漢字とひらがな)で和歌チェーンを生成する
     * @todo ここで型エラーの警告がエディタで出るが問題なし（エディタがおかしい）
     */
    public function calculateNumberOfWaka(): int
    {
        return count($this->waka);
    }
}