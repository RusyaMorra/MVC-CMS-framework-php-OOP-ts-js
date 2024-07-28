$(document).ready(function(){
    function getUrl(method,params){
        if (!method) throw new Error('Вы не указали метод!');
        params = params || {};
        params['access_token'] = 'ecd3956d42d2270e132f09c4d01957f4550451633dbd24e393bccb21038a18a9c2ab2d3750e5ad7105231';
        return 'https://api.vk.com/method/'+ method +'?'+ $.param(params)+ '&v=5.52';
    }
    
   

        $.ajax({
            url: getUrl('groups.getMembers',{group_id:169552305,sort:'time_asc',count:7,fields:'photo_100'}) ,
            method: 'GET',
            dataType: 'JSONP',
            success: function(data){
                drawFriends(data.response);
                //console.log(data)
                
            }
        });
    
     function drawFriends(friends){
        
        var html = '';
        for(var i = 1; i < friends.items.length; i++){
          var f = friends.items[i];

          html+=
          '<li>'+  
          '<a target="_blank" href="https://vk.com/id'+ f.id+'">'
          +'<img class="imgvkstyle" src="'+f.photo_100+'"/>'
            +'<div>'
                +'<h4 class="textvkstyle">' + f.first_name +'<br>' + ' '+ f.last_name +'</h4>'
            +'</div>'
          
          +'</a>'
          +'</li>';
        }
         var peapleInGroup= ''
         peapleInGroup+='<div class="vk__num">'+ friends.count +' '+ 'members' +'</div>';

        $('.vk__list').html (html);
        $('.vk__textwrapperg').html (peapleInGroup);
      }

 

});
 
 
