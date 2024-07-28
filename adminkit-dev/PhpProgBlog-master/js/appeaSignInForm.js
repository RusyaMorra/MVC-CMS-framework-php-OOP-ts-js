var registerform = document.getElementById('registerform');
var logform = document.getElementById('logform');
var btnsgin = document.getElementById('btnsgin');
var btnregister = document.getElementById('btnregister');
var btnsgin2 = document.getElementById('btnsgin2');
var btnregister2 = document.getElementById('btnregister2');

btnregister.addEventListener('click',()=>{
    regformappear()
})
btnsgin.addEventListener('click',()=>{
    logformappear()
})
btnregister2.addEventListener('click',()=>{
    regformappear()
})
btnsgin2.addEventListener('click',()=>{
    logformappear()
})




       
function regformappear(){
logform.style.display="none"
registerform.style.display="block"
 
}
function logformappear(){
registerform.style.display="none"
logform.style.display="block"

 
}






