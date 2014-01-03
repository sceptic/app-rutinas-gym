<?php
App::uses('AppModel', 'Model');
App::uses('Sanitize', 'Utility');
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

	

 	 public $validate = array(
        'nombre' => array(
            'alphaNumeric' => array(
                'rule'     => 'alphaNumeric',
                'required' => true,
                'message'  => 'Solo se admiten letras y números'
            ),
            'between' => array(
                'rule'    => array('between', 5, 20),
                'message' => 'Debe tener entre 5 y 20 carácteres'
            )
        ),
        'password' => array(
            'rule'    => 'alphaNumeric',
            'required' => true,
            //'message' => 'Alphabets and numbers only'
        ),
        'email' => array(
            'rule'    => 'email',
            'required' => true,
            'message' => 'Debe ser un email válido'
        ),
        
    );
	public $hasMany = array(

		'Entrenamiento' => array(
			'className' => 'Entrenamiento',
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
	);


    public function saniData(&$data){
     
         $data['Autor']['nombre'] = Sanitize::clean( $data['Autor']['nombre']);
         $data['Autor']['password'] = Sanitize::paranoid( $data['Autor']['password']);
         $data['Autor']['email'] = Sanitize::clean($data['Autor']['email']);
    }

}