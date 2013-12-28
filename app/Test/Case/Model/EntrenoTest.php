<?php
App::uses('Entreno', 'Model');

/**
 * Entreno Test Case
 *
 */
class EntrenoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Entreno = ClassRegistry::init('Entreno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entreno);

		parent::tearDown();
	}

}
