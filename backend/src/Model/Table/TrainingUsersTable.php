<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrainingUsers Model
 *
 * @property \App\Model\Table\TrainingsTable&\Cake\ORM\Association\BelongsTo $Trainings
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TrainingUserMealsTable&\Cake\ORM\Association\HasMany $TrainingUserMeals
 *
 * @method \App\Model\Entity\TrainingUser newEmptyEntity()
 * @method \App\Model\Entity\TrainingUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrainingUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TrainingUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrainingUsersTable extends Table
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

        $this->setTable('training_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Trainings', [
            'foreignKey' => 'training_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'serving_one_id',
        ]);
        $this->hasMany('TrainingUserMeals', [
            'foreignKey' => 'training_user_id',
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
            ->boolean('registration_complete')
            ->notEmptyString('registration_complete');

        $validator
            ->nonNegativeInteger('process_step')
            ->allowEmptyString('process_step');

        $validator
            ->nonNegativeInteger('cash_paid')
            ->allowEmptyString('cash_paid');

        $validator
            ->nonNegativeInteger('check_paid')
            ->allowEmptyString('check_paid');

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
        $rules->add($rules->existsIn('training_id', 'Trainings'), ['errorField' => 'training_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('serving_one_id', 'Users'), ['errorField' => 'serving_one_id']);

        return $rules;
    }
}
