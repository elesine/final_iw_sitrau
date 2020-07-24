<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $course->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Course Types'), ['controller' => 'CourseTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course Type'), ['controller' => 'CourseTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assignment'), ['controller' => 'Assignment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?= $this->Form->create($course) ?>
    <fieldset>
        <legend><?= __('Edit Course') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('credits');
            echo $this->Form->control('hours_per_week');
            echo $this->Form->control('course_type_id', ['options' => $courseTypes, 'empty' => true]);
            echo $this->Form->control('semester_id', ['options' => $semesters, 'empty' => true]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
