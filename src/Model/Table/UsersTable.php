<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\TrainingUsersTable&\Cake\ORM\Association\HasMany $TrainingUsers
 * @property \App\Model\Table\UserAccountTypesTable&\Cake\ORM\Association\HasMany $UserAccountTypes
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
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
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('TrainingUsers', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserAccountTypes', [
            'foreignKey' => 'user_id',
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
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('chinese_name')
            ->maxLength('chinese_name', 6)
            ->allowEmptyString('chinese_name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->allowEmptyString('gender');

        $validator
            ->scalar('locality')
            ->maxLength('locality', 50)
            ->allowEmptyString('locality');

        $validator
            ->scalar('cell_phone')
            ->maxLength('cell_phone', 15)
            ->allowEmptyString('cell_phone');

        $validator
            ->email('email')
            ->allowEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('line')
            ->maxLength('line', 20)
            ->allowEmptyString('line');

        $validator
            ->scalar('wechat')
            ->maxLength('wechat', 20)
            ->allowEmptyString('wechat');

        $validator
            ->scalar('language')
            ->maxLength('language', 15)
            ->allowEmptyString('language');

        $validator
            ->nonNegativeInteger('country_code')
            ->allowEmptyString('country_code');

        $validator
            ->scalar('password')
            ->maxLength('password', 50)
            ->allowEmptyString('password');

        $validator
            ->dateTime('last_login')
            ->allowEmptyDateTime('last_login');

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
        $rules->add($rules->isUnique(['email'], ['allowMultipleNulls' => true]), ['errorField' => 'email']);

        return $rules;
    }
}
