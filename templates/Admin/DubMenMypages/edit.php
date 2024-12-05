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
$this->BcAdmin->setTitle(__d('baser_core', 'DubMenMypage 編集'));
$this->BcAdmin->addAdminMainBodyHeaderLinks([
  'url' => ['action' => 'add'],
  'title' => __d('baser_core', '新規登録'),
]);
//$this->BcAdmin->setHelp('dubMenMypages_form');
?>


<?= $this->BcAdminForm->create($dubMenMypage, ['novalidate' => true]) ?>

<?= $this->BcFormTable->dispatchBefore() ?>

<table class="bca-form-table">
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('name', __d('baser_core', 'Name')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('name') ?>
      <?= $this->BcAdminForm->error('name') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('status', __d('baser_core', 'Status')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('status') ?>
      <?= $this->BcAdminForm->error('status') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('type', __d('baser_core', 'Type')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('type') ?>
      <?= $this->BcAdminForm->error('type') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('role', __d('baser_core', 'Role')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('role') ?>
      <?= $this->BcAdminForm->error('role') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('position_name', __d('baser_core', 'Position Name')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('position_name') ?>
      <?= $this->BcAdminForm->error('position_name') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('username', __d('baser_core', 'Username')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('username') ?>
      <?= $this->BcAdminForm->error('username') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('auth_type', __d('baser_core', 'Auth Type')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('auth_type') ?>
      <?= $this->BcAdminForm->error('auth_type') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('auth_code', __d('baser_core', 'Auth Code')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('auth_code') ?>
      <?= $this->BcAdminForm->error('auth_code') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('password', __d('baser_core', 'Password')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('password') ?>
      <?= $this->BcAdminForm->error('password') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('is_notice', __d('baser_core', 'Is Notice')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('is_notice') ?>
      <?= $this->BcAdminForm->error('is_notice') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('contact_type', __d('baser_core', 'Contact Type')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('contact_type') ?>
      <?= $this->BcAdminForm->error('contact_type') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('email', __d('baser_core', 'Email')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('email') ?>
      <?= $this->BcAdminForm->error('email') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('sex', __d('baser_core', 'Sex')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('sex') ?>
      <?= $this->BcAdminForm->error('sex') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('age', __d('baser_core', 'Age')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('age') ?>
      <?= $this->BcAdminForm->error('age') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('job', __d('baser_core', 'Job')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('job') ?>
      <?= $this->BcAdminForm->error('job') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('tel', __d('baser_core', 'Tel')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('tel') ?>
      <?= $this->BcAdminForm->error('tel') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('zip', __d('baser_core', 'Zip')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('zip') ?>
      <?= $this->BcAdminForm->error('zip') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('prefectures', __d('baser_core', 'Prefectures')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('prefectures') ?>
      <?= $this->BcAdminForm->error('prefectures') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('address_1', __d('baser_core', 'Address 1')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('address_1') ?>
      <?= $this->BcAdminForm->error('address_1') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('address_2', __d('baser_core', 'Address 2')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('address_2') ?>
      <?= $this->BcAdminForm->error('address_2') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('magiclink', __d('baser_core', 'Magiclink')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('magiclink') ?>
      <?= $this->BcAdminForm->error('magiclink') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('is_magiclink', __d('baser_core', 'Is Magiclink')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('is_magiclink') ?>
      <?= $this->BcAdminForm->error('is_magiclink') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('memo', __d('baser_core', 'Memo')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('memo') ?>
      <?= $this->BcAdminForm->error('memo') ?>
    </td>
  </tr>
  <?= $this->BcAdminForm->dispatchAfterForm() ?>
</table>

<?= $this->BcFormTable->dispatchAfter() ?>

<div class="submit bca-actions">
  <div class="bca-actions__before">
    <?= $this->BcHtml->link(__d('baser_core', '一覧に戻る'), ['action' => 'index'], [
      'class' => 'bca-btn bca-actions__item',
      'data-bca-btn-type' => 'back-to-list'
    ]) ?>
  </div>
  <div class="bca-actions__main">
    <?= $this->BcAdminForm->submit(__d('baser_core', '保存'), [
      'div' => false,
      'class' => 'bca-btn bca-actions__item bca-loading',
      'data-bca-btn-type' => 'save',
      'data-bca-btn-size' => 'lg',
      'data-bca-btn-width' => 'lg',
      'id' => 'BtnSave'
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

<?= $this->BcAdminForm->end() ?>

<?= $this->fetch('postLink') ?>