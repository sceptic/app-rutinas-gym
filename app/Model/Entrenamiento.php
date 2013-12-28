<?php
class Entrenamiento extends AppModel {

public $displayField = 'nombre';

public $belongsTo = array(
		'Autor' => array(
			'className' => 'Autor',
			'foreignKey' => 'autor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
