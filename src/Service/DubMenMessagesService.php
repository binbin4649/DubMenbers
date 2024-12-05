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

namespace DubMenbers\Service;

use Cake\ORM\TableRegistry;

/**
 * DubMenMessages Service
 */
class DubMenMessagesService implements DubMenMessagesServiceInterface
{

    protected $DubMenMessages;
    
    /**
     * constructor
     */
    public function __construct()
    {
        $this->DubMenMessages = TableRegistry::getTableLocator()->get('DubMenbers.DubMenMessages');
    }

    /**
     * get new
     * @return \Cake\Datasource\EntityInterface
     */
    public function getNew(): \Cake\Datasource\EntityInterface
    {
        return $this->DubMenMessages->newEntity([], [
			'validate' => false,
		]);
    }

    /**
     * get
     * @param int $id
     * @param array $options
     * @return \Cake\Datasource\EntityInterface
     */
    public function get(int $id, array $options = []): \Cake\Datasource\EntityInterface
    {
        return $this->DubMenMessages->get($id, $options);
    }

    /**
     * get list
     * @param array $queryParams
     * @return array
     */
    public function getList(array $queryParams = []): array
    {
        return $this->createConditions($this->DubMenMessages->find('list'), $queryParams)->toArray();
    }

    /**
     * get index
     * @return \Cake\Datasource\QueryInterface
     */
    public function getIndex(array $queryParams = []): \Cake\Datasource\QueryInterface
    {
        return $this->createConditions($this->DubMenMessages->find(), $queryParams);
    }

    /**
     * create conditions
     * @param \Cake\Datasource\QueryInterface $query
     * @return \Cake\Datasource\QueryInterface
     */
    public function createConditions(\Cake\Datasource\QueryInterface $query, array $queryParams = [])
    {
        return $query;
    }

    /**
     * create
     * @param array $postData
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function create(array $postData): ?\Cake\Datasource\EntityInterface
    {
        $entity = $this->DubMenMessages->newEntity($postData);
        return $this->DubMenMessages->saveOrFail($entity);
    }

    /**
     * edit
     * @param \Cake\Datasource\EntityInterface $target
     * @param array $postData
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function update(\Cake\Datasource\EntityInterface $target, array $postData): ?\Cake\Datasource\EntityInterface
    {
        $user = $this->DubMenMessages->patchEntity($target, $postData);
        return $this->DubMenMessages->saveOrFail($user);
    }

    /**
     * delete
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $user = $this->get($id);
        return $this->DubMenMessages->delete($user);
    }

}