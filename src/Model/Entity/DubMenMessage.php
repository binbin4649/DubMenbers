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
 * DubMenMessage Entity
 *
 * @property int $id
 * @property int $mypage_id
 * @property int|null $user_id
 * @property string|null $status
 * @property string|null $type
 * @property string|null $contact_address
 * @property string $title
 * @property string|null $body
 * @property \Cake\I18n\DateTime|null $submit_datetime
 * @property \Cake\I18n\DateTime|null $flash_datetime
 * @property \Cake\I18n\DateTime|null $read_datetime
 * @property bool|null $is_error
 * @property bool|null $is_flash
 * @property bool|null $is_read
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \DubMenbers\Model\Entity\User $user
 */
class DubMenMessage extends Entity
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
        'contact_address' => true,
        'title' => true,
        'body' => true,
        'submit_datetime' => true,
        'flash_datetime' => true,
        'read_datetime' => true,
        'is_error' => true,
        'is_flash' => true,
        'is_read' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
