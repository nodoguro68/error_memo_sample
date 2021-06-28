const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    mode: 'development',
    entry: './resource/js/app.js',
    output: { 
        filename: 'js/app.js',
        path: path.resolve(__dirname, 'public/'),
    },
    module: {
        rules: [
            {
                // 対象となるファイルの拡張子(scss)
                test: /\.scss$/,
                // Sassファイルの読み込みとコンパイル
                use: [
                    // CSSファイルを抽出するように MiniCssExtractPlugin のローダーを指定
                    {
                        loader: MiniCssExtractPlugin.loader,
                    },
                    // CSSをバンドルするためのローダー
                    {
                        loader: "css-loader",
                        options: {
                            //URL の解決を無効に
                            url: false,
                            // ソースマップを有効に
                            sourceMap: true,
                        },
                    },
                    // Sass を CSS へ変換するローダー
                    {
                        loader: "sass-loader",
                        options: {
                            // dart-sass を優先
                            implementation: require('sass'),
                            sassOptions: {
                                // fibers を使わない場合は以下で false を指定
                                fiber: require('fibers'),
                            },
                            // ソースマップを有効に
                            sourceMap: true,
                        },
                    },
                ],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "css/style.css",
        }),
    ],
    // node_modules を監視（watch）対象から除外
    watchOptions: {
        ignored: /node_modules/  //正規表現で指定
    },
};