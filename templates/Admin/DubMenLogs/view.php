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
 */
?>

<table class="bca-form-table">
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'User') ?></th>
    <td class="bca-form-table__input"><?= $dubMenLog->has('user') ? $this->Html->link($dubMenLog->user->name, ['controller' => 'Users', 'action' => 'view', $dubMenLog->user->id]) : '' ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Status') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenLog->status) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Type') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenLog->type) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Action') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenLog->action) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Target') ?></th>
    <td class="bca-form-table__input"><?= h($dubMenLog->target) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Id') ?></th>
    <td class="bca-form-table__input"><?= $this->Number->format($dubMenLog->id) ?></td>
  </tr>
  <tr>
    <th class="bca-form-table__label"><?= __d('baser_core', 'Mypage Id') ?></th>
    <td class="bca-form-table__input"><?= $this->Number->format($dubMenLog->mypage_id) ?></td>
  </tr>
  <tr>
      <th class="bca-form-table__label"><?= __d('baser_core', 'Created') ?></th>
      <td class="bca-form-table__input"><?= h($dubMenLog->created) ?></td>
  </tr>
  <tr>
      <th class="bca-form-table__label"><?= __d('baser_core', 'Modified') ?></th>
      <td class="bca-form-table__input"><?= h($dubMenLog->modified) ?></td>
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
    <?= $this->BcHtml->link(__d('baser_core', '編集'), ['action' => 'edit', $dubMenLog->id], [
      'class' => 'bca-btn bca-actions__item',
      'data-bca-btn-type' => 'save',
      'data-bca-btn-size' => 'lg',
      'data-bca-btn-width' => 'lg',
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
