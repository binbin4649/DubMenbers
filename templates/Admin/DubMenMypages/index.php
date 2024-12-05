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
 * @var iterable<\Cake\Datasource\EntityInterface> $dubMenMypages
 */
$this->BcAdmin->setTitle(__d('baser_core', 'Dub Men Mypages 一覧'));
$this->BcAdmin->addAdminMainBodyHeaderLinks([
  'url' => ['action' => 'add'],
  'title' => __d('baser_core', '新規登録'),
]);
$this->BcListTable->setColumnNumber(25);
//$this->BcAdmin->setHelp('dubMenMypages_form');
//$this->BcAdmin->setSearch('dubMenMypages_index');
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
        <?= $this->Paginator->sort('name', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Name'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Name')
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
        <?= $this->Paginator->sort('role', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Role'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Role')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('position_name', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Position Name'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Position Name')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('username', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Username'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Username')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('auth_type', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Auth Type'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Auth Type')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('auth_code', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Auth Code'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Auth Code')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('is_notice', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Is Notice'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Is Notice')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('contact_type', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Contact Type'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Contact Type')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('email', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Email'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Email')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('sex', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Sex'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Sex')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('age', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Age'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Age')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('job', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Job'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Job')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('tel', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Tel'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Tel')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('zip', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Zip'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Zip')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('prefectures', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Prefectures'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Prefectures')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('address_1', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Address 1'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Address 1')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('address_2', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Address 2'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Address 2')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('magiclink', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Magiclink'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Magiclink')
          ], ['escape' => false, 'class' => 'btn-direction bca-table-listup__a']
        ) ?>
      </th>
      <th class="bca-table-listup__thead-th">
        <?= $this->Paginator->sort('is_magiclink', [
          'asc' => '<i class="bca-icon--asc"></i>' . __d('baser_core', 'Is Magiclink'),
          'desc' => '<i class="bca-icon--desc"></i>' . __d('baser_core', 'Is Magiclink')
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
<?php if (!$dubMenMypages->isEmpty()): ?>
  <?php foreach($dubMenMypages as $key => $dubMenMypage): ?>
      <tr id="Row<?= $key ?>">
        <td class="bca-table-listup__tbody-td"><?= $this->Number->format($dubMenMypage->id) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->name) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->status) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->type) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->role) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->position_name) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->username) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->auth_type) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->auth_code) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->is_notice) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->contact_type) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->email) ?></td>
        <td class="bca-table-listup__tbody-td"><?= $dubMenMypage->sex === null ? '' : $this->Number->format($dubMenMypage->sex) ?></td>
        <td class="bca-table-listup__tbody-td"><?= $dubMenMypage->age === null ? '' : $this->Number->format($dubMenMypage->age) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->job) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->tel) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->zip) ?></td>
        <td class="bca-table-listup__tbody-td"><?= $dubMenMypage->prefectures === null ? '' : $this->Number->format($dubMenMypage->prefectures) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->address_1) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->address_2) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->magiclink) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->is_magiclink) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->created) ?></td>
        <td class="bca-table-listup__tbody-td"><?= h($dubMenMypage->modified) ?></td>
        <td class="bca-table-listup__tbody-td bca-table-listup__tbody-td--actions" style="width:15%">
          <?php if (!empty($dubMenMypage->status)) : ?>
            <!--<?= $this->BcAdminForm->postLink('', ['action' => 'unpublish', $dubMenMypage->id], [
              'title' => __d('baser_core', '非公開'),
              'class' => 'btn-unpublish bca-btn-icon',
              'data-bca-btn-type' => 'unpublish',
              'data-bca-btn-size' => 'lg'
            ]) ?>-->
            <?= $this->BcHtml->link('', ['action' => 'view', $dubMenMypage->id], [
              'title' => __d('baser_core', '確認'),
              'class' => 'bca-btn-icon',
              'data-bca-btn-type' => 'preview',
              'data-bca-btn-size' => 'lg'
            ]) ?>
          <?php else: ?>
            <!--<?= $this->BcAdminForm->postLink('', ['action' => 'publish', $dubMenMypage->id], [
              'title' => __d('baser_core', '公開'),
              'class' => 'btn-publish bca-btn-icon',
              'data-bca-btn-type' => 'publish',
              'data-bca-btn-size' => 'lg'
            ]) ?>-->
          <?php endif ?>
          <?= $this->BcHtml->link('', ['action' => 'edit', $dubMenMypage->id], [
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