<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\Repository\Waka\Ogura100;

/**
 * ランダムに和歌チェーンを生成する
 */
class GenerateRandomWakaChain
{
    /**
     * 小倉百人一首に含まれる和歌を生成
     *
     */
    public function FromOgura100(): WakaChain
    {
        $waka = new Ogura100();
        // calculateNumberOfWakaが0だと困るので一様の2項演算
        $id = random_int(0, ($waka->calculateNumberOfWaka() === 0 ? 1 : $waka->calculateNumberOfWaka()) - 1);
        return new WakaChain($id, $waka);
    }
}