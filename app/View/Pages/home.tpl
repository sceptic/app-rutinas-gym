{% extends "main.tpl" %}
{% import "macros_form.html" as macros %}
{% block header %}
<h1>Rutinas creadas</h1>
{% endblock %}	
{% block content %}
<table  style='display:block; clear:both;' class="style1 datatableFacturacion">
                                <caption>Historial Facturas</caption>
						<thead>
							<tr>
										<th>Rutina</th>
										<th>Autor</th>
										<th>Descripción</th>
										<th>PDF</th>
							</tr>
						</thead>
						<tbody>
							
									<tr>
										<td>Titulo de la rutina</td>
										<td>Adrian MF.</td>
										<td>Rutina de entrenamiento para ganar masa muscular</td>
										<td>Ver rutina</td>
									</tr>
									<tr>
										<td>Titulo de la rutina</td>
										<td>Adrian MF.</td>
										<td>Rutina de entrenamiento para ganar masa muscular</td>
										<td>Ver rutina</td>
									</tr>
							
						</tbody>
						</table>

{% endblock %}	