<?php
App::uses('Ejercicio', 'Model');

/**
 * Ejercicio Test Case
 *
 */
class EjercicioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ejercicio',
		'app.autor',
		'app.entreno',
		'app.rutina'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ejercicio = ClassRegistry::init('Ejercicio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ejercicio);

		parent::tearDown();
	}

}
