module.exports = {
  // モードの設定
  mode: 'development',

  // メインとなるJavaScriptファイル（エントリーポイント）
  entry: `./src/js/main.js`,

  // ファイルの出力設定
  output: {
    //  出力ファイルのディレクトリ名
    path: `${__dirname}/js`,
    // 出力ファイル名
    filename: "main.js"
  }
};