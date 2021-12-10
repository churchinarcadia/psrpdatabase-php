<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrainingMeals Model
 *
 * @property \App\Model\Table\TrainingsTable&\Cake\ORM\Association\BelongsTo $Trainings
 * @property \App\Model\Table\MealsTable&\Cake\ORM\Association\BelongsTo $Meals
 *
 * @method \App\Model\Entity\TrainingMeal newEmptyEntity()
 * @method \App\Model\Entity\TrainingMeal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingMeal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingMeal get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrainingMeal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TrainingMeal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingMeal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingMeal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingMeal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingMeal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingMeal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingMeal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingMeal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrainingMealsTable extends Table
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

        $this->setTable('training_meals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Trainings', [
            'foreignKey' => 'training_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Meals', [
            'foreignKey' => 'meal_id',
            'joinType' => 'INNER',
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
            ->nonNegativeInteger('cost')
            ->requirePresence('cost', 'create')
            ->notEmptyString('cost');

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
        $rules->add($rules->existsIn('training_id', 'Trainings'), ['errorField' => 'training_id']);
        $rules->add($rules->existsIn('meal_id', 'Meals'), ['errorField' => 'meal_id']);

        return $rules;
    }
}
