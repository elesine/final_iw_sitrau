<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AssignmentFixture
 */
class AssignmentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'assignment';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'academic_semester_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'course_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'section_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'shift_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'teacher_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => 'activo o inactivo', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'fecha de creacion', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'fecha de ultima modificacion', 'precision' => null],
        '_indexes' => [
            'academic_semester_key' => ['type' => 'index', 'columns' => ['academic_semester_id'], 'length' => []],
            'course_key' => ['type' => 'index', 'columns' => ['course_id'], 'length' => []],
            'section_key' => ['type' => 'index', 'columns' => ['section_id'], 'length' => []],
            'shift_key' => ['type' => 'index', 'columns' => ['shift_id'], 'length' => []],
            'teacher_key' => ['type' => 'index', 'columns' => ['teacher_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'assignment_ibfk_1' => ['type' => 'foreign', 'columns' => ['academic_semester_id'], 'references' => ['academic_semesters', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'assignment_ibfk_2' => ['type' => 'foreign', 'columns' => ['course_id'], 'references' => ['courses', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'assignment_ibfk_3' => ['type' => 'foreign', 'columns' => ['section_id'], 'references' => ['sections', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'assignment_ibfk_4' => ['type' => 'foreign', 'columns' => ['shift_id'], 'references' => ['shifts', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'assignment_ibfk_5' => ['type' => 'foreign', 'columns' => ['teacher_id'], 'references' => ['teachers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'academic_semester_id' => 1,
                'course_id' => 1,
                'section_id' => 1,
                'shift_id' => 1,
                'teacher_id' => 1,
                'status' => 1,
                'created' => '2020-05-23 02:00:18',
                'modified' => '2020-05-23 02:00:18',
            ],
        ];
        parent::init();
    }
}
