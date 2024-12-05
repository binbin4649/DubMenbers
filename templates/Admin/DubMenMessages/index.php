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
 * @var iterable<\Cake\Datasource\EntityInterface> $dubMenMessages
 */
$this->BcAdmin->setTitle(__d('baser_core', 'Dub Men Messages 一覧'));
$this->BcAdmin->addAdminMainBodyHeaderLinks([
  'url' => ['action' => 'add'],
  'title' => __d('baser_core', '新規登録'),
]);
$this->BcListTable->setColumnNumber(16);
//$this->BcAdmin->setHelp('dubMenMessages_form');
//$this->BcAdmin->setSearch('dubMenMessages_index');
?>


<div class="bca-data-list">
  <div class="bca-data-list__top">
    <div class="bca-data-list__sub">
      <?php $this->BcBaser->element('pagination') ?>
    </div>
  </div>

  <table class="bca-table-listup">
    <thead class="bca-table-listup__thead">
    <tr>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('id', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Id'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Id')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('mypage_id', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Mypage Id'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Mypage Id')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('user_id', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'User Id'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'User Id')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('status', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Status'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Status')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('type', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Type'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Type')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('contact_address', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Contact Address'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Contact Address')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('title', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Title'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Title')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('submit_datetime', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Submit Datetime'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Submit Datetime')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('flash_datetime', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Flash Datetime'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Flash Datetime')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('read_datetime', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Read Datetime'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Read Datetime')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('is_error', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Is Error'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Is Error')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('is_flash', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Is Flash'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Is Flash')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('is_read', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Is Read'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Is Read')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('created', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Created'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Created')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('modified', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Modified'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Modified')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th"><?= __d('baser_core', 'アクション') ?></th>
    </tr>
    </thead>
    <tbody class="bca-table-listup__tbody">
<?php if (!$dubMenMessages->isEmpty()): ?>
  <?php foreach($dubMenMessages as $key => $dubMenMessage): ?>
      <tr id="Row<?= $key ?>">
        <td class="bca-table-listup__tbody-td"><?= $this->Number->format($dubMenMessage->id) ?></td>
        <td class="bca-table-listup__tbody-td"><?= $this->Number->format($dubMenMessage->mypage_id) ?></td>
        <td class="bca-table-listup__tbody-td"><?= $dubMenMessage->has('user') ? $this->Html->link($dubMenMessage->user->name, ['controller' => 'Users', 'action' => 'view', $dubMenMessage->user->id]) : '' ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->status) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->type) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->contact_address) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->title) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->submit_datetime) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->flash_datetime) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->read_datetime) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->is_error) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->is_flash) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->is_read) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->created) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMessage->modified) ?></td>
        <td class="bca-table-listup__tbody-td bca-table-listup__tbody-td--actions" style="width:15%">
          <?php if (!empty($dubMenMessage->status)) : ?>
            <!--<?= $this->BcAdminForm->postLink('', ['action' => 'unpublish', $dubMenMessage->id], [
              'title' => __d('baser_core', '非公開'),
              'class' => 'btn-unpublish bca-btn-icon',
              'data-bca-btn-type' => 'unpublish',
              'data-bca-btn-size' => 'lg'
            ]) ?>-->
            <?= $this->BcHtml->link('', ['action' => 'view', $dubMenMessage->id], [
              'title' => __d('baser_core', '確認'),
              'class' => 'bca-btn-icon',
              'data-bca-btn-type' => 'preview',
              'data-bca-btn-size' => 'lg'
            ]) ?>
          <?php else: ?>
            <!--<?= $this->BcAdminForm->postLink('', ['action' => 'publish', $dubMenMessage->id], [
              'title' => __d('baser_core', '公開'),
              'class' => 'btn-publish bca-btn-icon',
              'data-bca-btn-type' => 'publish',
              'data-bca-btn-size' => 'lg'
            ]) ?>-->
          <?php endif ?>
          <?= $this->BcHtml->link('', ['action' => 'edit', $dubMenMessage->id], [
              'title' => __d('baser_core', '編集'),
              'class' => ' bca-btn-icon',
              'data-bca-btn-type' => 'edit',
              'data-bca-btn-size' => 'lg'
          ]) ?>
        </td>
      </tr>
  <?php endforeach; ?>
<?php else: ?>
      <tr>
        <td colspan="<?= $this->BcListTable->getColumnNumber() ?>" class="bca-table-listup__tbody-td">
          <p class="no-data"><?= __d('baser_core', 'データがありません。') ?></p>
        </td>
      </tr>
<?php endif ?>
    </tbody>
  </table>
</div>