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
 * @var iterable<\Cake\Datasource\EntityInterface> $dubMenLogs
 */
$this->BcAdmin->setTitle(__d('baser_core', 'Dub Men Logs 一覧'));
$this->BcAdmin->addAdminMainBodyHeaderLinks([
  'url' => ['action' => 'add'],
  'title' => __d('baser_core', '新規登録'),
]);
$this->BcListTable->setColumnNumber(11);
//$this->BcAdmin->setHelp('dubMenLogs_form');
//$this->BcAdmin->setSearch('dubMenLogs_index');
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
        <?= $this->Paginator->sort('action', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Action'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Action')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('target', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Target'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Target')
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
<?php if (!$dubMenLogs->isEmpty()): ?>
  <?php foreach($dubMenLogs as $key => $dubMenLog): ?>
      <tr id="Row<?= $key ?>">
        <td class="bca-table-listup__tbody-td"><?= $this->Number->format($dubMenLog->id) ?></td>
        <td class="bca-table-listup__tbody-td"><?= $this->Number->format($dubMenLog->mypage_id) ?></td>
        <td class="bca-table-listup__tbody-td"><?= $dubMenLog->has('user') ? $this->Html->link($dubMenLog->user->name, ['controller' => 'Users', 'action' => 'view', $dubMenLog->user->id]) : '' ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenLog->status) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenLog->type) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenLog->action) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenLog->target) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenLog->created) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenLog->modified) ?></td>
        <td class="bca-table-listup__tbody-td bca-table-listup__tbody-td--actions" style="width:15%">
          <?php if (!empty($dubMenLog->status)) : ?>
            <!--<?= $this->BcAdminForm->postLink('', ['action' => 'unpublish', $dubMenLog->id], [
              'title' => __d('baser_core', '非公開'),
              'class' => 'btn-unpublish bca-btn-icon',
              'data-bca-btn-type' => 'unpublish',
              'data-bca-btn-size' => 'lg'
            ]) ?>-->
            <?= $this->BcHtml->link('', ['action' => 'view', $dubMenLog->id], [
              'title' => __d('baser_core', '確認'),
              'class' => 'bca-btn-icon',
              'data-bca-btn-type' => 'preview',
              'data-bca-btn-size' => 'lg'
            ]) ?>
          <?php else: ?>
            <!--<?= $this->BcAdminForm->postLink('', ['action' => 'publish', $dubMenLog->id], [
              'title' => __d('baser_core', '公開'),
              'class' => 'btn-publish bca-btn-icon',
              'data-bca-btn-type' => 'publish',
              'data-bca-btn-size' => 'lg'
            ]) ?>-->
          <?php endif ?>
          <?= $this->BcHtml->link('', ['action' => 'edit', $dubMenLog->id], [
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