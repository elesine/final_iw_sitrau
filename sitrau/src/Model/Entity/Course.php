<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $name
 * @property int $credits
 * @property int $hours_per_week
 * @property int|null $course_type_id
 * @property int|null $semester_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CourseType $course_type
 * @property \App\Model\Entity\Semester $semester
 * @property \App\Model\Entity\Assignment[] $assignment
 */
class Course extends Entity
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
        'credits' => true,
        'hours_per_week' => true,
        'course_type_id' => true,
        'semester_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'course_type' => true,
        'semester' => true,
        'assignment' => true,
    ];
}
