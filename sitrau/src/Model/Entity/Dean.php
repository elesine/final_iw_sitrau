<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dean Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $degree_id
 * @property int|null $faculty_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Degree $degree
 * @property \App\Model\Entity\Faculty $faculty
 */
class Dean extends Entity
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
        'user_id' => true,
        'degree_id' => true,
        'faculty_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'degree' => true,
        'faculty' => true,
    ];
}
