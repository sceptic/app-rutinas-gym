{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Crear entrenos</h1>
{% endblock %}	
{% block content %}
<form id='crud' method='post'>



{{macros.input('Descripción', 'text', 'data[Entrenamiento][description]', 'EntrenoTitulo',data.Entrenamiento.description)}}
{{macros.input('Título entrenamiento', 'text', 'data[Entrenamiento][nombre]', 'EntrenoTitulo', data.Entrenamiento.nombre)}}
{{macros.textarea('Entrenamiento', 'text', 'data[Entrenamiento][content]', 'EntrenoTitulo',data.Entrenamiento.content)}}

{{macros.submit('Guardar entrenamiento')}}

</form>
{% endblock %}	

{% block scripts %}
<script type="text/javascript">

$(document).ready(function(){


$('#submit').click(function(){

	//$('#crud').submit();
})

});

</script>
{% endblock %}