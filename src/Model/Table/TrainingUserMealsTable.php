<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrainingUserMeals Model
 *
 * @property \App\Model\Table\TrainingUsersTable&\Cake\ORM\Association\BelongsTo $TrainingUsers
 * @property \App\Model\Table\MealsTable&\Cake\ORM\Association\BelongsTo $Meals
 *
 * @method \App\Model\Entity\TrainingUserMeal newEmptyEntity()
 * @method \App\Model\Entity\TrainingUserMeal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUserMeal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUserMeal get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrainingUserMeal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TrainingUserMeal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUserMeal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUserMeal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingUserMeal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingUserMeal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUserMeal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUserMeal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUserMeal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrainingUserMealsTable extends Table
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

        $this->setTable('training_user_meals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('TrainingUsers', [
            'foreignKey' => 'training_user_id',
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
        $rules->add($rules->existsIn('training_user_id', 'TrainingUsers'), ['errorField' => 'training_user_id']);
        $rules->add($rules->existsIn('meal_id', 'Meals'), ['errorField' => 'meal_id']);

        return $rules;
    }
}
