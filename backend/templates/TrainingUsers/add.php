<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingUser $trainingUser
 * @var \Cake\Collection\CollectionInterface|string[] $trainings
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Training Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingUsers form content">
            <?= $this->Form->create($trainingUser) ?>
            <fieldset>
                <legend><?= __('Add Training User') ?></legend>
                <?php
                    echo $this->Form->control('training_id', ['options' => $trainings]);
                    echo $this->Form->control('user_id');
                    echo $this->Form->control('registration_complete');
                    echo $this->Form->control('process_step');
                    echo $this->Form->control('serving_one_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('cash_paid');
                    echo $this->Form->control('check_paid');
                    echo $this->Form->control('notes');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
