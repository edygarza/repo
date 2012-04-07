<?php
/* Tip Test cases generated on: 2012-04-07 04:22:00 : 1333765320*/
App::uses('Tip', 'Model');

/**
 * Tip Test Case
 *
 */
class TipTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tip', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Tip = ClassRegistry::init('Tip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tip);

		parent::tearDown();
	}

}
