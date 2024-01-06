/*********************************
    ディレクトリ構成
*********************************/

/
　┣━ src //ビルド前のCSS＆JSファイル（サーバにはアップロードしない）
　┃　　┣━ scss
　┃　　┃　　┣━ base //基本設定などを格納
　┃　　┃　　┃　　┗━ _base.scss //基本設定
　┃　　┃　　┣━ global //mixin,変数などを格納
　┃　　┃　　┃　　┣━ _valiables.scss //変数
　┃　　┃　　┃　　┗━ _media.scss //メディアクエリ
　┃　　┃　　┃　　　　　：
　┃　　┃　　┣━ layout //レイアウトに使うBlockを格納
　┃　　┃　　┃　　┗━ _container.scss //コンテナ
　┃　　┃　　┣━ module //モジュールとして使うBlockを格納
　┃　　┃　　┃　　┣━ _header.scss //ヘッダー
　┃　　┃　　┃　　┗━ _footer.scss //フッター
　┃　　┃　　┃　　　　　：
　┃　　┃　　┣━ page //ページ毎に使うCSSを格納
　┃　　┃　　┃　　┗━ _top.scss //indexページ
　┃　　┃　　┃　　　　　：
　┃　　┃　　┣━ utility //クラス単体で使うCSSを格納
　┃　　┃　　┃　　┗━ _helper.scss //ヘルパークラス
　┃　　┃　　┣━ wordpress //WordPress用のCSS
　┃　　┃　　┃　　┣━ _wp_dropdown.scss //WP用ドロップダウン
　┃　　┃　　┃　　┗━ _wp_block-editor.scss //ブロックエディタ用CSS
　┃　　┃　　┃　　　　　：
　┃　　┃　　┗━ style.scss
　┃　　┗━ js
　┃　　 　　┣━ module //モジュールに分けたjsを格納
　┃　　 　　┃　　┗━ xxx.js
　┃　　 　　┃　　┗━ wp_xxx.js //WP用JS
　┃　　 　　┃　　　　　：
　┃　　 　　┗━ main.js
　┣━ assets
　┃　　┣━ css //リセットCSSなどを格納（ビルドされたCSSの格納場所）
　┃　　┣━ js //プラグインを入れる際はこちらに格納
　┃　　┣━ img //画像を格納
　┃　　┗━ favicon //ファビコンを格納（ビルドされたJSの格納場所）
　┣━ plugins //自作プラグイン（サーバの/wp-content/plugins/に格納する）
　┃　　┗━ xxx
　┣━ index.php //WordPress基本ファイル
　┣━ style.css //WordPress基本ファイル
　┣━ screenshot.png //WordPress管理画面用テーマスクリーンショット
　┣━ functions.php //function格納ファイル
　┣━ header.php //ヘッダーテンプレート
　┣━ footer.php //フッターテンプレート
　┗━ front-page.php
　 　　 　　：



/*********************************
    環境構築方法
*********************************/

1.「npm init -y」と入力し「package.json」を作成
2.「npm install -D gulp」と入力しgulpプラグインをインストール
3.「npm install -D sass」と入力しDartSass対応化プラグインをインストール
4.「npm install -D gulp-sass」と入力しSassをコンパイルするプラグインをインストール
5.「npm install -D gulp-autoprefixer@8.0.0」と入力しベンダープレフィックスを自動付与するプラグインをインストール（バージョン8.0.0）
6.「npm install -D gulp-cssnano」と入力しSassをミニファイ化するプラグインをインストール
7.「npm install -D gulp-rename」と入力しリネームプラグインをインストール
8.「npm install -D gulp-sourcemaps」と入力しソースマップを作成するプラグインをインストール
9.「npm install -D gulp-uglify」と入力しJSをミニファイ化するプラグインをインストール
10.「npm install -D webpack」と入力しwebpackプラグインをインストール
11.「npm install -D webpack-stream」と入力しgulpとwebpackを連携するプラグインをインストール
12.「gulpfile.js」を他のプロジェクトからコピーする
13.「.browserslistrc」を他のプロジェクトからコピーする
14.「webpack.config.js」を他のプロジェクトからコピーする
15.「npx gulp」と入力するとgulpが起動する
