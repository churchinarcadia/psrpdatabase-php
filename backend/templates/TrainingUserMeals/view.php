<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingUserMeal $trainingUserMeal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Training User Meal'), ['action' => 'edit', $trainingUserMeal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Training User Meal'), ['action' => 'delete', $trainingUserMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingUserMeal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Training User Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Training User Meal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingUserMeals view content">
            <h3><?= h($trainingUserMeal->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Training User') ?></th>
                    <td><?= $trainingUserMeal->has('training_user') ? $this->Html->link($trainingUserMeal->training_user->id, ['controller' => 'TrainingUsers', 'action' => 'view', $trainingUserMeal->training_user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Meal') ?></th>
                    <td><?= $trainingUserMeal->has('meal') ? $this->Html->link($trainingUserMeal->meal->id, ['controller' => 'Meals', 'action' => 'view', $trainingUserMeal->meal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($trainingUserMeal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($trainingUserMeal->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($trainingUserMeal->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($trainingUserMeal->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($trainingUserMeal->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
