<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training[]|\Cake\Collection\CollectionInterface $trainings
 */
?>
<div class="trainings index content">
    <?= $this->Html->link(__('New Training'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Trainings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('month') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('breakfast_cost') ?></th>
                    <th><?= $this->Paginator->sort('lunch_cost') ?></th>
                    <th><?= $this->Paginator->sort('dinner_cost') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainings as $training): ?>
                <tr>
                    <td><?= $this->Number->format($training->id) ?></td>
                    <td><?= h($training->year) ?></td>
                    <td><?= h($training->month) ?></td>
                    <td><?= h($training->start_date) ?></td>
                    <td><?= h($training->end_date) ?></td>
                    <td><?= $this->Number->format($training->breakfast_cost) ?></td>
                    <td><?= $this->Number->format($training->lunch_cost) ?></td>
                    <td><?= $this->Number->format($training->dinner_cost) ?></td>
                    <td><?= $this->Number->format($training->creator) ?></td>
                    <td><?= h($training->created) ?></td>
                    <td><?= $this->Number->format($training->modifier) ?></td>
                    <td><?= h($training->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $training->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $training->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id)]) ?>
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
