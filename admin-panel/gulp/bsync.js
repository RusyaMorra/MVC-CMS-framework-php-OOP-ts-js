//const browserSync  = require('browser-sync').create();         //Добавляем автообнавление браузера
const path = require('./path/path');
const serverPath = path.path.src.root;


const task  =   require('./browserSync');        //task browserSync
const browserSync = task.browserSync;           //task briwserSync
//Функция  авто обнавления браузера
module.exports = {
   browsersync: function (){
   browserSync.init({
       server: {
           baseDir: serverPath  //Основная директория

       },
       browser: 'Yandex.lnk',
       notify: false,

   });

   }
}
