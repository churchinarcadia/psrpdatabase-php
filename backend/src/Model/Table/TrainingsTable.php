<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trainings Model
 *
 * @method \App\Model\Entity\Training newEmptyEntity()
 * @method \App\Model\Entity\Training newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Training[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Training get($primaryKey, $options = [])
 * @method \App\Model\Entity\Training findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Training patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Training[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Training|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Training saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Training[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Training[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Training[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Training[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrainingsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('trainings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('TrainingMeals', [
            'foreignKey' => 'training_id',
        ]);
        $this->hasMany('TrainingUsers', [
            'foreignKey' => 'training_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('year')
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->scalar('month')
            ->maxLength('month', 10)
            ->requirePresence('month', 'create')
            ->notEmptyString('month');

        $validator
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->date('end_date')
            ->allowEmptyDate('end_date');

        $validator
            ->nonNegativeInteger('breakfast_cost')
            ->allowEmptyString('breakfast_cost');

        $validator
            ->nonNegativeInteger('lunch_cost')
            ->allowEmptyString('lunch_cost');

        $validator
            ->nonNegativeInteger('dinner_cost')
            ->allowEmptyString('dinner_cost');

        $validator
            ->scalar('notes')
            ->allowEmptyString('notes');

        $validator
            ->nonNegativeInteger('creator')
            ->allowEmptyString('creator');

        $validator
            ->nonNegativeInteger('modifier')
            ->allowEmptyString('modifier');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['start_date'], ['allowMultipleNulls' => true]), ['errorField' => 'start_date']);

        return $rules;
    }
}
