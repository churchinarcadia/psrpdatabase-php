<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('chinese_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('locality') ?></th>
                    <th><?= $this->Paginator->sort('cell_phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('line') ?></th>
                    <th><?= $this->Paginator->sort('wechat') ?></th>
                    <th><?= $this->Paginator->sort('language') ?></th>
                    <th><?= $this->Paginator->sort('country_code') ?></th>
                    <th><?= $this->Paginator->sort('last_login') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->chinese_name) ?></td>
                    <td><?= h($user->gender) ?></td>
                    <td><?= h($user->locality) ?></td>
                    <td><?= h($user->cell_phone) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->line) ?></td>
                    <td><?= h($user->wechat) ?></td>
                    <td><?= h($user->language) ?></td>
                    <td><?= $this->Number->format($user->country_code) ?></td>
                    <td><?= h($user->last_login) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= $this->Number->format($user->modifier) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
