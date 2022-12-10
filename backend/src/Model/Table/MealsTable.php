<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Meals Model
 *
 * @property \App\Model\Table\TrainingsTable&\Cake\ORM\Association\BelongsToMany $Trainings
 * @property \App\Model\Table\TrainingsUsersTable&\Cake\ORM\Association\BelongsToMany $TrainingsUsers
 *
 * @method \App\Model\Entity\Meal newEmptyEntity()
 * @method \App\Model\Entity\Meal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Meal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Meal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Meal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Meal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Meal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Meal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Meal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Meal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Meal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Meal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Meal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MealsTable extends Table
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

        $this->setTable('meals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Trainings', [
            'foreignKey' => 'meal_id',
            'targetForeignKey' => 'training_id',
            'joinTable' => 'trainings_meals',
        ]);
        $this->belongsToMany('TrainingsUsers', [
            'foreignKey' => 'meal_id',
            'targetForeignKey' => 'trainings_user_id',
            'joinTable' => 'trainings_users_meals',
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
            ->scalar('day')
            ->maxLength('day', 10)
            ->requirePresence('day', 'create')
            ->notEmptyString('day');

        $validator
            ->scalar('meal')
            ->maxLength('meal', 9)
            ->requirePresence('meal', 'create')
            ->notEmptyString('meal');

        $validator
            ->nonNegativeInteger('creator')
            ->allowEmptyString('creator');

        $validator
            ->nonNegativeInteger('modifier')
            ->allowEmptyString('modifier');

        return $validator;
    }
}
