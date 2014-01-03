<?php
class Entrenamiento extends AppModel {

public $displayField = 'nombre';


public $validate = array(
        'nombre' => array(
                 'rule'    => array('between', 5, 20),
                'required' => true,
                'message'  => 'Debe tener entre 5 y 20 carácteres'
        ),
        'description' => array(
            'rule'    => array('between', 5, 40),
          	'required' => true,
            'message'  => 'Debe tener entre 5 y 200 carácteres'
        ),
        'content' => array(
            'rule'    => array('minLength', 50),
            'required' => true,
            'message' => 'Debe tener más de 50 carácteres'
        ),
        
    );

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
