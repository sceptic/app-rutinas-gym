<?php
App::uses('AppModel', 'Model');
/**
 * Autor Model
 *
 * @property Ejercicio $Ejercicio
 * @property Entreno $Entreno
 * @property Rutina $Rutina
 */
class Autor extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Ejercicio' => array(
			'className' => 'Ejercicio',
			'foreignKey' => 'autor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Entreno' => array(
			'className' => 'Entreno',
			'foreignKey' => 'autor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Rutina' => array(
			'className' => 'Rutina',
			'foreignKey' => 'autor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
