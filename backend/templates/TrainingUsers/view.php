<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingUser $trainingUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Training User'), ['action' => 'edit', $trainingUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Training User'), ['action' => 'delete', $trainingUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Training Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Training User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingUsers view content">
            <h3><?= h($trainingUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Training') ?></th>
                    <td><?= $trainingUser->has('training') ? $this->Html->link($trainingUser->training->id, ['controller' => 'Trainings', 'action' => 'view', $trainingUser->training->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $trainingUser->has('user') ? $this->Html->link($trainingUser->user->id, ['controller' => 'Users', 'action' => 'view', $trainingUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($trainingUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($trainingUser->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Process Step') ?></th>
                    <td><?= $this->Number->format($trainingUser->process_step) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cash Paid') ?></th>
                    <td><?= $this->Number->format($trainingUser->cash_paid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Check Paid') ?></th>
                    <td><?= $this->Number->format($trainingUser->check_paid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($trainingUser->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($trainingUser->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($trainingUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($trainingUser->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Complete') ?></th>
                    <td><?= $trainingUser->registration_complete ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($trainingUser->notes)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Training User Meals') ?></h4>
                <?php if (!empty($trainingUser->training_user_meals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Training User Id') ?></th>
                            <th><?= __('Meal Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($trainingUser->training_user_meals as $trainingUserMeals) : ?>
                        <tr>
                            <td><?= h($trainingUserMeals->id) ?></td>
                            <td><?= h($trainingUserMeals->training_user_id) ?></td>
                            <td><?= h($trainingUserMeals->meal_id) ?></td>
                            <td><?= h($trainingUserMeals->creator) ?></td>
                            <td><?= h($trainingUserMeals->created) ?></td>
                            <td><?= h($trainingUserMeals->modifier) ?></td>
                            <td><?= h($trainingUserMeals->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrainingUserMeals', 'action' => 'view', $trainingUserMeals->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrainingUserMeals', 'action' => 'edit', $trainingUserMeals->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrainingUserMeals', 'action' => 'delete', $trainingUserMeals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingUserMeals->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
