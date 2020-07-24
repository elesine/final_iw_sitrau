<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assignment[]|\Cake\Collection\CollectionInterface $assignment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Assignment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Academic Semesters'), ['controller' => 'AcademicSemesters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Academic Semester'), ['controller' => 'AcademicSemesters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sections'), ['controller' => 'Sections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assignment index large-9 medium-8 columns content">
    <h3><?= __('Assignment') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('academic_semester_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('section_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shift_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assignment as $assignment): ?>
            <tr>
                <td><?= $this->Number->format($assignment->id) ?></td>
                <td><?= $assignment->has('academic_semester') ? $this->Html->link($assignment->academic_semester->name, ['controller' => 'AcademicSemesters', 'action' => 'view', $assignment->academic_semester->id]) : '' ?></td>
                <td><?= $assignment->has('course') ? $this->Html->link($assignment->course->name, ['controller' => 'Courses', 'action' => 'view', $assignment->course->id]) : '' ?></td>
                <td><?= $assignment->has('section') ? $this->Html->link($assignment->section->name, ['controller' => 'Sections', 'action' => 'view', $assignment->section->id]) : '' ?></td>
                <td><?= $assignment->has('shift') ? $this->Html->link($assignment->shift->name, ['controller' => 'Shifts', 'action' => 'view', $assignment->shift->id]) : '' ?></td>
                <td><?= $assignment->has('teacher') ? $this->Html->link($assignment->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $assignment->teacher->id]) : '' ?></td>
                <td><?= h($assignment->status) ?></td>
                <td><?= h($assignment->created) ?></td>
                <td><?= h($assignment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assignment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assignment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
