<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training $training
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Training'), ['action' => 'edit', $training->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Training'), ['action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Trainings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Training'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainings view content">
            <h3><?= h($training->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($training->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Month') ?></th>
                    <td><?= h($training->month) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($training->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Breakfast Cost') ?></th>
                    <td><?= $this->Number->format($training->breakfast_cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lunch Cost') ?></th>
                    <td><?= $this->Number->format($training->lunch_cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dinner Cost') ?></th>
                    <td><?= $this->Number->format($training->dinner_cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($training->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($training->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($training->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($training->end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($training->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($training->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($training->notes)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Meals') ?></h4>
                <?php if (!empty($training->meals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Day') ?></th>
                            <th><?= __('Meal') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($training->meals as $meals) : ?>
                        <tr>
                            <td><?= h($meals->id) ?></td>
                            <td><?= h($meals->day) ?></td>
                            <td><?= h($meals->meal) ?></td>
                            <td><?= h($meals->creator) ?></td>
                            <td><?= h($meals->created) ?></td>
                            <td><?= h($meals->modifier) ?></td>
                            <td><?= h($meals->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Meals', 'action' => 'view', $meals->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Meals', 'action' => 'edit', $meals->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Meals', 'action' => 'delete', $meals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meals->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($training->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Chinese Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Locality') ?></th>
                            <th><?= __('Cell Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Line') ?></th>
                            <th><?= __('Wechat') ?></th>
                            <th><?= __('Language') ?></th>
                            <th><?= __('Country Code') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Last Login') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($training->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->first_name) ?></td>
                            <td><?= h($users->last_name) ?></td>
                            <td><?= h($users->chinese_name) ?></td>
                            <td><?= h($users->gender) ?></td>
                            <td><?= h($users->locality) ?></td>
                            <td><?= h($users->cell_phone) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->line) ?></td>
                            <td><?= h($users->wechat) ?></td>
                            <td><?= h($users->language) ?></td>
                            <td><?= h($users->country_code) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->last_login) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modifier) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
