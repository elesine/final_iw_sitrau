<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shift'), ['action' => 'edit', $shift->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shift'), ['action' => 'delete', $shift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assignment'), ['controller' => 'Assignment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignment', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shifts view large-9 medium-8 columns content">
    <h3><?= h($shift->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($shift->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($shift->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($shift->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($shift->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $shift->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Assignment') ?></h4>
        <?php if (!empty($shift->assignment)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Academic Semester Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Section Id') ?></th>
                <th scope="col"><?= __('Shift Id') ?></th>
                <th scope="col"><?= __('Teacher Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shift->assignment as $assignment): ?>
            <tr>
                <td><?= h($assignment->id) ?></td>
                <td><?= h($assignment->academic_semester_id) ?></td>
                <td><?= h($assignment->course_id) ?></td>
                <td><?= h($assignment->section_id) ?></td>
                <td><?= h($assignment->shift_id) ?></td>
                <td><?= h($assignment->teacher_id) ?></td>
                <td><?= h($assignment->status) ?></td>
                <td><?= h($assignment->created) ?></td>
                <td><?= h($assignment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Assignment', 'action' => 'view', $assignment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Assignment', 'action' => 'edit', $assignment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assignment', 'action' => 'delete', $assignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
