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
  $.ajax({
    url: 'users/deleteUser',
    type: "post",
    data: {'select_id':$('input[name=select_id]').val(), '_token': $('input[name=_token]').val()},
    success: function(data){  
      $("#informations").html("Usuarios eliminados correctamente");
      $("#modal_delete_user").modal('show');                 
    }
  }); 
} 
$('#modal_delete_user').bind('hidden.bs.modal', function () {
 location.reload();
});