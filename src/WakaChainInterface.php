<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\WakaInterface;

/**
 * 和歌チェーンのインターフェイス
 */
interface WakaChainInterface
{
    /**
     * 小倉百人一首から生成する
     */
    public function FromOgura100(): WakaInterface;
}
