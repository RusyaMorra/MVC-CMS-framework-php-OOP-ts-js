   const {parallel, series} = require('gulp');     //Добавляем Gulp src и Watch dest parallel

   const taskspath =  require('./gulp/path/tasks');//Пути всех тасок


   const task  =   require(taskspath.bsync);       //task browserSync
   const task2 =   require(taskspath.pug);         //task pug
   const task3 =   require(taskspath.clean);       //task cleanDist
   const task4 =   require(taskspath.images);      //imagecompress
   const task5 =   require(taskspath.scripts);     //scripts
   const task6 =   require(taskspath.styles);      //styles
   const task7 =   require(taskspath.build);       //build
   const task8 =   require(taskspath.watch);       //watching

   const browsersync = task.browsersync;           //task briwsersync
   const pugCompile  = task2.pugCompile;           //task pug
   const cleanDist   = task3.cleanDist;            //cleanDist
   const images      = task4.images;               //imagecompress
   const scripts     = task5.scripts;              //scripts
   const styles      = task6.styles;               //styles
   const build       = task7.build;                //build
   const watching    = task8.watching;             //watching



   exports.styles      = styles;      //Некий output функции стилей
   exports.pugCompile  = pugCompile;  //Некий output функции pug
   exports.watching    = watching;    //Некий output функции слежения
   exports.browsersync = browsersync; //Некий output функции обновления браузера
   exports.scripts     = scripts;     //Некий output функции скриптов
   exports.images      = images ;     //Некий output Картинок
   exports.cleanDist   = cleanDist;   //Некий output чистки диста


   exports.build       = series(cleanDist, images/*, build*/);                             //Некий output билда
   exports.default     = parallel(pugCompile, styles, scripts/*, browsersync*/, watching);  //Запускаем паралельно
