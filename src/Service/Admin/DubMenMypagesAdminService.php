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
 * DubMenMypages Admin Service
 */
class DubMenMypagesAdminService extends \DubMenbers\Service\DubMenMypagesService implements DubMenMypagesAdminServiceInterface
{

    /**
     * get view vars for index
     * @param \Cake\Datasource\Paging\PaginatedInterface $dubMenMypages
     * @return array
     */
    public function getViewVarsForIndex(\Cake\Datasource\Paging\PaginatedInterface $dubMenMypages): array
    {
        return [
            'dubMenMypages' => $dubMenMypages
        ];
    }

    /**
     * get view vars for add
     * @param \Cake\Datasource\EntityInterface $dubMenMypage
     * @return array
     */
    public function getViewVarsForAdd(\Cake\Datasource\EntityInterface $dubMenMypage): array
    {
        return [
            'dubMenMypage' => $dubMenMypage
        ];
    }

    /**
     * get view vars for edit
     * @param \Cake\Datasource\EntityInterface $dubMenMypage
     * @return array
     */
    public function getViewVarsForEdit(\Cake\Datasource\EntityInterface $dubMenMypage): array
    {
        return [
            'dubMenMypage' => $dubMenMypage
        ];
    }

    /**
     * get view vars for edit
     * @param \Cake\Datasource\EntityInterface $dubMenMypage
     * @return array
     */
    public function getViewVarsForView(\Cake\Datasource\EntityInterface $dubMenMypage): array
    {
        return [
            'dubMenMypage' => $dubMenMypage
        ];
    }

}
