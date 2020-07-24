<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Faculty Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $university_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\University $university
 * @property \App\Model\Entity\Dean[] $deans
 * @property \App\Model\Entity\Department[] $departments
 */
class Faculty extends Entity
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
        'university_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'university' => true,
        'deans' => true,
        'departments' => true,
    ];
}
