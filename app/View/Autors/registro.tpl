{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Registro usuario</h1>
{% endblock %}	
{% block content %}
<form id='crud' method='post'>
{%if error%}
<div class="alert alert-danger alert-dismissable">
        <strong><font><font class="">! El email ya está registrado !</font></font></strong>
</div>
{%endif%}
{{macros.input('Nombre', 'text', 'data[Autor][nombre]', 'EntrenoTitulo',data.Autor.nombre,1,errors.nombre[0])}}
{{macros.input('Email', 'email', 'data[Autor][email]', 'email', data.Autor.email,1, errors.email[0])}}
{{macros.input('Password', 'password', 'data[Autor][password]', 'password','',1, errors.password[0])}}

{{macros.submit('Registrarme')}}
</form>
{% endblock %}	

{% block scripts %}
<script >
$(document).ready(onload)

function onload(){

	$('#submit').click(function(event) {
		$('#crud').submit();
	});
}

</script>
{% endblock %}