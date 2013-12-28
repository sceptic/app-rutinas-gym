{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Crear entrenos</h1>
{% endblock %}	
{% block content %}
<div class="entrenos form">
<form action="" id="EntrenoAddForm" method="post" accept-charset="utf-8">
	<div id='rutinaView'>xxxx</div>
	<div style="display:none;"><input type="hidden" name="_method" value="POST"></div>	
	<fieldset>
		<legend>Nuevo plan de entrenamiento</legend>
	<div class="input text">
		{{macros.input('Nombre del entrenamiento', 'text', data.Entreno.nombre, 'EntrenoNombre','')}}
	</div>
	<div class="input text">
		<label for="EntrenoRutinas">Selecciona rutinas</label><br/>
		{%for r in rutinas %}
		<p>
			 <label id='lab{{r.Rutinas.id}}'>{{r.Rutinas.nombre}} - {{r.Rutinas.descripcion}} - {{r.Rutinas.autor_id}}</label>
			 <span class="btn btn-default addRutina" id='{{r.Rutinas.id}}'  target='_new'>Añadir</span>
			 <span id='v{{r.Rutinas.id}}' class="btn btn-default view" title="{{r.Rutinas.id}}">Ver</span>
		</p>

		{%endfor%}
		{{macros.input('Rutinas', 'text', data.Entreno.rutinas, 'EntrenoRutinas','')}}
		
	</div>
	<div class="input text">
		{{macros.input('Dias Semana', 'text', data.Entreno.dias_semana, 'EntrenoDiasSemana','')}}
	</div>
	<div class="input select">
		<label for="EntrenoAutorId">Autor</label>
		<select name="data[Entreno][autor_id]" id="EntrenoAutorId">
			<option value="4">Adrian</option>
		</select>
	</div>
	<div class="input number">
		<label for="EntrenoPuntuacion">Puntuación</label>
		<input name="data[Entreno][puntuacion]" max="10" min="0" type="number" id="EntrenoPuntuacion">
	</div>	
</fieldset>
<div class="submit">
	<a class='btn btn-success' id='submit' >Guardar plan de entrenamiento</a>
</div>
</form>
<div id='adds'></div>
</div>
{% endblock %}
{% block scripts %}
<script>
$(document).ready(function(){
var rutinas=[];
itmsRutinas=0;
//Añadir rutina
$('.addRutina').click(function(event) {

	var idRutina = $(this).attr('id');
	rutinas.push(idRutina);

	html = "<p title='"+idRutina+"' id='p"+itmsRutinas+"'>"+$('#lab'+idRutina).html()+" <a class='btn btn-default quitar' title='"+itmsRutinas+"'>Quitar</a></p>";
	$('#adds').append(html);
	itmsRutinas++;
	console.log('add rutina');
	console.log('Rutinas: '+rutinas.toString());
	$('#EntrenoRutinas').val(rutinas.toString());

	//Quitar rutina
	$('.quitar').click(function(event) {

		
		var itmRutina = $(this).attr('title');
		var element = $('#p'+itmRutina);
		console.log('quito rutina: '+itmRutina);

		
		console.log('index del: '+$('#adds p').index(element));
		idx = $('#adds p').index(element)
		if(idx!=-1) 
			{rutinas.splice(idx, 1)
				console.log('Rutinas: '+rutinas.toString());
				$('#p'+itmRutina).remove();
				$('#EntrenoRutinas').val(rutinas.toString());
			}
	});

});

$('.view').click(function(event) {
	var idRutina = $(this).attr('title');
	$( "#rutinaView" ).load( "../rutinas/view/"+idRutina+" #rutinas_view" );
});

});
</script>
{% endblock %}	