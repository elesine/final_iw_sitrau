<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher; // Add this line

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $names
 * @property string $f_surname
 * @property string $m_surname
 * @property int $dni
 * @property \Cake\I18n\FrozenDate|null $birth_date
 * @property string|null $personal_mail
 * @property string $institutional_mail
 * @property string|null $password
 * @property int|null $university_id
 * @property string|null $role
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\University $university
 * @property \App\Model\Entity\Coordinator[] $coordinators
 * @property \App\Model\Entity\Dean[] $deans
 * @property \App\Model\Entity\Director[] $directors
 * @property \App\Model\Entity\Rector[] $rectors
 * @property \App\Model\Entity\Student[] $students
 * @property \App\Model\Entity\Teacher[] $teachers
 */
class User extends Entity
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
        'names' => true,
        'f_surname' => true,
        'm_surname' => true,
        'dni' => true,
        'birth_date' => true,
        'personal_mail' => true,
        'institutional_mail' => true,
        'password' => true,
        'university_id' => true,
        'role' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'university' => true,
        'coordinators' => true,
        'deans' => true,
        'directors' => true,
        'rectors' => true,
        'students' => true,
        'teachers' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

     // Add this method
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }

}
