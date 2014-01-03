{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Rutinas gimnasio</h1>
{% endblock %}	
{% block content %}

{%if empty == 1%}
{{macros.warning('Aun no has creado ningun entrenamiento. <a href="/crear-rutina">Crear rutina</a>')}}
{%endif%}
<table class="style1 datatable">

            <caption>Mis entrenamientos</caption>
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
						<td><a href='/rutinas/{{r.Entrenamiento.id}}.pdf'><img src='/img/pdf.png'/></a> 
							<a href='/rutinas/{{r.Entrenamiento.id}}' class='btn btn-default btn-xs'><span class='glyphicon glyphicon-eye-open'> </a> <a href='/rutinas/{{r.Entrenamiento.id}}.pdf'> &nbsp;
							<a href='/editar-rutina/{{r.Entrenamiento.id}}' class='btn btn-default btn-xs'><span class='glyphicon glyphicon-pencil'> </a> <a href='/rutinas/{{r.Entrenamiento.id}}.pdf'> &nbsp;
							<a href='/borrar-rutina/{{r.Entrenamiento.id}}' class='btn btn-default btn-xs'><span class='glyphicon glyphicon-trash'> </a>
						</td>
					</tr>
		
				{% endfor %}
							
			</tbody>
			</table>

{% endblock %}	