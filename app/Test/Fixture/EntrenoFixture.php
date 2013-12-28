<?php
/**
 * EntrenoFixture
 *
 */
class EntrenoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rutinas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 55, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dias_semana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 55, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'autor_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 70, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'puntuacion' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'rutinas' => 'Lorem ipsum dolor sit amet',
			'dias_semana' => 'Lorem ipsum dolor sit amet',
			'autor_id' => 'Lorem ipsum dolor sit amet',
			'puntuacion' => 1
		),
	);

}
