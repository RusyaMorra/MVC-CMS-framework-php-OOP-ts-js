const {watch}     = require('gulp');      //Добавляем Gulp src и Watch dest parallel
//const browserSync = require('browser-sync').create();         //Добавляем автообнавление браузера


const task  =   require('./browserSync');        //task browserSync
const browserSync = task.browserSync;           //task briwserSync


const path        = require('./path/path');
const watchStyles = path.path.watch.style;
const watchStylesComponetns = path.path.watch.styleComponents;
const watchJS= path.path.watch.js;
const pugJS= path.path.watch.pug;


const task2       =   require('./pug');          //task pug
const task5       =   require('./scripts');      //scripts
const task6       =   require('./styles');       //styles

const pugCompile  = task2.pugCompile;            //task pug
const styles      = task6.styles;                //styles
const scripts     = task5.scripts;               //scripts



 //Слежение за изменениями
module.exports = {
    watching:function (){
        watch([watchStyles], styles);                                          // слежение за всеми файлами scss
        watch([watchStylesComponetns], styles);                                  // слежение за всеми файлами scss
        watch([watchJS, '!app/js/script.min.js'], scripts);                 // слежение за всеми файлами js
        watch([pugJS], pugCompile).on('change', browserSync.reload);            // отслеживание Html или pug
    }

}
