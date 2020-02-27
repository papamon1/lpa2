const path = require('path');

module.exports = {
    watch: true,
    entry: [
		'./src/js/lpa.js',
		'./src/js/lightbox-1.0.0.min.js',
        './src/scss/lpa.scss'        
    ],
    output: {
        filename: './js/lpa.js',
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [
            {
				test: /\.scss$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: 'css/[name].css',
						}
					},
					{
						loader: 'extract-loader'
					},
					{
						loader: 'css-loader?-url'
					},
					{
						loader: 'postcss-loader'
					},
					{
						loader: 'sass-loader'
					}
				]
			}
        ]
    }
};