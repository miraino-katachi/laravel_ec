# Laravel6.0で簡易的なECサイトを作る

## 課題について
向江先生が作成されたこちらの記事

https://note.com/mukae9/n/n12cc13fd4f90

を参考に作成したソースコードを載せています。

上記の記事の課題を順に取り組んでいただき、ソースコードのわからないところをこちらで参考にしていただければと思います。

## 動作確認
こちらのURLに、実際に動作するアプリケーションを置いています。

動作確認にご活用ください。

https://demo.miraino-katachi.com/laravel_ec/public/

## 開発時の環境

向江先生の記事では「Laradoc」を使用するようになっていますが、XAMPPやMAMPで全く問題ありません。

また、データベースもMySQLではなく、SQLiteでも動作します。

### 課題に取り組んだときの環境

下記の環境で課題をやってみました。

macOS 11.4

PHP 8.0.7

Laravel 6.20.29

Windows環境でも問題なく動きます。

### 一部ソースコードを変更しています
レンタルサーバー上で動作させるために、viewとweb.phpの書き方を少し変更しているところがあります。

## その他
### npm run dev でエラーが出た場合の対処方法

「Laravel6.0(PHP7.3)+MySQL+Laradockで簡易的なECサイトを作る④」の記事
https://note.com/mukae9/n/n103587d08ef2
において、Windows環境で「npm run dev」を実行したときに、下記のようなエラーが出る場合があるようです。

```
'cross-env' は、内部コマンドまたは外部コマンド、
操作可能なプログラムまたはバッチ ファイルとして認識されていません。
```

その場合は、下記のコマンドを実行してみてください。

```
npm install --no-bin-links
npm install --save-dev cross-env
set NODE_OPTIONS=--openssl-legacy-provider
npm run dev
```

