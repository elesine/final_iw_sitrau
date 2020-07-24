<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Assignment Entity
 *
 * @property int $id
 * @property int|null $academic_semester_id
 * @property int|null $course_id
 * @property int|null $section_id
 * @property int|null $shift_id
 * @property int|null $teacher_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\AcademicSemester $academic_semester
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Section $section
 * @property \App\Model\Entity\Shift $shift
 * @property \App\Model\Entity\Teacher $teacher
 */
class Assignment extends Entity
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
        'academic_semester_id' => true,
        'course_id' => true,
        'section_id' => true,
        'shift_id' => true,
        'teacher_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'academic_semester' => true,
        'course' => true,
        'section' => true,
        'shift' => true,
        'teacher' => true,
    ];
}
