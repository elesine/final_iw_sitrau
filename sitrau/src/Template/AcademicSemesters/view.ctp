<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AcademicSemester $academicSemester
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Academic Semester'), ['action' => 'edit', $academicSemester->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Academic Semester'), ['action' => 'delete', $academicSemester->id], ['confirm' => __('Are you sure you want to delete # {0}?', $academicSemester->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Academic Semesters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic Semester'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assignment'), ['controller' => 'Assignment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignment', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="academicSemesters view large-9 medium-8 columns content">
    <h3><?= h($academicSemester->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($academicSemester->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $academicSemester->has('school') ? $this->Html->link($academicSemester->school->name, ['controller' => 'Schools', 'action' => 'view', $academicSemester->school->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($academicSemester->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($academicSemester->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($academicSemester->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $academicSemester->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Assignment') ?></h4>
        <?php if (!empty($academicSemester->assignment)): ?>
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
            <?php foreach ($academicSemester->assignment as $assignment): ?>
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
