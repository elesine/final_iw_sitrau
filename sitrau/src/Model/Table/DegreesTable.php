<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Degrees Model
 *
 * @property \App\Model\Table\CoordinatorsTable&\Cake\ORM\Association\HasMany $Coordinators
 * @property \App\Model\Table\DeansTable&\Cake\ORM\Association\HasMany $Deans
 * @property \App\Model\Table\DirectorsTable&\Cake\ORM\Association\HasMany $Directors
 * @property \App\Model\Table\RectorsTable&\Cake\ORM\Association\HasMany $Rectors
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\HasMany $Teachers
 *
 * @method \App\Model\Entity\Degree get($primaryKey, $options = [])
 * @method \App\Model\Entity\Degree newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Degree[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Degree|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Degree saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Degree patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Degree[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Degree findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DegreesTable extends Table
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

        $this->setTable('degrees');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Coordinators', [
            'foreignKey' => 'degree_id',
        ]);
        $this->hasMany('Deans', [
            'foreignKey' => 'degree_id',
        ]);
        $this->hasMany('Directors', [
            'foreignKey' => 'degree_id',
        ]);
        $this->hasMany('Rectors', [
            'foreignKey' => 'degree_id',
        ]);
        $this->hasMany('Teachers', [
            'foreignKey' => 'degree_id',
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
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('acronym')
            ->maxLength('acronym', 10)
            ->allowEmptyString('acronym');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        return $validator;
    }
}
