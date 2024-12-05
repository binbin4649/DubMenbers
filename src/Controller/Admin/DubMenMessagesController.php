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

namespace DubMenbers\Controller\Admin;

use BaserCore\Controller\Admin\BcAdminAppController;

/**
 * DubMenMessages Controller
 *
 * @property \DubMenbers\Model\Table\DubMenMessagesTable $DubMenMessages
 */
class DubMenMessagesController extends BcAdminAppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index(\DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service)
    {
		$this->set($service->getViewVarsForIndex(
			$this->paginate($service->getIndex())
		));
    }

    /**
     * View method
     *
     * @param \DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service
     * @param string|null $id Dub Men Message id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view(\DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service, int $id = null)
    {
        $this->set($service->getViewVarsForView($service->get((int) $id)));
    }

    /**
     * Add method
     *
     * @param \DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add(\DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service)
    {
        if ($this->request->is('post', 'patch', 'put')) {
            // EVENT DubMenMessages.beforeAdd
            $event = $this->dispatchLayerEvent('beforeAdd', [
                'data' => $this->getRequest()->getData()
            ]);
            if ($event !== false) {
                $data = ($event->getResult() === null || $event->getResult() === true) ? $event->getData('data') : $event->getResult();
                $this->setRequest($this->getRequest()->withParsedBody($data));
            }

            try {
                $entity = $service->create($this->getRequest()->getData());

                // EVENT DubMenMessages.afterAdd
                $this->dispatchLayerEvent('afterAdd', [
                    'data' => $entity
                ]);

                $this->BcMessage->setSuccess(__d('baser_core', "DubMenMessages「{0}」を登録しました。", $entity->name));
                return $this->redirect(['action' => 'edit', $entity->id]);
            } catch (\Cake\ORM\Exception\PersistenceFailedException $e) {
                $entity = $e->getEntity();
                $this->BcMessage->setError(__d('baser_core', '入力エラーです。内容を修正してください。'));
            } catch (\Throwable $e) {
                $this->BcMessage->setError(__d('baser_core', 'データベース処理中にエラーが発生しました。' . $e->getMessage()));
            }
        }
        $this->set($service->getViewVarsForAdd($entity ?? $service->getNew()));
    }

    /**
     * Edit method
     *
     * @param \DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service
     * @param string|null $id Dub Men Message id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit(\DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service, $id = null)
    {
        $entity = $service->get((int) $id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            // EVENT DubMenMessages.beforeEdit
            $event = $this->dispatchLayerEvent('beforeEdit', [
                'data' => $this->getRequest()->getData()
            ]);
            if ($event !== false) {
                $data = ($event->getResult() === null || $event->getResult() === true) ? $event->getData('data') : $event->getResult();
                $this->setRequest($this->getRequest()->withParsedBody($data));
            }

            try {
                $entity = $service->update($entity, $this->request->getData());

                // EVENT DubMenMessages.afterEdit
                $this->dispatchLayerEvent('afterEdit', [
                    'data' => $entity
                ]);

                $this->BcMessage->setSuccess(__d('baser_core', "DubMenMessages「{0}」を更新しました。", $entity->name));
                return $this->redirect(['action' => 'edit', $id]);
            } catch (\Cake\ORM\Exception\PersistenceFailedException $e) {
                $entity = $e->getEntity();
                $this->BcMessage->setError(__d('baser_core', '入力エラーです。内容を修正してください。'));
            } catch (\Throwable $e) {
                $this->BcMessage->setError(__d('baser_core', 'データベース処理中にエラーが発生しました。' . $e->getMessage()));
            }
        }

        $this->set($service->getViewVarsForEdit($entity));
    }

    /**
     * Delete method
     *
     * @param \DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service
     * @param string|null $id Dub Men Message id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete(\DubMenbers\Service\Admin\DubMenMessagesAdminServiceInterface $service, $id = null)
    {
        $this->getRequest()->allowMethod(['post', 'delete']);
        try {
            $entity = $service->get((int) $id);
            if ($service->delete((int) $id)) {
                $this->BcMessage->setSuccess(__d('baser_core',
                    'エントリー「{0}」を削除しました。',
                    $entity->name
                ));
            }
        } catch (\Throwable $e) {
            $this->BcMessage->setError(__d('baser_core', 'データベース処理中にエラーが発生しました。') . $e->getMessage());
        }
        return $this->redirect(['action' => 'index']);
    }
}
