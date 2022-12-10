<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingMeal $trainingMeal
 * @var string[]|\Cake\Collection\CollectionInterface $trainings
 * @var string[]|\Cake\Collection\CollectionInterface $meals
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trainingMeal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trainingMeal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Training Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingMeals form content">
            <?= $this->Form->create($trainingMeal) ?>
            <fieldset>
                <legend><?= __('Edit Training Meal') ?></legend>
                <?php
                    echo $this->Form->control('training_id', ['options' => $trainings]);
                    echo $this->Form->control('meal_id', ['options' => $meals]);
                    echo $this->Form->control('cost');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
