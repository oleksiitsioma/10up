const path = require ('path');
const MiniCSSExtractPlugin = require('mini-css-extract-plugin');


module.exports = {
    plugins: [ new MiniCSSExtractPlugin()], 
    output: {
        path: path.resolve( __dirname , 'build'),
        filename: 'bundle.js',
        clean: true
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCSSExtractPlugin.loader, 'css-loader', 'sass-loader'
                ]
            }
        ]
    }

}