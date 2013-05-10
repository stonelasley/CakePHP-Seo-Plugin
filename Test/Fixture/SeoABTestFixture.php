<?php
/**
 * SeoABTestFixture
 *
 */
class SeoABTestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'seo_uri_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'key' => 'index'),
		'slug' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'roll' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => 'int based roll or Model::function callback', 'charset' => 'utf8'),
		'priority' => array('type' => 'integer', 'null' => false, 'default' => '999', 'length' => 4, 'key' => 'index', 'comment' => 'lower the priority, the more priority it has over the other tests.'),
		'redmine' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'redmine ticket id'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'start_date' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'if null, we ignore it.'),
		'end_date' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'if null, we ignore it.'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'slug' => array('column' => 'slug', 'unique' => 1),
			'seo_uri_id' => array('column' => 'seo_uri_id', 'unique' => 0),
			'is_active' => array('column' => 'is_active', 'unique' => 0),
			'priority' => array('column' => 'priority', 'unique' => 0),
			'end_date' => array('column' => 'end_date', 'unique' => 0),
			'start_date' => array('column' => 'start_date', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'seo_uri_id' => 1,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 1,
			'redmine' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 2,
			'seo_uri_id' => 2,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 2,
			'redmine' => 2,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 3,
			'seo_uri_id' => 3,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 3,
			'redmine' => 3,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 4,
			'seo_uri_id' => 4,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 4,
			'redmine' => 4,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 5,
			'seo_uri_id' => 5,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 5,
			'redmine' => 5,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 6,
			'seo_uri_id' => 6,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 6,
			'redmine' => 6,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 7,
			'seo_uri_id' => 7,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 7,
			'redmine' => 7,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 8,
			'seo_uri_id' => 8,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 8,
			'redmine' => 8,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 9,
			'seo_uri_id' => 9,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 9,
			'redmine' => 9,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
		array(
			'id' => 10,
			'seo_uri_id' => 10,
			'is_active' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'priority' => 10,
			'redmine' => 10,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-05-10',
			'end_date' => '2013-05-10',
			'created' => '2013-05-10 11:57:58',
			'modified' => '2013-05-10 11:57:58'
		),
	);

}
