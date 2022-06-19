<!-- @format -->

## お試し実行

```
php examples/index.php
```

## csv から配列ライクな文字列に変換

```
php converter/convert-csv-to-txt.php
```

## テスト

PHPUnit  
https://phpunit.de/getting-started/phpunit-9.html

```
./vendor/bin/phpunit tests
```

## 静的解析

### PHPStan

https://phpstan.org/user-guide/getting-started

```
./vendor/bin/phpstan analyse src tests
```

### Psalm

https://github.com/vimeo/psalm

```
./vendor/bin/psalm
```

自動修正(書き換えられる)

```
./vendor/bin/psalm --issues=all
```

### Phan

https://github.com/phan/phan

```
./vendor/bin/phan --allow-polyfill-parser
```

## DI

PHP-DI
https://php-di.org/doc/getting-started.html

## 参考記事など

[この PHP がテンプレートエンジンのくせに慎重すぎる (前篇)](https://qiita.com/tadsan/items/bf61520eb2d455e0e8b4)

[みんなの PHP 　現場で役立つ最新ノウハウ！](https://www.amazon.co.jp/dp/B08238P624/ref=dp-kindle-redirect?_encoding=UTF8&btkr=1)

[Composer のパッケージを作成して公開するまで](https://tech.innovator.jp.net/entry/2018/12/03/184847)

```

```

## 和歌データ

小倉百人一首  
https://linkdata.org/work/rdf1s6834i/ideas

## バージョンの付け方

[セマンティック バージョニング 2.0.0](https://semver.org/lang/ja/)を採用
