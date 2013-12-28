<?php
App::uses('AppModel', 'Model');
/**
 * Entreno Model
 *
 * @property Autor $Autor
 */
class Entreno extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


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
		)
	);
}
