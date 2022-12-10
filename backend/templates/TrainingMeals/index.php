<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingMeal[]|\Cake\Collection\CollectionInterface $trainingMeals
 */
?>
<div class="trainingMeals index content">
    <?= $this->Html->link(__('New Training Meal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Training Meals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('training_id') ?></th>
                    <th><?= $this->Paginator->sort('meal_id') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainingMeals as $trainingMeal): ?>
                <tr>
                    <td><?= $this->Number->format($trainingMeal->id) ?></td>
                    <td><?= $trainingMeal->has('training') ? $this->Html->link($trainingMeal->training->id, ['controller' => 'Trainings', 'action' => 'view', $trainingMeal->training->id]) : '' ?></td>
                    <td><?= $trainingMeal->has('meal') ? $this->Html->link($trainingMeal->meal->id, ['controller' => 'Meals', 'action' => 'view', $trainingMeal->meal->id]) : '' ?></td>
                    <td><?= $this->Number->format($trainingMeal->cost) ?></td>
                    <td><?= $this->Number->format($trainingMeal->creator) ?></td>
                    <td><?= h($trainingMeal->created) ?></td>
                    <td><?= $this->Number->format($trainingMeal->modifier) ?></td>
                    <td><?= h($trainingMeal->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trainingMeal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainingMeal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainingMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingMeal->id)]) ?>
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
