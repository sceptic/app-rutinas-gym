<?php
App::uses('Autor', 'Model');

/**
 * Autor Test Case
 *
 */
class AutorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.autor',
		'app.ejercicio',
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
		$this->Autor = ClassRegistry::init('Autor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Autor);

		parent::tearDown();
	}

}
