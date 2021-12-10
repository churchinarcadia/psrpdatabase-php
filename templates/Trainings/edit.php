<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training $training
 * @var string[]|\Cake\Collection\CollectionInterface $meals
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $training->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $training->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Trainings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainings form content">
            <?= $this->Form->create($training) ?>
            <fieldset>
                <legend><?= __('Edit Training') ?></legend>
                <?php
                    echo $this->Form->control('year');
                    echo $this->Form->control('month');
                    echo $this->Form->control('start_date', ['empty' => true]);
                    echo $this->Form->control('end_date', ['empty' => true]);
                    echo $this->Form->control('breakfast_cost');
                    echo $this->Form->control('lunch_cost');
                    echo $this->Form->control('dinner_cost');
                    echo $this->Form->control('notes');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                    echo $this->Form->control('meals._ids', ['options' => $meals]);
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
