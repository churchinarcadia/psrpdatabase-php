<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingUserMeal[]|\Cake\Collection\CollectionInterface $trainingUserMeals
 */
?>
<div class="trainingUserMeals index content">
    <?= $this->Html->link(__('New Training User Meal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Training User Meals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('training_user_id') ?></th>
                    <th><?= $this->Paginator->sort('meal_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainingUserMeals as $trainingUserMeal): ?>
                <tr>
                    <td><?= $this->Number->format($trainingUserMeal->id) ?></td>
                    <td><?= $trainingUserMeal->has('training_user') ? $this->Html->link($trainingUserMeal->training_user->id, ['controller' => 'TrainingUsers', 'action' => 'view', $trainingUserMeal->training_user->id]) : '' ?></td>
                    <td><?= $trainingUserMeal->has('meal') ? $this->Html->link($trainingUserMeal->meal->id, ['controller' => 'Meals', 'action' => 'view', $trainingUserMeal->meal->id]) : '' ?></td>
                    <td><?= $this->Number->format($trainingUserMeal->creator) ?></td>
                    <td><?= h($trainingUserMeal->created) ?></td>
                    <td><?= $this->Number->format($trainingUserMeal->modifier) ?></td>
                    <td><?= h($trainingUserMeal->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trainingUserMeal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainingUserMeal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainingUserMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingUserMeal->id)]) ?>
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
