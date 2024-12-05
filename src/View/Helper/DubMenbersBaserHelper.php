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

namespace DubMenbers\View\Helper;

use BaserCore\View\Helper\BcPluginBaserHelperInterface;
use Cake\View\Helper;

/**
 * DubMenbers Baser Helper
 */
class DubMenbersBaserHelper extends Helper implements BcPluginBaserHelperInterface
{

    /**
     * Helper
     * @var array
     */
    //public array $helpers = ['DubMenbers.DubMenbers'];

    /**
     * Method
     * @return array[]
     */
    public function methods(): array
    {
        return [
            //'getDubMenbersIndex' => ['DubMenbers', 'getIndex'],
        ];
    }

}
