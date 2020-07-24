<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypesProcedures Model
 *
 * @property \App\Model\Table\UniversityProceduresTable&\Cake\ORM\Association\HasMany $UniversityProcedures
 *
 * @method \App\Model\Entity\TypesProcedure get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypesProcedure newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypesProcedure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypesProcedure|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypesProcedure saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypesProcedure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypesProcedure[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypesProcedure findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TypesProceduresTable extends Table
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

        $this->setTable('types_procedures');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('UniversityProcedures', [
            'foreignKey' => 'types_procedure_id',
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
            ->boolean('status')
            ->notEmptyString('status');

        return $validator;
    }
}
