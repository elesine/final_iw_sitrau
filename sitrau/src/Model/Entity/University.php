<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * University Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Faculty[] $faculties
 * @property \App\Model\Entity\User[] $users
 */
class University extends Entity
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
        'address' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'faculties' => true,
        'users' => true,
    ];
}
