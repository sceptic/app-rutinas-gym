<?php
App::uses('AppModel', 'Model');
/**
 * Rutina Model
 *
 * @property Autor $Autor
 * @property Ejercicioss $Ejercicioss
 */
class Rutina extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Autor' => array(
			'className' => 'Autor',
			'foreignKey' => 'autor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ejercicioss' => array(
			'className' => 'Ejercicio',
			'foreignKey' => 'ejercicios_ids',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
