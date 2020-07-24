<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Universities Model
 *
 * @property \App\Model\Table\FacultiesTable&\Cake\ORM\Association\HasMany $Faculties
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\University get($primaryKey, $options = [])
 * @method \App\Model\Entity\University newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\University[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\University|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\University saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\University patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\University[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\University findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UniversitiesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('universities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Faculties', [
            'foreignKey' => 'university_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'university_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 40)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 100)
            ->allowEmptyString('address');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        return $validator;
    }
}
