<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingMeal $trainingMeal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Training Meal'), ['action' => 'edit', $trainingMeal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Training Meal'), ['action' => 'delete', $trainingMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingMeal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Training Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Training Meal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingMeals view content">
            <h3><?= h($trainingMeal->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Training') ?></th>
                    <td><?= $trainingMeal->has('training') ? $this->Html->link($trainingMeal->training->id, ['controller' => 'Trainings', 'action' => 'view', $trainingMeal->training->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Meal') ?></th>
                    <td><?= $trainingMeal->has('meal') ? $this->Html->link($trainingMeal->meal->id, ['controller' => 'Meals', 'action' => 'view', $trainingMeal->meal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($trainingMeal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($trainingMeal->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($trainingMeal->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($trainingMeal->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($trainingMeal->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($trainingMeal->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
