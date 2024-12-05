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

namespace DubMenbers\Service\Admin;

/**
 * DubMenMessages Admin Service
 */
class DubMenMessagesAdminService extends \DubMenbers\Service\DubMenMessagesService implements DubMenMessagesAdminServiceInterface
{

    /**
     * get view vars for index
     * @param \Cake\Datasource\Paging\PaginatedInterface $dubMenMessages
     * @return array
     */
    public function getViewVarsForIndex(\Cake\Datasource\Paging\PaginatedInterface $dubMenMessages): array
    {
        return [
            'dubMenMessages' => $dubMenMessages
        ];
    }

    /**
     * get view vars for add
     * @param \Cake\Datasource\EntityInterface $dubMenMessage
     * @return array
     */
    public function getViewVarsForAdd(\Cake\Datasource\EntityInterface $dubMenMessage): array
    {
        return [
            'dubMenMessage' => $dubMenMessage
        ];
    }

    /**
     * get view vars for edit
     * @param \Cake\Datasource\EntityInterface $dubMenMessage
     * @return array
     */
    public function getViewVarsForEdit(\Cake\Datasource\EntityInterface $dubMenMessage): array
    {
        return [
            'dubMenMessage' => $dubMenMessage
        ];
    }

    /**
     * get view vars for edit
     * @param \Cake\Datasource\EntityInterface $dubMenMessage
     * @return array
     */
    public function getViewVarsForView(\Cake\Datasource\EntityInterface $dubMenMessage): array
    {
        return [
            'dubMenMessage' => $dubMenMessage
        ];
    }

}
