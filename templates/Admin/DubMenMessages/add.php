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
 * @var \Cake\Datasource\EntityInterface $dubMenMessage
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
$this->BcAdmin->setTitle(__d('baser_core', 'DubMenMessage 新規登録'));
//$this->BcAdmin->setHelp('dubMenMessages_form');
?>


<?= $this->BcAdminForm->create($dubMenMessage, ['novalidate' => true]) ?>

<?= $this->BcFormTable->dispatchBefore() ?>

<table class="bca-form-table">
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('mypage_id', __d('baser_core', 'Mypage Id')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('mypage_id') ?>
      <?= $this->BcAdminForm->error('mypage_id') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('user_id', __d('baser_core', 'User Id')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('user_id', ['options' => $users, 'empty' => true]) ?>
      <?= $this->BcAdminForm->error('user_id') ?>
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
      <?= $this->BcAdminForm->label('contact_address', __d('baser_core', 'Contact Address')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('contact_address') ?>
      <?= $this->BcAdminForm->error('contact_address') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('title', __d('baser_core', 'Title')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('title') ?>
      <?= $this->BcAdminForm->error('title') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('body', __d('baser_core', 'Body')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('body') ?>
      <?= $this->BcAdminForm->error('body') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('submit_datetime', __d('baser_core', 'Submit Datetime')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('submit_datetime', ['empty' => true]) ?>
      <?= $this->BcAdminForm->error('submit_datetime') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('flash_datetime', __d('baser_core', 'Flash Datetime')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('flash_datetime', ['empty' => true]) ?>
      <?= $this->BcAdminForm->error('flash_datetime') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('read_datetime', __d('baser_core', 'Read Datetime')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('read_datetime', ['empty' => true]) ?>
      <?= $this->BcAdminForm->error('read_datetime') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('is_error', __d('baser_core', 'Is Error')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('is_error') ?>
      <?= $this->BcAdminForm->error('is_error') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('is_flash', __d('baser_core', 'Is Flash')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('is_flash') ?>
      <?= $this->BcAdminForm->error('is_flash') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('is_read', __d('baser_core', 'Is Read')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('is_read') ?>
      <?= $this->BcAdminForm->error('is_read') ?>
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
</div>

<?= $this->BcAdminForm->end() ?>