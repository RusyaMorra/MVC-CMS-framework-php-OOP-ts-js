module.exports = {
	path: {
		build: { // Build files
			root: 'build/',   //папка  сборки
			style: 'build/assets/css',  //папка  сборки css
			img: 'app/assets/images',  //папка  сборки картинок
            fonts: 'build/assets/fonts', //папка  сборки шрифтов
			imgFavicons: 'build/assets/images/favicons',
			js: 'build/assets/js',  //папка  сборки js
			zip: 'zip'
		},
		src: { // Source files
            root:'app/',
			pug: 'app/admin-templates-uncompiled/**/*.pug',
			pugOutPut:'app/admin-templates/',
		    htmlBuildFrom: 'app/*.php',
			style: 'app/scss/main.scss',
			styleOutput: 'app/assets/css/',
			styleBuildFrom: 'app/assets/css/style.min.css',
			img: 'app/assets/images-uncompressed/**/*.+(png|jpg|jpeg|gif)',
			js: 'app/assets/js/index.js',
			jsOutput: 'app/assets/js/',
			jsBuildFrom: 'app/js/bandle.min.js',
			fontsBuildFrom: 'app/assets/fonts/**/*',
			resources: 'app/resources/**/*'
		},
		watch: { // Watch files
			json: 'app/data/*.json',
			pug: 'app/**/**/*.pug',
			style: 'app/scss/**.+(sass|scss)',
            styleComponents: 'app/components/**/*.+(sass|scss)',
            js: 'app/js/index.js'
		},
		clean: {
			all: './build'
		}
	}
}
