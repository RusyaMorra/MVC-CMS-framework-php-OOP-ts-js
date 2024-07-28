
const categorysMenu = document.getElementById('popmenu');


    categorysMenu.addEventListener("mousemove", menuappear)
    document.addEventListener("click",menuappearclose );


    
    
       
    function menuappear(){
    var menu = document.getElementById('menu');
    menu.style.display="block"
    menu.style.display='flex';
    menu.style.justifyContent=' space-between';
    menu.style.alignItems='center';
    menu.style.flexDirection='column';

    }


    function menuappearclose(){
        var menu = document.getElementById('menu');
        menu.style.display="none"

    }





//red ligth if not register

const redclick1 = document.getElementById('red_click1');
const redclick2 = document.getElementById('red_click2');
const redclick3 = document.getElementById('red_click3');
const redclick4 = document.getElementById('red_click4');
const redclick5 = document.getElementById('red_click5');
const redclick6 = document.getElementById('red_click6');
const redclick7 = document.getElementById('red_click7');
const redclick8 = document.getElementById('red_click8');
const redclick9 = document.getElementById('red_click9');
const redclick10 = document.getElementById('red_click10');

var redcolor = document.getElementById('redcolor');
var registerform3 = document.querySelector('.form__reg');
var logform3 = document.querySelector('.form__signin');

redclick1.addEventListener("click",()=>{ 
 regformappear1()
redcolor.style.color='red';

} );

redclick2.addEventListener("click",()=>{
    regformappear1()
   redcolor.style.color='red';

    
    
} );
redclick3.addEventListener("click",()=>{
    regformappear1()
    redcolor.style.color='red';
} );
redclick4.addEventListener("click",()=>{
    regformappear1()
    redcolor.style.color='red';
} );
redclick5.addEventListener("click",()=>{
    regformappear1()
    redcolor.style.color='red';
} );
redclick6.addEventListener("click",()=>{
    regformappear1()
    redcolor.style.color='red';
} );
redclick7.addEventListener("click",()=>{
    regformappear1()
    redcolor.style.color='red';
} );
redclick8.addEventListener("click",()=>{
    regformappear1()
    redcolor.style.color='red';
} );
redclick9.addEventListener("click",()=>{
    regformappear1()
    redcolor.style.color='red';
} );
redclick10.addEventListener("click",()=>{
    regformappear1()
    redcolor.style.color='red';
} );


function regformappear1(){
    logform3.style.display="none"
    registerform3.style.display="block"
     
}



