
 
 
 
 document.querySelector('#elastic  ').oninput= function(){
  
      let val = this.value.trim();
      let elasticItems =  document.querySelectorAll('.content__part  .info__box');
      if(val !=''){
        elasticItems.forEach(function(elem){
        if(elem.innerHTML.search(val) == -1){
            elem.classList.add('hide');
            elem.innerHTML =elem.innerText;

        }else{
            elem.classList.remove('hide');
           let str = elem.innerText;
           elem.innerHTML = insertMark(str,elem.innerText.search(val), val.length);
        }
        });
      }else{
          elasticItems.forEach(function(elem){
            elem.classList.remove('hide');
            elem.innerHTML =elem.innerText;
          });
      }
  }


function insertMark(string,pos,len){


    return string.slice(0,pos) + '<mark>'+string.slice(pos,pos+len)+ '</mark>' + string.slice(pos+ len);

}