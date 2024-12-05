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

namespace DubMenbers\Model\Entity;

use Cake\ORM\Entity;

/**
 * DubMenLog Entity
 *
 * @property int $id
 * @property int $mypage_id
 * @property int $user_id
 * @property string|null $status
 * @property string|null $type
 * @property string $action
 * @property string|null $target
 * @property string|null $original
 * @property string|null $after
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \DubMenbers\Model\Entity\User $user
 */
class DubMenLog extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'mypage_id' => true,
        'user_id' => true,
        'status' => true,
        'type' => true,
        'action' => true,
        'target' => true,
        'original' => true,
        'after' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
