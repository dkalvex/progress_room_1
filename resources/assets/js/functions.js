function checkId(id) {
  select_id = $("#select_id");
  if($("#"+id).prop("checked")){
    if(select_id.val() !=""){
      select_id.val(select_id.val()+","+id);
    }else{
      select_id.val(id);
    }
  }else{
    valor = select_id.val().split(",");
    finalIds = "";
    for (var i = 0; i < valor.length ; i++) {
      if(valor[i] != id){
        if(finalIds !=""){
          finalIds = finalIds + "," + valor[i];
        }else{
          finalIds = valor[i];
        }        
      }      
    }
    select_id.val(finalIds);
  }
}
function deleteUser(){  
  if($("#select_id").val() == ""){
    $("#informations").html("Se deben seleccionar usuarios que desea eliminar");
    $("#modal_delete_user").modal('show');
    return false;
  }
  $("#tipo_update").val("3");
  $.ajax({
    url: 'users/updateBeenUser',
    type: "post",
    data: {'select_id':$('input[name=select_id]').val(), '_token': $('input[name=_token]').val(), 'tipo_update': $('input[name=tipo_update]').val()},
    success: function(data){  
      $("#informations").html("Usuarios eliminados correctamente");
      $("#modal_delete_user").modal('show');                 
    }
  }); 
} 
function inactivateUsers(){  
  if($("#select_id").val() == ""){
    $("#informations").html("Se deben seleccionar usuarios que desea desactivar");
    $("#modal_delete_user").modal('show');
    return false;
  }
  $("#tipo_update").val("2");
  $.ajax({
    url: 'users/updateBeenUser',
    type: "post",
    data: {'select_id':$('input[name=select_id]').val(), '_token': $('input[name=_token]').val(), 'tipo_update': $('input[name=tipo_update]').val()},
    success: function(data){  
      $("#informations").html("Usuarios desactivados correctamente");
      $("#modal_delete_user").modal('show');                 
    }
  }); 
} 
function activateUsers(){  
  if($("#select_id").val() == ""){
    $("#informations").html("Se deben seleccionar usuarios que desea desactivar");
    $("#modal_delete_user").modal('show');
    return false;
  }
  $("#tipo_update").val("1");
  $.ajax({
    url: 'users/updateBeenUser',
    type: "post",
    data: {'select_id':$('input[name=select_id]').val(), '_token': $('input[name=_token]').val(), 'tipo_update': $('input[name=tipo_update]').val()},
    success: function(data){  
      $("#informations").html("Usuarios activados correctamente");
      $("#modal_delete_user").modal('show');                 
    }
  }); 
} 

$('#modal_delete_user').bind('hidden.bs.modal', function () {
 location.reload();
});

/*$("#set_image").change(function(){
  alert($("#set_image").val());
   $("#ico_course").attr("src",'../../resources/assets/img/courses/'+$("#set_image").val());
});*/
