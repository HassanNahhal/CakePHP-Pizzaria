<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagsFixture
 *
 */
class TagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'tagID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tagName' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'articalID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'userID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'articalID' => ['type' => 'index', 'columns' => ['articalID'], 'length' => []],
            'userID' => ['type' => 'index', 'columns' => ['userID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['tagID'], 'length' => []],
            'tags_ibfk_1' => ['type' => 'foreign', 'columns' => ['userID'], 'references' => ['users', 'userID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tags_ibfk_2' => ['type' => 'foreign', 'columns' => ['articalID'], 'references' => ['articles', 'articleID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'tagID' => 1,
            'tagName' => 'Lorem ipsum dolor sit amet',
            'articalID' => 1,
            'userID' => 1,
            'created' => '2015-12-05 18:40:48',
            'modified' => '2015-12-05 18:40:48'
        ],
    ];
}
