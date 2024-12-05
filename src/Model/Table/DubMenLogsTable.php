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
 * DubMenLogs Model
 *
 * @property \DubMenbers\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \DubMenbers\Model\Entity\DubMenLog newEmptyEntity()
 * @method \DubMenbers\Model\Entity\DubMenLog newEntity(array $data, array $options = [])
 * @method array<\DubMenbers\Model\Entity\DubMenLog> newEntities(array $data, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenLog get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \DubMenbers\Model\Entity\DubMenLog findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\DubMenbers\Model\Entity\DubMenLog> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenLog|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenLog saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenLog>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenLog>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenLog>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenLog> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenLog>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenLog>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenLog>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenLog> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DubMenLogsTable extends Table
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

        $this->setTable('dub_men_logs');
        $this->setDisplayField('action');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'DubMenbers.Users',
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
            ->integer('mypage_id')
            ->requirePresence('mypage_id', 'create')
            ->notEmptyString('mypage_id');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->allowEmptyString('type');

        $validator
            ->scalar('action')
            ->maxLength('action', 255)
            ->requirePresence('action', 'create')
            ->notEmptyString('action');

        $validator
            ->scalar('target')
            ->maxLength('target', 255)
            ->allowEmptyString('target');

        $validator
            ->scalar('original')
            ->allowEmptyString('original');

        $validator
            ->scalar('after')
            ->allowEmptyString('after');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => '0']);

        return $rules;
    }
}
