$( document ).ready(function() {
    getModules();
});
function getModules() {
	$.ajax({
		url: '/progress_room_1/public/modules/getModules',
		type: "post",
		data: {'id':$('input[name=course_id]').val(), '_token': $('input[name=_token]').val()},
		success: function(data){  
			updateDivModules(data); 
			console.log(data);               
		}
	}); 
}
function updateDivModules(modules){
	var container_modules = $('#container_modules');
	container_modules.empty();
	for (var i = 0; i <= modules.length -1;i++) {
		console.log(modules[i])
		var modul = $(document.createElement('div'));
		modul.attr('class','course-content');

		var modulName = $(document.createElement('div'));
		modulName.attr('class','course-unit');

		var link = $(document.createElement('a'));
		link.attr("href", '../module/'+modules[i].module_id+'/1');
		
		link.append(modules[i].module_name);
		modulName.append(link);
		modul.append(modulName);

		
		container_modules.append(modul);
	};
}
function saveModule() {
	var name = $('#name_module');
	var description = $('#description_module');
	var required_score = $('#required_score');
	var attempts = $('#attempts');
	var token = $('#_token');
	var course_id = $('#course_id');
	$.ajax({
		url: '/progress_room_1/public/modules/newSave',
		type: "post",
		data: {'name':name.val(),
				'description':description.val() ,
				'required_score':required_score.val() ,
				'attempts':attempts.val(),
				'course_id':course_id.val(),
				'_token':token.val()},
		success: function(data){
			var alert = $("#alert_model");
			var content = $(document.createElement('ul'));
			var msj = $(document.createElement('li'));

			msj.append('El modulo fue guardado exitosamente');
			content.append(msj);
			alert.append(content);
			alert.css('display','block');
			getModules(); 			             
		}
	}); 	
}