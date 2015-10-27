$(document).ready(function(){
  $('#email').blur(function(){            
    $.ajax({
      url: 'validaEmail',
      type: "post",
      data: {'email':$('input[name=email]').val(), '_token': $('input[name=_token]').val()},
      success: function(data){                
        if(data>0){
          var row = document.createElement('div');
          row.className = 'alert alert-warning';

          var data = document.createElement('ul');

          var name = document.createElement('li');
          name.innerHTML = 'El email '+$('#email').val()+' Existe';

          data.appendChild(name);
          row.appendChild(data);
         
          $('#error_email').empty(row);
          $('#error_email').append(row);
           document.getElementById('email').value="";
        }else{
          var row = document.createElement('div');
          row.className = 'alert alert-success';

          var data = document.createElement('ul');


          var name = document.createElement('li');
          name.innerHTML = 'El email es valido';

          data.appendChild(name);
          row.appendChild(data);
          $('#error_email').empty(row);
          $('#error_email').append(row);         
        }        
      }
    });      
  });  
});