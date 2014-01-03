{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Crear entrenamientos</h1>
{% endblock %}	

{% block content %}
<form id='crud' method='post'>

	{# Eventos formulario #}
	{%if save == 1%}
		{{macros.success('Has creado un entrenamiento nuevo.')}}
	{%elseif save == 2%}
		{{macros.success('Has editado tu entrenamiento.')}}
	{%elseif save == 3%}
		{{macros.warning('Hay errores en el formulario.')}}
	{%endif%}

    {# Entradas formulario #}
	{{macros.input('Título entrenamiento', 'text', 'data[Entrenamiento][nombre]', 'EntrenoTitulo', data.Entrenamiento.nombre,1,errors.nombre[0])}}

	{{macros.input('Descripción', 'text', 'data[Entrenamiento][description]', 'EntrenoTitulo',data.Entrenamiento.description,1,errors.description[0])}}

	{{macros.editor('Entrenamiento', 'data[Entrenamiento][content]', 'data[Entrenamiento][content]',data.Entrenamiento.content,1,errors.content[0])}}

	{{macros.submit('Guardar entrenamiento')}}

</form>
{% endblock %}	

{% block scripts %}
<script type="text/javascript">

$(document).ready(function(){
$('.editor').wysihtml5();

$('#submit').click(function(){
	$('#crud').submit();
})

});

</script>
{% endblock %}