<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Meal[]|\Cake\Collection\CollectionInterface $meals
 */
?>
<div class="meals index content">
    <?= $this->Html->link(__('New Meal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Meals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('day') ?></th>
                    <th><?= $this->Paginator->sort('meal') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($meals as $meal): ?>
                <tr>
                    <td><?= $this->Number->format($meal->id) ?></td>
                    <td><?= h($meal->day) ?></td>
                    <td><?= h($meal->meal) ?></td>
                    <td><?= $this->Number->format($meal->creator) ?></td>
                    <td><?= h($meal->created) ?></td>
                    <td><?= $this->Number->format($meal->modifier) ?></td>
                    <td><?= h($meal->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $meal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $meal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $meal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meal->id)]) ?>
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
