const {src, dest} = require('gulp');                  //Добавляем Gulp src и Watch dest parallel
const imagemin    = require('gulp-imagemin');   //Плагин для сжатия картинок

const path = require('./path/path');
const serverPath = path.path.src.img;
const output = path.path.build.img;


//Функция сжатия картинок
module.exports = {
    images: function (){
        return src(serverPath) //Путь из
        .pipe(imagemin(
            [
                imagemin.gifsicle({interlaced: true}),
                imagemin.mozjpeg({quality: 55, progressive: true}),
                imagemin.optipng({optimizationLevel: 5}),                   // Оптимизация
                imagemin.svgo({
                    plugins: [
                        {removeViewBox: true},
                        {cleanupIDs: false}
                    ]
                })
            ]
        ))
        .pipe(dest(output))    //Путь в

    }
}
