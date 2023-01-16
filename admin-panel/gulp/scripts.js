const {src, dest}       = require('gulp');                                //Добавляем Gulp src и Watch dest parallel
const concat            = require('gulp-concat');                   //Добавляем конкатинацию
const uglify            = require('gulp-uglify-es').default;        //Добавляем плагин uglify
const babel             = require('gulp-babel');                    //babel
//const browserSync       = require('browser-sync').create();         //Добавляем автообнавление браузера


const task  =   require('./browserSync');        //task browserSync
const browserSync = task.browserSync;           //task briwserSync

const path = require('./path/path');
const serverPath = path.path.src.js;
const output = path.path.src.jsOutput;

//Функция для js
module.exports = {

    scripts: function (){
        return src(serverPath)  //От куда берем...

        .pipe (babel ({
         presets: ['@babel/env']    //bable
         }))
        .pipe(concat('bandle.min.js')) //Конкатинируем
        .pipe(uglify())                //Что делаем(сжимаем)(минифицируем)
        .pipe(dest(output))          //Куда ложем
        .pipe(browserSync.stream())    //Стриминг
     }
}
