<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingUser[]|\Cake\Collection\CollectionInterface $trainingUsers
 */
?>
<div class="trainingUsers index content">
    <?= $this->Html->link(__('New Training User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Training Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('training_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('registration_complete') ?></th>
                    <th><?= $this->Paginator->sort('process_step') ?></th>
                    <th><?= $this->Paginator->sort('serving_one_id') ?></th>
                    <th><?= $this->Paginator->sort('cash_paid') ?></th>
                    <th><?= $this->Paginator->sort('check_paid') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainingUsers as $trainingUser): ?>
                <tr>
                    <td><?= $this->Number->format($trainingUser->id) ?></td>
                    <td><?= $trainingUser->has('training') ? $this->Html->link($trainingUser->training->id, ['controller' => 'Trainings', 'action' => 'view', $trainingUser->training->id]) : '' ?></td>
                    <td><?= $this->Number->format($trainingUser->user_id) ?></td>
                    <td><?= h($trainingUser->registration_complete) ?></td>
                    <td><?= $this->Number->format($trainingUser->process_step) ?></td>
                    <td><?= $trainingUser->has('user') ? $this->Html->link($trainingUser->user->id, ['controller' => 'Users', 'action' => 'view', $trainingUser->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($trainingUser->cash_paid) ?></td>
                    <td><?= $this->Number->format($trainingUser->check_paid) ?></td>
                    <td><?= $this->Number->format($trainingUser->creator) ?></td>
                    <td><?= h($trainingUser->created) ?></td>
                    <td><?= $this->Number->format($trainingUser->modifier) ?></td>
                    <td><?= h($trainingUser->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trainingUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainingUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainingUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingUser->id)]) ?>
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
