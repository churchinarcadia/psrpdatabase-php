<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Meal $meal
 * @var string[]|\Cake\Collection\CollectionInterface $trainings
 * @var string[]|\Cake\Collection\CollectionInterface $trainingsUsers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $meal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $meal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="meals form content">
            <?= $this->Form->create($meal) ?>
            <fieldset>
                <legend><?= __('Edit Meal') ?></legend>
                <?php
                    echo $this->Form->control('day');
                    echo $this->Form->control('meal');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                    echo $this->Form->control('trainings._ids', ['options' => $trainings]);
                    echo $this->Form->control('trainings_users._ids', ['options' => $trainingsUsers]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
