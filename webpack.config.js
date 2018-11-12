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

var walk = function(dir, done) {
    var results = [];
    fs.readdir(dir, function(err, list) {
        if (err) return done(err);
        var pending = list.length;
        if (!pending) return done(null, results);
        list.forEach(function(file) {
            file = path.resolve(dir, file);
            fs.stat(file, function(err, stat) {
                if (stat && stat.isDirectory()) {
                    walk(file, function(err, res) {
                        results = results.concat(res);
                        if (!--pending) done(null, results);
                    });
                } else {
                    results.push(file);
                    if (!--pending) done(null, results);
                }
            });
        });
    });
};

const htmlPlugins = generateHtmlPlugins(path.join(paths.TEMPLATES, 'pages'));

module.exports = {
    entry: {
        index: path.join(paths.SRC, 'index.js')
    },
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
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: 'css-loader'
                })
            },
            {
                test: /\.(png|svg|jpg|gif)$/,
                use: 'file-loader'
            },
            {
                test: /\.ejs$/,
                loader: 'ejs-compiled-loader'
            }
        ],
    },
    plugins: [
        new CopyWebpackPlugin([
            {from:'src/assets', to:'assets'}
        ])
    ].concat(htmlPlugins)
};