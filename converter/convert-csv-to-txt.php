<?php

declare(strict_types=1);


function arrayToArrayLikeString(array $array): string
{
    $string = '[';
    foreach ($array as $value) {
        $string .= "'" . $value . "',";
    }
    $string .= ']';
    return $string;
}
/**
 * 和歌の入ったCSVファイルをPHPの配列を模したテキストファイルに変換する
 */
function ogura100(): void
{
    $importPath = 'originalData/csv/ogura.csv';
    $exportPath = 'originalData/exportTxt/ogura.txt';

    //読み込み
    $file = new SplFileObject($importPath);
    $file->setFlags(SplFileObject::READ_CSV);

    //書き込み
    $exportTxt = fopen($exportPath, "w");

    foreach ($file as $line) {
        /**
         * 秋の田の かりほの庵の 苫をあらみ わが衣手は 露にぬれつつ
         * を一旦配列にして、
         * それを''囲みで,つけて書き込む
         */
        if ($line[0] !== null && $line[1] !== 'text') {
            //全角スペースを半角スペースに変換
            $line[2] = str_replace('　', ' ', $line[2]);
            //配列に変換
            $jaCC = explode(' ', $line[1]);
            $jaKana = explode(' ', $line[2]);
            fwrite(
                $exportTxt,
                "[ \n" . "'JaCC'=>" . arrayToArrayLikeString($jaCC) . ",\n'JaKana'=>" . arrayToArrayLikeString($jaKana) . ",\n],\n"
            );
        }
    }
    fclose($exportTxt);
}

ogura100();