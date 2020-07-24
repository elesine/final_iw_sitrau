<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\University $university
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit University'), ['action' => 'edit', $university->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete University'), ['action' => 'delete', $university->id], ['confirm' => __('Are you sure you want to delete # {0}?', $university->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Universities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New University'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="universities view large-9 medium-8 columns content">
    <h3><?= h($university->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($university->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($university->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($university->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($university->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($university->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $university->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Faculties') ?></h4>
        <?php if (!empty($university->faculties)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('University Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($university->faculties as $faculties): ?>
            <tr>
                <td><?= h($faculties->id) ?></td>
                <td><?= h($faculties->name) ?></td>
                <td><?= h($faculties->university_id) ?></td>
                <td><?= h($faculties->status) ?></td>
                <td><?= h($faculties->created) ?></td>
                <td><?= h($faculties->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Faculties', 'action' => 'view', $faculties->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Faculties', 'action' => 'edit', $faculties->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Faculties', 'action' => 'delete', $faculties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculties->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($university->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Names') ?></th>
                <th scope="col"><?= __('F Surname') ?></th>
                <th scope="col"><?= __('M Surname') ?></th>
                <th scope="col"><?= __('Dni') ?></th>
                <th scope="col"><?= __('Birth Date') ?></th>
                <th scope="col"><?= __('Personal Mail') ?></th>
                <th scope="col"><?= __('Institutional Mail') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('University Id') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($university->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->names) ?></td>
                <td><?= h($users->f_surname) ?></td>
                <td><?= h($users->m_surname) ?></td>
                <td><?= h($users->dni) ?></td>
                <td><?= h($users->birth_date) ?></td>
                <td><?= h($users->personal_mail) ?></td>
                <td><?= h($users->institutional_mail) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->university_id) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->status) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
