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
{{macros.input('Nombre', 'text', 'data[Autor][nombre]', 'EntrenoTitulo',data.Autor.nombre)}}
{{macros.input('email', 'email', 'data[Autor][email]', 'email', data.Autor.email)}}
{{macros.input('Password', 'password', 'data[Autor][password]', 'password','')}}

{{macros.submit('Restrarme')}}
</form>
{% endblock %}	

{% block scripts %}

{% endblock %}