<?php
App::uses('SeoABTest', 'Seo.Model');

/**
 * SeoABTest Test Case
 *
 */
class SeoABTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.seo.seo_a_b_test',
		'plugin.seo.seo_uri'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SeoABTest = ClassRegistry::init('Seo.SeoABTest');
	}
/**
 * Test Instance
 *
 * @return void
 */
	public function testInstance() {
		$this->assertTrue(is_a($this->SeoABTest, 'SeoABTest'));
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SeoABTest);

		parent::tearDown();
	}

	public function testBlank() {
	}

}
