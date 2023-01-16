const del  =  require('del');    //Добавляем плагин чистки dist

const path = require('./path/path');
const serverPath = path.path.build.img;


//Функция что бы чистить dist папку
module.exports = {
    cleanDist:function(){
    return del(serverPath)

    }
}
