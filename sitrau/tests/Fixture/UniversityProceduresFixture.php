<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UniversityProceduresFixture
 */
class UniversityProceduresFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'student_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => 'ID estudiante', 'precision' => null, 'autoIncrement' => null],
        'facultie_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => 'ID facultad, dependencia de la facultad a quien se dirige', 'precision' => null, 'autoIncrement' => null],
        'types_procedure_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => 'ID tipos de tramites', 'precision' => null, 'autoIncrement' => null],
        'request_detail' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'detalle de solicitud', 'precision' => null, 'fixed' => null],
        'file_attachment' => ['type' => 'binary', 'length' => 4294967295, 'null' => true, 'default' => null, 'comment' => 'adjunto archivos ', 'precision' => null],
        'status_procedure_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'voucher_number' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Numero de vauchero o ticket de pago', 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => 'activo o inactivo', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'fecha de ultima modificacion', 'precision' => null],
        '_indexes' => [
            'student_key' => ['type' => 'index', 'columns' => ['student_id'], 'length' => []],
            'facultie_key' => ['type' => 'index', 'columns' => ['facultie_id'], 'length' => []],
            'types_procedure_key' => ['type' => 'index', 'columns' => ['types_procedure_id'], 'length' => []],
            'status_procedure_key' => ['type' => 'index', 'columns' => ['status_procedure_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'university_procedures_ibfk_1' => ['type' => 'foreign', 'columns' => ['student_id'], 'references' => ['students', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'university_procedures_ibfk_2' => ['type' => 'foreign', 'columns' => ['facultie_id'], 'references' => ['faculties', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'university_procedures_ibfk_3' => ['type' => 'foreign', 'columns' => ['types_procedure_id'], 'references' => ['types_procedures', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'university_procedures_ibfk_4' => ['type' => 'foreign', 'columns' => ['status_procedure_id'], 'references' => ['status_procedures', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'date' => '2020-05-23 05:18:03',
                'student_id' => 1,
                'facultie_id' => 1,
                'types_procedure_id' => 1,
                'request_detail' => 'Lorem ipsum dolor sit amet',
                'file_attachment' => 'Lorem ipsum dolor sit amet',
                'status_procedure_id' => 1,
                'voucher_number' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'modified' => '2020-05-23 05:18:03',
            ],
        ];
        parent::init();
    }
}
