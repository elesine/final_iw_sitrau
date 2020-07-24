<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UniversityProcedures Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 * @property \App\Model\Table\FacultiesTable&\Cake\ORM\Association\BelongsTo $Faculties
 * @property \App\Model\Table\TypesProceduresTable&\Cake\ORM\Association\BelongsTo $TypesProcedures
 * @property \App\Model\Table\StatusProceduresTable&\Cake\ORM\Association\BelongsTo $StatusProcedures
 *
 * @method \App\Model\Entity\UniversityProcedure get($primaryKey, $options = [])
 * @method \App\Model\Entity\UniversityProcedure newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UniversityProcedure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UniversityProcedure|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UniversityProcedure saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UniversityProcedure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UniversityProcedure[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UniversityProcedure findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UniversityProceduresTable extends Table
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

        $this->setTable('university_procedures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Faculties', [
            'foreignKey' => 'facultie_id',
        ]);
        $this->belongsTo('TypesProcedures', [
            'foreignKey' => 'types_procedure_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('StatusProcedures', [
            'foreignKey' => 'status_procedure_id',
            'joinType' => 'INNER',
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
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('request_detail')
            ->maxLength('request_detail', 255)
            ->allowEmptyString('request_detail');

        $validator
            ->allowEmptyFile('file_attachment');

        $validator
            ->scalar('voucher_number')
            ->maxLength('voucher_number', 100)
            ->allowEmptyString('voucher_number');

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
        $rules->add($rules->existsIn(['student_id'], 'Students'));
        $rules->add($rules->existsIn(['facultie_id'], 'Faculties'));
        $rules->add($rules->existsIn(['types_procedure_id'], 'TypesProcedures'));
        $rules->add($rules->existsIn(['status_procedure_id'], 'StatusProcedures'));

        return $rules;
    }
}
