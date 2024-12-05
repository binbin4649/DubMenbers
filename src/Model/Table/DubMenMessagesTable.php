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
 * DubMenMessages Model
 *
 * @property \DubMenbers\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \DubMenbers\Model\Entity\DubMenMessage newEmptyEntity()
 * @method \DubMenbers\Model\Entity\DubMenMessage newEntity(array $data, array $options = [])
 * @method array<\DubMenbers\Model\Entity\DubMenMessage> newEntities(array $data, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenMessage get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \DubMenbers\Model\Entity\DubMenMessage findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenMessage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\DubMenbers\Model\Entity\DubMenMessage> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenMessage|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \DubMenbers\Model\Entity\DubMenMessage saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenMessage>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenMessage>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenMessage>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenMessage> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenMessage>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenMessage>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\DubMenbers\Model\Entity\DubMenMessage>|\Cake\Datasource\ResultSetInterface<\DubMenbers\Model\Entity\DubMenMessage> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DubMenMessagesTable extends Table
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

        $this->setTable('dub_men_messages');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->allowEmptyString('user_id');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->allowEmptyString('type');

        $validator
            ->scalar('contact_address')
            ->maxLength('contact_address', 255)
            ->allowEmptyString('contact_address');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('body')
            ->allowEmptyString('body');

        $validator
            ->dateTime('submit_datetime')
            ->allowEmptyDateTime('submit_datetime');

        $validator
            ->dateTime('flash_datetime')
            ->allowEmptyDateTime('flash_datetime');

        $validator
            ->dateTime('read_datetime')
            ->allowEmptyDateTime('read_datetime');

        $validator
            ->boolean('is_error')
            ->allowEmptyString('is_error');

        $validator
            ->boolean('is_flash')
            ->allowEmptyString('is_flash');

        $validator
            ->boolean('is_read')
            ->allowEmptyString('is_read');

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
