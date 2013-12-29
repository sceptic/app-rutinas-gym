{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Crear entrenamientos</h1>
{% endblock %}	

{% block content %}

<div><h2>{{d.nombre}}</h2></div>
<div><strong>Descripción:</strong>{{d.description}} <br/><br/></div>
<div>{{d.content}}</div>

{% endblock %}