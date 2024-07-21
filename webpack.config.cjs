const path = require('path');

module.exports = {
    entry: './src/index.js', // Le point d'entrée de votre application
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist') // Le répertoire de sortie pour le fichier bundlé
    },
    mode: 'production', // Mode de production pour la minification
    resolve: {
        extensions: ['.js'] // Extensions de fichiers à résoudre
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader', // Assurez-vous que babel-loader est installé
                    options: {
                        presets: ['@babel/preset-env'] // Assurez-vous que @babel/preset-env est installé
                    }
                }
            }
        ]
    }
};
