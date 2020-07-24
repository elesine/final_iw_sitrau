<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Course Types'), ['controller' => 'CourseTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course Type'), ['controller' => 'CourseTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assignment'), ['controller' => 'Assignment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignment', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($course->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course Type') ?></th>
            <td><?= $course->has('course_type') ? $this->Html->link($course->course_type->name, ['controller' => 'CourseTypes', 'action' => 'view', $course->course_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semester') ?></th>
            <td><?= $course->has('semester') ? $this->Html->link($course->semester->name, ['controller' => 'Semesters', 'action' => 'view', $course->semester->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credits') ?></th>
            <td><?= $this->Number->format($course->credits) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hours Per Week') ?></th>
            <td><?= $this->Number->format($course->hours_per_week) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($course->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($course->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $course->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Assignment') ?></h4>
        <?php if (!empty($course->assignment)): ?>
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
            <?php foreach ($course->assignment as $assignment): ?>
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
