<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chinese Name') ?></th>
                    <td><?= h($user->chinese_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($user->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Locality') ?></th>
                    <td><?= h($user->locality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cell Phone') ?></th>
                    <td><?= h($user->cell_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Line') ?></th>
                    <td><?= h($user->line) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wechat') ?></th>
                    <td><?= h($user->wechat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= h($user->language) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country Code') ?></th>
                    <td><?= $this->Number->format($user->country_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($user->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($user->last_login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Training Users') ?></h4>
                <?php if (!empty($user->training_users)) : ?>
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
                        <?php foreach ($user->training_users as $trainingUsers) : ?>
                        <tr>
                            <td><?= h($trainingUsers->id) ?></td>
                            <td><?= h($trainingUsers->training_id) ?></td>
                            <td><?= h($trainingUsers->user_id) ?></td>
                            <td><?= h($trainingUsers->registration_complete) ?></td>
                            <td><?= h($trainingUsers->process_step) ?></td>
                            <td><?= h($trainingUsers->serving_one_id) ?></td>
                            <td><?= h($trainingUsers->cash_paid) ?></td>
                            <td><?= h($trainingUsers->check_paid) ?></td>
                            <td><?= h($trainingUsers->notes) ?></td>
                            <td><?= h($trainingUsers->creator) ?></td>
                            <td><?= h($trainingUsers->created) ?></td>
                            <td><?= h($trainingUsers->modifier) ?></td>
                            <td><?= h($trainingUsers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrainingUsers', 'action' => 'view', $trainingUsers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrainingUsers', 'action' => 'edit', $trainingUsers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrainingUsers', 'action' => 'delete', $trainingUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingUsers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Account Types') ?></h4>
                <?php if (!empty($user->user_account_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Account Type Id') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifier') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_account_types as $userAccountTypes) : ?>
                        <tr>
                            <td><?= h($userAccountTypes->id) ?></td>
                            <td><?= h($userAccountTypes->user_id) ?></td>
                            <td><?= h($userAccountTypes->account_type_id) ?></td>
                            <td><?= h($userAccountTypes->creator) ?></td>
                            <td><?= h($userAccountTypes->created) ?></td>
                            <td><?= h($userAccountTypes->modifier) ?></td>
                            <td><?= h($userAccountTypes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserAccountTypes', 'action' => 'view', $userAccountTypes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserAccountTypes', 'action' => 'edit', $userAccountTypes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAccountTypes', 'action' => 'delete', $userAccountTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAccountTypes->id)]) ?>
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
