<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Academic Semesters'), ['controller' => 'AcademicSemesters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic Semester'), ['controller' => 'AcademicSemesters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Curriculas'), ['controller' => 'Curriculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curricula'), ['controller' => 'Curriculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schools view large-9 medium-8 columns content">
    <h3><?= h($school->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($school->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $school->has('department') ? $this->Html->link($school->department->name, ['controller' => 'Departments', 'action' => 'view', $school->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($school->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($school->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($school->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $school->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Academic Semesters') ?></h4>
        <?php if (!empty($school->academic_semesters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->academic_semesters as $academicSemesters): ?>
            <tr>
                <td><?= h($academicSemesters->id) ?></td>
                <td><?= h($academicSemesters->name) ?></td>
                <td><?= h($academicSemesters->school_id) ?></td>
                <td><?= h($academicSemesters->status) ?></td>
                <td><?= h($academicSemesters->created) ?></td>
                <td><?= h($academicSemesters->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AcademicSemesters', 'action' => 'view', $academicSemesters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AcademicSemesters', 'action' => 'edit', $academicSemesters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AcademicSemesters', 'action' => 'delete', $academicSemesters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $academicSemesters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coordinators') ?></h4>
        <?php if (!empty($school->coordinators)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Degree Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->coordinators as $coordinators): ?>
            <tr>
                <td><?= h($coordinators->id) ?></td>
                <td><?= h($coordinators->user_id) ?></td>
                <td><?= h($coordinators->degree_id) ?></td>
                <td><?= h($coordinators->school_id) ?></td>
                <td><?= h($coordinators->status) ?></td>
                <td><?= h($coordinators->created) ?></td>
                <td><?= h($coordinators->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Coordinators', 'action' => 'view', $coordinators->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Coordinators', 'action' => 'edit', $coordinators->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Coordinators', 'action' => 'delete', $coordinators->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinators->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Curriculas') ?></h4>
        <?php if (!empty($school->curriculas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->curriculas as $curriculas): ?>
            <tr>
                <td><?= h($curriculas->id) ?></td>
                <td><?= h($curriculas->name) ?></td>
                <td><?= h($curriculas->school_id) ?></td>
                <td><?= h($curriculas->status) ?></td>
                <td><?= h($curriculas->created) ?></td>
                <td><?= h($curriculas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Curriculas', 'action' => 'view', $curriculas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Curriculas', 'action' => 'edit', $curriculas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Curriculas', 'action' => 'delete', $curriculas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curriculas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Students') ?></h4>
        <?php if (!empty($school->students)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Pay Scale Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->students as $students): ?>
            <tr>
                <td><?= h($students->id) ?></td>
                <td><?= h($students->user_id) ?></td>
                <td><?= h($students->school_id) ?></td>
                <td><?= h($students->pay_scale_id) ?></td>
                <td><?= h($students->status) ?></td>
                <td><?= h($students->created) ?></td>
                <td><?= h($students->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
