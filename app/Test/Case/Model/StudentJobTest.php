<?php
App::uses('StudentJob', 'Model');

/**
 * StudentJob Test Case
 */
class StudentJobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student_job',
		'app.event',
		'app.user',
		'app.job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentJob = ClassRegistry::init('StudentJob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentJob);

		parent::tearDown();
	}

}
