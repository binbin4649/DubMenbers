<?php
declare(strict_types=1);
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.7
 * @license       https://basercms.net/license/index.html MIT License
 */

namespace DubMenbers\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DubMenMypages Model
 *
 * @method \DubMenbers\Model\Entity\DubMenMypage newEmptyEntity()
 * @method \DubMenbers\Model\Entity\DubMenMypage newEntity(array $data, array $options = [])
 * @method array<\DubMenbers\Model\Entity\DubMenMypage> newEntities(array $data, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenMypage get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \DubMenbers\Model\Entity\DubMenMypage findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenMypage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\DubMenbers\Model\Entity\DubMenMypage> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenMypage|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenMypage saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenMypage>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenMypage>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenMypage>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenMypage> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenMypage>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenMypage>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenMypage>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenMypage> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DubMenMypagesTable extends Table
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

        $this->setTable('dub_men_mypages');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->allowEmptyString('type');

        $validator
            ->scalar('role')
            ->maxLength('role', 255)
            ->allowEmptyString('role');

        $validator
            ->scalar('position_name')
            ->maxLength('position_name', 255)
            ->allowEmptyString('position_name');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->scalar('auth_type')
            ->maxLength('auth_type', 255)
            ->requirePresence('auth_type', 'create')
            ->notEmptyString('auth_type');

        $validator
            ->scalar('auth_code')
            ->maxLength('auth_code', 255)
            ->allowEmptyString('auth_code');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->boolean('is_notice')
            ->requirePresence('is_notice', 'create')
            ->notEmptyString('is_notice');

        $validator
            ->scalar('contact_type')
            ->maxLength('contact_type', 255)
            ->allowEmptyString('contact_type');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->integer('sex')
            ->allowEmptyString('sex');

        $validator
            ->integer('age')
            ->allowEmptyString('age');

        $validator
            ->scalar('job')
            ->maxLength('job', 255)
            ->allowEmptyString('job');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 255)
            ->allowEmptyString('tel');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 255)
            ->allowEmptyString('zip');

        $validator
            ->integer('prefectures')
            ->allowEmptyString('prefectures');

        $validator
            ->scalar('address_1')
            ->maxLength('address_1', 255)
            ->allowEmptyString('address_1');

        $validator
            ->scalar('address_2')
            ->maxLength('address_2', 255)
            ->allowEmptyString('address_2');

        $validator
            ->scalar('magiclink')
            ->maxLength('magiclink', 255)
            ->allowEmptyString('magiclink');

        $validator
            ->boolean('is_magiclink')
            ->allowEmptyString('is_magiclink');

        $validator
            ->scalar('memo')
            ->requirePresence('memo', 'create')
            ->notEmptyString('memo');

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
        $rules->add($rules->isUnique(['username']), ['errorField' => '0']);

        return $rules;
    }
}
