<?php
App::uses('Rutina', 'Model');

/**
 * Rutina Test Case
 *
 */
class RutinaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rutina',
		'app.entreno'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rutina = ClassRegistry::init('Rutina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rutina);

		parent::tearDown();
	}

}
