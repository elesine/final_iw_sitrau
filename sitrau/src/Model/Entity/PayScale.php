<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PayScale Entity
 *
 * @property int $id
 * @property string $name
 * @property int $amount
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Student[] $students
 */
class PayScale extends Entity
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
        'amount' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'students' => true,
    ];
}
