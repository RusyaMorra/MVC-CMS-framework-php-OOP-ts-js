//Подключаем плагины и сохраняем их в переменной const
const {src, dest}       = require('gulp');      //Добавляем Gulp src и Watch dest parallel
const concat            = require('gulp-concat');                   //Добавляем конкатинацию
const scss              = require('gulp-sass')(require('sass'));                     //Добавляем scss
const autoprefixer      = require('gulp-autoprefixer');             //Добавляем Вендорные префиксы
//const browserSync       = require('browser-sync').create();         //Добавляем автообнавление браузера
const rename = require('gulp-rename');


const task  =   require('./browserSync');        //task browserSync
const browserSync = task.browserSync;           //task briwserSync

const path = require('./path/path');
const serverPath = path.path.src.style;
const output = path.path.src.styleOutput;

//Функция обработки css
module.exports = {

    styles:function (){
        return src(serverPath)                                 //От куда берем...
            .pipe(scss({outputStyle: 'compressed'}))           //Что делаем(сжимаем)
           // .pipe(concat('style.min.css'))                     //Конкатинируем
            .pipe(autoprefixer({
                overrideBrowserslist: ['last 10 version'],     // Для 10 последних версий
                grid:true
            }))
            .pipe(rename({
                extname: '.min.css'
            }))
            .pipe(dest(output))                                //Куда ложем
            .pipe(browserSync.stream())                        //Стриминг

    }
}
