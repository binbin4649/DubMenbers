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

/**
 * @var \BaserCore\View\BcAdminAppView $this
 * @var \Cake\Datasource\EntityInterface $dubMenMypage
 */
?>

<table class="bca-form-table">
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Name') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->name) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Status') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->status) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Type') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->type) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Role') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->role) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Position Name') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->position_name) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Username') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->username) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Auth Type') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->auth_type) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Auth Code') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->auth_code) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Contact Type') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->contact_type) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Email') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->email) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Job') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->job) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Tel') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->tel) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Zip') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->zip) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Address 1') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->address_1) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Address 2') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->address_2) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Magiclink') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenMypage->magiclink) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Id') ?></th>
    <td class="bca-form-table__input"><?= $this->Number->format($dubMenMypage->id) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Sex') ?></th>
    <td class="bca-form-table__input"><?= $dubMenMypage->sex === null ? '' : $this->Number->format($dubMenMypage->sex) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Age') ?></th>
    <td class="bca-form-table__input"><?= $dubMenMypage->age === null ? '' : $this->Number->format($dubMenMypage->age) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Prefectures') ?></th>
    <td class="bca-form-table__input"><?= $dubMenMypage->prefectures === null ? '' : $this->Number->format($dubMenMypage->prefectures) ?></td>
  </tr>
  <tr>
      <th class="bca-form-table__label"><?= __d('baser_core', 'Created') ?></th>
      <td class="bca-form-table__input"><?= h($dubMenMypage->created) ?></td>
  </tr>
  <tr>
      <th class="bca-form-table__label"><?= __d('baser_core', 'Modified') ?></th>
      <td class="bca-form-table__input"><?= h($dubMenMypage->modified) ?></td>
  </tr>
  <tr>
      <th class="bca-form-table__label"><?= __d('baser_core', 'Is Notice') ?></th>
      <td class="bca-form-table__input"><?= $dubMenMypage->is_notice ? __d('baser_core', 'Yes') : __d('baser_core', 'No'); ?></td>
  </tr>
  <tr>
      <th class="bca-form-table__label"><?= __d('baser_core', 'Is Magiclink') ?></th>
      <td class="bca-form-table__input"><?= $dubMenMypage->is_magiclink ? __d('baser_core', 'Yes') : __d('baser_core', 'No'); ?></td>
  </tr>
</table>

<div class="submit bca-actions">
  <div class="bca-actions__before">
    <?= $this->BcHtml->link(__d('baser_core', '一覧に戻る'), ['action' => 'index'], [
      'class' => 'bca-btn bca-actions__item',
      'data-bca-btn-type' => 'back-to-list'
    ]) ?>
    <?= $this->BcHtml->link(__d('baser_core', '新規登録'), ['action' => 'add'], [
      'class' => 'bca-btn bca-actions__item',
      'data-bca-btn-type' => 'add',
    ]) ?>
  </div>
  <div class="bca-actions__main">
    <?= $this->BcHtml->link(__d('baser_core', '編集'), ['action' => 'edit', $dubMenMypage->id], [
      'class' => 'bca-btn bca-actions__item',
      'data-bca-btn-type' => 'save',
      'data-bca-btn-size' => 'lg',
      'data-bca-btn-width' => 'lg',
    ]) ?>
  </div>
  <div class="bca-actions__sub">
    <?= $this->BcAdminForm->postLink( __d('baser_core', '削除'), ['action' => 'delete', $dubMenMypage->id], [
      'block' => true,
      'confirm' => __d('baser_core', '{0} を本当に削除してもいいですか？', $dubMenMypage->name),
      'class' => 'bca-btn bca-actions__item',
      'data-bca-btn-type' => 'delete',
      'data-bca-btn-size' => 'sm',
      'data-bca-btn-color' => "danger"
      ]
    ) ?>
  </div>
</div>
