<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Faculty'), ['action' => 'edit', $faculty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Faculty'), ['action' => 'delete', $faculty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Faculties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faculty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Universities'), ['controller' => 'Universities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New University'), ['controller' => 'Universities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Deans'), ['controller' => 'Deans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dean'), ['controller' => 'Deans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="faculties view large-9 medium-8 columns content">
    <h3><?= h($faculty->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($faculty->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('University') ?></th>
            <td><?= $faculty->has('university') ? $this->Html->link($faculty->university->name, ['controller' => 'Universities', 'action' => 'view', $faculty->university->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($faculty->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($faculty->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($faculty->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $faculty->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Deans') ?></h4>
        <?php if (!empty($faculty->deans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Degree Id') ?></th>
                <th scope="col"><?= __('Faculty Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($faculty->deans as $deans): ?>
            <tr>
                <td><?= h($deans->id) ?></td>
                <td><?= h($deans->user_id) ?></td>
                <td><?= h($deans->degree_id) ?></td>
                <td><?= h($deans->faculty_id) ?></td>
                <td><?= h($deans->status) ?></td>
                <td><?= h($deans->created) ?></td>
                <td><?= h($deans->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Deans', 'action' => 'view', $deans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Deans', 'action' => 'edit', $deans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Deans', 'action' => 'delete', $deans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Departments') ?></h4>
        <?php if (!empty($faculty->departments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Faculty Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($faculty->departments as $departments): ?>
            <tr>
                <td><?= h($departments->id) ?></td>
                <td><?= h($departments->name) ?></td>
                <td><?= h($departments->faculty_id) ?></td>
                <td><?= h($departments->status) ?></td>
                <td><?= h($departments->created) ?></td>
                <td><?= h($departments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
