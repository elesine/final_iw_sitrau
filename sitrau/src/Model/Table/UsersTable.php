<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\UniversitiesTable&\Cake\ORM\Association\BelongsTo $Universities
 * @property \App\Model\Table\CoordinatorsTable&\Cake\ORM\Association\HasMany $Coordinators
 * @property \App\Model\Table\DeansTable&\Cake\ORM\Association\HasMany $Deans
 * @property \App\Model\Table\DirectorsTable&\Cake\ORM\Association\HasMany $Directors
 * @property \App\Model\Table\RectorsTable&\Cake\ORM\Association\HasMany $Rectors
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\HasMany $Students
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\HasMany $Teachers
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('institutional_mail');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Universities', [
            'foreignKey' => 'university_id',
        ]);
        $this->hasMany('Coordinators', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Deans', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Directors', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Rectors', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Students', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Teachers', [
            'foreignKey' => 'user_id',
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
            ->scalar('names')
            ->maxLength('names', 50)
            ->requirePresence('names', 'create')
            ->notEmptyString('names');

        $validator
            ->scalar('f_surname')
            ->maxLength('f_surname', 20)
            ->requirePresence('f_surname', 'create')
            ->notEmptyString('f_surname');

        $validator
            ->scalar('m_surname')
            ->maxLength('m_surname', 20)
            ->requirePresence('m_surname', 'create')
            ->notEmptyString('m_surname');

        $validator
            ->integer('dni')
            ->requirePresence('dni', 'create')
            ->notEmptyString('dni')
            ->add('dni', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('birth_date')
            ->allowEmptyDate('birth_date');

        $validator
            ->scalar('personal_mail')
            ->maxLength('personal_mail', 50)
            ->allowEmptyString('personal_mail')
	    ->add('email','validFormat',[
        	'rule' => 'email',
        	'message' => 'E-mail must be valid'
	     ]);
        $validator
            ->scalar('institutional_mail')
            ->maxLength('institutional_mail', 50)
            ->requirePresence('institutional_mail', 'create')
	        ->add('email', 'validFormat', [
        	 'rule' => 'email',
       		 'message' => 'E-mail must be valid'
    		])
            ->notEmptyString('institutional_mail');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->scalar('role')
            ->maxLength('role', 20)
            ->allowEmptyString('role');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['dni']));
        $rules->add($rules->existsIn(['university_id'], 'Universities'));

        return $rules;
    }
}
