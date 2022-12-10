<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Meal $meal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Meal'), ['action' => 'edit', $meal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Meal'), ['action' => 'delete', $meal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Meal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="meals view content">
            <h3><?= h($meal->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Day') ?></th>
                    <td><?= h($meal->day) ?></td>
                </tr>
                <tr>
                    <th><?= __('Meal') ?></th>
                    <td><?= h($meal->meal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($meal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($meal->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($meal->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($meal->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($meal->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Trainings') ?></h4>
                <?php if (!empty($meal->trainings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Month') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('End Date') ?></th>
                            <th><?= __('Breakfast Cost') ?></th>
                            <th><?= __('Lunch Cost') ?></th>
                            <th><?= __('Dinner Cost') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($meal->trainings as $trainings) : ?>
                        <tr>
                            <td><?= h($trainings->id) ?></td>
                            <td><?= h($trainings->year) ?></td>
                            <td><?= h($trainings->month) ?></td>
                            <td><?= h($trainings->start_date) ?></td>
                            <td><?= h($trainings->end_date) ?></td>
                            <td><?= h($trainings->breakfast_cost) ?></td>
                            <td><?= h($trainings->lunch_cost) ?></td>
                            <td><?= h($trainings->dinner_cost) ?></td>
                            <td><?= h($trainings->notes) ?></td>
                            <td><?= h($trainings->creator) ?></td>
                            <td><?= h($trainings->created) ?></td>
                            <td><?= h($trainings->modifier) ?></td>
                            <td><?= h($trainings->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Trainings', 'action' => 'view', $trainings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Trainings', 'action' => 'edit', $trainings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trainings', 'action' => 'delete', $trainings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Trainings Users') ?></h4>
                <?php if (!empty($meal->trainings_users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Training Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Registration Complete') ?></th>
                            <th><?= __('Process Step') ?></th>
                            <th><?= __('Serving One Id') ?></th>
                            <th><?= __('Cash Paid') ?></th>
                            <th><?= __('Check Paid') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($meal->trainings_users as $trainingsUsers) : ?>
                        <tr>
                            <td><?= h($trainingsUsers->id) ?></td>
                            <td><?= h($trainingsUsers->training_id) ?></td>
                            <td><?= h($trainingsUsers->user_id) ?></td>
                            <td><?= h($trainingsUsers->registration_complete) ?></td>
                            <td><?= h($trainingsUsers->process_step) ?></td>
                            <td><?= h($trainingsUsers->serving_one_id) ?></td>
                            <td><?= h($trainingsUsers->cash_paid) ?></td>
                            <td><?= h($trainingsUsers->check_paid) ?></td>
                            <td><?= h($trainingsUsers->notes) ?></td>
                            <td><?= h($trainingsUsers->creator) ?></td>
                            <td><?= h($trainingsUsers->created) ?></td>
                            <td><?= h($trainingsUsers->modifier) ?></td>
                            <td><?= h($trainingsUsers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrainingsUsers', 'action' => 'view', $trainingsUsers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrainingsUsers', 'action' => 'edit', $trainingsUsers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrainingsUsers', 'action' => 'delete', $trainingsUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingsUsers->id)]) ?>
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
