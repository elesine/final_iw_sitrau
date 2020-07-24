<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curricula $curricula
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curricula'), ['action' => 'edit', $curricula->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curricula'), ['action' => 'delete', $curricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curricula->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Curriculas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curricula'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="curriculas view large-9 medium-8 columns content">
    <h3><?= h($curricula->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($curricula->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $curricula->has('school') ? $this->Html->link($curricula->school->name, ['controller' => 'Schools', 'action' => 'view', $curricula->school->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($curricula->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($curricula->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($curricula->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $curricula->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Semesters') ?></h4>
        <?php if (!empty($curricula->semesters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Curricula Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curricula->semesters as $semesters): ?>
            <tr>
                <td><?= h($semesters->id) ?></td>
                <td><?= h($semesters->name) ?></td>
                <td><?= h($semesters->curricula_id) ?></td>
                <td><?= h($semesters->status) ?></td>
                <td><?= h($semesters->created) ?></td>
                <td><?= h($semesters->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Semesters', 'action' => 'view', $semesters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Semesters', 'action' => 'edit', $semesters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Semesters', 'action' => 'delete', $semesters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semesters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
