<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assignment $assignment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assignment'), ['action' => 'edit', $assignment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assignment'), ['action' => 'delete', $assignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assignment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assignment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Academic Semesters'), ['controller' => 'AcademicSemesters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic Semester'), ['controller' => 'AcademicSemesters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sections'), ['controller' => 'Sections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assignment view large-9 medium-8 columns content">
    <h3><?= h($assignment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Academic Semester') ?></th>
            <td><?= $assignment->has('academic_semester') ? $this->Html->link($assignment->academic_semester->name, ['controller' => 'AcademicSemesters', 'action' => 'view', $assignment->academic_semester->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $assignment->has('course') ? $this->Html->link($assignment->course->name, ['controller' => 'Courses', 'action' => 'view', $assignment->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Section') ?></th>
            <td><?= $assignment->has('section') ? $this->Html->link($assignment->section->name, ['controller' => 'Sections', 'action' => 'view', $assignment->section->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shift') ?></th>
            <td><?= $assignment->has('shift') ? $this->Html->link($assignment->shift->name, ['controller' => 'Shifts', 'action' => 'view', $assignment->shift->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teacher') ?></th>
            <td><?= $assignment->has('teacher') ? $this->Html->link($assignment->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $assignment->teacher->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assignment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($assignment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($assignment->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $assignment->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
