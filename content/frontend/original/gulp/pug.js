const {src, dest} = require('gulp');      //Добавляем Gulp src и Watch dest parallel
const pug         = require('gulp-pug');       //pug
const rename = require('gulp-rename');

const path = require('./path/path');
const serverPath = path.path.src.pug;
const output = path.path.src.pugOutPut;

//Функция копиляции pug
module.exports = {
    pugCompile: function (){
        return src(serverPath)
        .pipe(
            pug({
                pretty:true
            })
        )
        .pipe(rename({
            extname: '.php'
        }))
        .pipe(dest(output));
    }
}
