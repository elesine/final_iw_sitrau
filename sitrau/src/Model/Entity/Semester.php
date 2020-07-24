<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Semester Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $curricula_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Curricula $curricula
 * @property \App\Model\Entity\Course[] $courses
 */
class Semester extends Entity
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
        'curricula_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'curricula' => true,
        'courses' => true,
    ];
}
