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
 * @var \Cake\Datasource\EntityInterface $dubMenLog
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
$this->BcAdmin->setTitle(__d('baser_core', 'DubMenLog 編集'));
$this->BcAdmin->addAdminMainBodyHeaderLinks([
  'url' => ['action' => 'add'],
  'title' => __d('baser_core', '新規登録'),
]);
//$this->BcAdmin->setHelp('dubMenLogs_form');
?>


<?= $this->BcAdminForm->create($dubMenLog, ['novalidate' => true]) ?>

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
      <?= $this->BcAdminForm->control('user_id', ['options' => $users]) ?>
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
      <?= $this->BcAdminForm->label('action', __d('baser_core', 'Action')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('action') ?>
      <?= $this->BcAdminForm->error('action') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('target', __d('baser_core', 'Target')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('target') ?>
      <?= $this->BcAdminForm->error('target') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('original', __d('baser_core', 'Original')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('original') ?>
      <?= $this->BcAdminForm->error('original') ?>
    </td>
  </tr>
  <tr>
    <th class="bca-form-table__label">
      <?= $this->BcAdminForm->label('after', __d('baser_core', 'After')) ?>
    </th>
    <td class="bca-form-table__input">
      <?= $this->BcAdminForm->control('after') ?>
      <?= $this->BcAdminForm->error('after') ?>
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
    <?= $this->BcAdminForm->postLink( __d('baser_core', '削除'), ['action' => 'delete', $dubMenLog->id], [
      'block' => true,
      'confirm' => __d('baser_core', '{0} を本当に削除してもいいですか？', $dubMenLog->name),
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