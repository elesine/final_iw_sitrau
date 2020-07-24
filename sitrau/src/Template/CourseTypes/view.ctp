<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CourseType $courseType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course Type'), ['action' => 'edit', $courseType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course Type'), ['action' => 'delete', $courseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Course Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courseTypes view large-9 medium-8 columns content">
    <h3><?= h($courseType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($courseType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($courseType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($courseType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($courseType->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $courseType->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Courses') ?></h4>
        <?php if (!empty($courseType->courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Credits') ?></th>
                <th scope="col"><?= __('Hours Per Week') ?></th>
                <th scope="col"><?= __('Course Type Id') ?></th>
                <th scope="col"><?= __('Semester Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($courseType->courses as $courses): ?>
            <tr>
                <td><?= h($courses->id) ?></td>
                <td><?= h($courses->name) ?></td>
                <td><?= h($courses->credits) ?></td>
                <td><?= h($courses->hours_per_week) ?></td>
                <td><?= h($courses->course_type_id) ?></td>
                <td><?= h($courses->semester_id) ?></td>
                <td><?= h($courses->status) ?></td>
                <td><?= h($courses->created) ?></td>
                <td><?= h($courses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
