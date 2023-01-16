const {src, dest} = require('gulp');      //Добавляем Gulp src и Watch dest parallel

const path = require('./path/path');
const stylesBuild  = path.path.src.styleBuildFrom;
const fonts        = path.path.src.fontsBuildFrom;
const scripts      = path.path.src.jsBuildFrom;
//const html         = path.path.src.htmlBuildFrom;
const outPutBuild  = path.path.build.root;

//Билдим все в dist
module.exports = {
    build:function (){
    return src([
    // stylesBuild,          //Следим за стилями
    // fonts,                //путь из
    // scripts             //путь из
    // html                  //путь из
    ], {base:'app'})         // тянем папки за собой
    .pipe(dest(outPutBuild))     //путь в
    }

}
