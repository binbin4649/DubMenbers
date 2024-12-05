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
 * DubMenMypage Entity
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property string|null $type
 * @property string|null $role
 * @property string|null $position_name
 * @property string $username
 * @property string $auth_type
 * @property string|null $auth_code
 * @property string $password
 * @property bool $is_notice
 * @property string|null $contact_type
 * @property string|null $email
 * @property int|null $sex
 * @property int|null $age
 * @property string|null $job
 * @property string|null $tel
 * @property string|null $zip
 * @property int|null $prefectures
 * @property string|null $address_1
 * @property string|null $address_2
 * @property string|null $magiclink
 * @property bool|null $is_magiclink
 * @property string $memo
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class DubMenMypage extends Entity
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
        'name' => true,
        'status' => true,
        'type' => true,
        'role' => true,
        'position_name' => true,
        'username' => true,
        'auth_type' => true,
        'auth_code' => true,
        'password' => true,
        'is_notice' => true,
        'contact_type' => true,
        'email' => true,
        'sex' => true,
        'age' => true,
        'job' => true,
        'tel' => true,
        'zip' => true,
        'prefectures' => true,
        'address_1' => true,
        'address_2' => true,
        'magiclink' => true,
        'is_magiclink' => true,
        'memo' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
