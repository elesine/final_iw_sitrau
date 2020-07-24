<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UniversityProcedure Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date
 * @property int $student_id
 * @property int|null $facultie_id
 * @property int $types_procedure_id
 * @property string|null $request_detail
 * @property string|resource|null $file_attachment
 * @property int $status_procedure_id
 * @property string|null $voucher_number
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Faculty $faculty
 * @property \App\Model\Entity\TypesProcedure $types_procedure
 * @property \App\Model\Entity\StatusProcedure $status_procedure
 */
class UniversityProcedure extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'date' => true,
        'student_id' => true,
        'facultie_id' => true,
        'types_procedure_id' => true,
        'request_detail' => true,
        'file_attachment' => true,
        'status_procedure_id' => true,
        'voucher_number' => true,
        'status' => true,
        'modified' => true,
        'student' => true,
        'faculty' => true,
        'types_procedure' => true,
        'status_procedure' => true,
    ];
}
