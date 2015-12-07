<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesFixture
 *
 */
class ArticlesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'articleID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'title' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'body' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'userID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tagID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'commentID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'userID' => ['type' => 'index', 'columns' => ['userID'], 'length' => []],
            'tagID' => ['type' => 'index', 'columns' => ['tagID'], 'length' => []],
            'commentID' => ['type' => 'index', 'columns' => ['commentID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['articleID'], 'length' => []],
            'articles_ibfk_1' => ['type' => 'foreign', 'columns' => ['userID'], 'references' => ['users', 'userID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'articles_ibfk_2' => ['type' => 'foreign', 'columns' => ['tagID'], 'references' => ['tags', 'tagID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'articles_ibfk_3' => ['type' => 'foreign', 'columns' => ['commentID'], 'references' => ['comments', 'commentID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'articleID' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'created' => '2015-12-05 18:40:14',
            'modified' => '2015-12-05 18:40:14',
            'userID' => 1,
            'tagID' => 1,
            'commentID' => 1
        ],
    ];
}
