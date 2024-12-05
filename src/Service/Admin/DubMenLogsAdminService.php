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
 * DubMenLogs Admin Service
 */
class DubMenLogsAdminService extends \DubMenbers\Service\DubMenLogsService implements DubMenLogsAdminServiceInterface
{

    /**
     * get view vars for index
     * @param \Cake\Datasource\Paging\PaginatedInterface $dubMenLogs
     * @return array
     */
    public function getViewVarsForIndex(\Cake\Datasource\Paging\PaginatedInterface $dubMenLogs): array
    {
        return [
            'dubMenLogs' => $dubMenLogs
        ];
    }

    /**
     * get view vars for add
     * @param \Cake\Datasource\EntityInterface $dubMenLog
     * @return array
     */
    public function getViewVarsForAdd(\Cake\Datasource\EntityInterface $dubMenLog): array
    {
        return [
            'dubMenLog' => $dubMenLog
        ];
    }

    /**
     * get view vars for edit
     * @param \Cake\Datasource\EntityInterface $dubMenLog
     * @return array
     */
    public function getViewVarsForEdit(\Cake\Datasource\EntityInterface $dubMenLog): array
    {
        return [
            'dubMenLog' => $dubMenLog
        ];
    }

    /**
     * get view vars for edit
     * @param \Cake\Datasource\EntityInterface $dubMenLog
     * @return array
     */
    public function getViewVarsForView(\Cake\Datasource\EntityInterface $dubMenLog): array
    {
        return [
            'dubMenLog' => $dubMenLog
        ];
    }

}
