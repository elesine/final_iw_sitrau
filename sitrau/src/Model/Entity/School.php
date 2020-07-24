<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * School Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $department_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\AcademicSemester[] $academic_semesters
 * @property \App\Model\Entity\Coordinator[] $coordinators
 * @property \App\Model\Entity\Curricula[] $curriculas
 * @property \App\Model\Entity\Student[] $students
 */
class School extends Entity
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
        'name' => true,
        'department_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'department' => true,
        'academic_semesters' => true,
        'coordinators' => true,
        'curriculas' => true,
        'students' => true,
    ];
}
