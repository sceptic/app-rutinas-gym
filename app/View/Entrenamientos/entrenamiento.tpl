{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Crear entrenamientos</h1>
{% endblock %}	

{% block content %}

<div class="panel panel-default">
  <div class="panel-heading">
	<h2>{{d.nombre}}</h2>
	
  </div>
  <div class="panel-body">
  <div class="row" style='padding:10px;'>
  <div class="col-lg-6"class="col-lg-6"><strong>Autor:</strong> {{data.Autor.nombre}}</div>
  <div class="col-lg-6"><strong>Fecha:</strong> {{d.created}}</div>
  </div>
  <div class="well"><strong>Descripción:</strong> {{d.description}}</div>
  <div style='padding:10px;'>
  	{{d.content}}
  	<a href='{{d.id}}.pdf'><img src='/img/pdf.png'/></a>
  </div>
  </div>
</div>




{% endblock %}

