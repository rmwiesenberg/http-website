const path = require('path');

const HTMLWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const fs = require('fs');

const paths = {
    DIST: path.resolve(__dirname, 'dist'),
    SRC: path.resolve(__dirname, 'src'),
    TEMPLATES: path.resolve(__dirname, 'src', 'templates'),
    ASSETS: path.resolve(__dirname, 'src', 'assets')
};

// Our function that generates our html plugins
function generateHtmlPlugins (pageDir) {
    // Read files in template directory
    const templateFiles = fs.readdirSync(path.resolve(__dirname, pageDir));
    return templateFiles.map(item => {
        // Split names and extension
        const parts = item.split('.');
        const name = parts[0];
        const extension = parts[1];

        let filename = name;
        if (name !== "index") {
            filename = path.join(name, "index")
        }
        // Create new HTMLWebpackPlugin with options
        return new HTMLWebpackPlugin({
            filename: `${filename}.html`,
            template: path.resolve(__dirname, `${pageDir}/${name}.${extension}`)
        })
    })
}

const htmlPlugins = generateHtmlPlugins(path.join(paths.TEMPLATES, 'pages'));

module.exports = {
    entry: [
        path.join(paths.SRC, 'app.js')
    ],
    devServer: {
        contentBase: paths.SRC
    },
    output: {
        path: paths.DIST,
        filename: 'app.bundle.js',
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                loaders: [
                    'style-loader',
                    'css-loader'
                ]
            },
            {
                test: /\.(ttf|eot|png|svg|jpg|gif)$/,
                use: 'file-loader'
            },
            {
                test: /\.ejs$/,
                loader: 'ejs-compiled-loader'
            }
        ]
    },
    plugins: [
        new CopyWebpackPlugin([
            {from:'src/assets', to:'assets'}
        ])
    ].concat(htmlPlugins)
};