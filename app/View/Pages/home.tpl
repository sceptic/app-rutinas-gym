{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Rutinas gimnasio</h1>
{% endblock %}	
{% block content %}
{% if event == 'comprobar-correo'%}
{{macros.success('En breve recibirás un correo para activar la cuenta.')}}
{%endif%}
{% if user_logged is null%}
{{macros.warning('Para crear entrenamientos tienes que estar registrado. <a href="/registro">registrarme</a>')}}
{%else%}
{%if empty == 1%}
{{macros.warning('Aun no se ha creado ningun entrenamiento. <a href="/crear-rutina">Crear rutina</a>')}}
{%endif%}
{%endif%}
<table class="style1 datatable">
            <caption>Entrenamientos usuarios</caption>
			<thead>
				<tr>
					<th>Rutina</th>
					<th>Autor</th>
					<th>Descripción</th>
					<th>PDF</th>
				</tr>
			</thead>
			<tbody>
				{% for r in rutinas%}
					<tr>
						<td>{{r.Entrenamiento.nombre}}</td>
						<td>{{r.Autor.nombre}}</td>
						<td>{{r.Entrenamiento.description}}</td>
						<td><a href='/rutinas/{{r.Entrenamiento.id}}.pdf'><img src='/img/pdf.png'/> <a href='/rutinas/{{r.Entrenamiento.id}}' class='btn btn-default btn-xs'><span class='glyphicon glyphicon-eye-open'> </a> <a href='/rutinas/{{r.Entrenamiento.id}}'>  </td>
					</tr>
		
				{% endfor %}
							
			</tbody>
			</table>
{% endblock %}	