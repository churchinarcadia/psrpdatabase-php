<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountType $accountType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Account Type'), ['action' => 'edit', $accountType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Account Type'), ['action' => 'delete', $accountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Account Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Account Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountTypes view content">
            <h3><?= h($accountType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($accountType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($accountType->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accountType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $this->Number->format($accountType->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifier') ?></th>
                    <td><?= $this->Number->format($accountType->modifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($accountType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($accountType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($accountType->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($accountType->users)) : ?>
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
                        <?php foreach ($accountType->users as $users) : ?>
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
