<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UniversityProcedure $universityProcedure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit University Procedure'), ['action' => 'edit', $universityProcedure->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete University Procedure'), ['action' => 'delete', $universityProcedure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universityProcedure->id)]) ?> </li>
        <li><?= $this->Html->link(__('List University Procedures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New University Procedure'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types Procedures'), ['controller' => 'TypesProcedures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Types Procedure'), ['controller' => 'TypesProcedures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Status Procedures'), ['controller' => 'StatusProcedures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status Procedure'), ['controller' => 'StatusProcedures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="universityProcedures view large-9 medium-8 columns content">
    <h3><?= h($universityProcedure->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $universityProcedure->has('student') ? $this->Html->link($universityProcedure->student->id, ['controller' => 'Students', 'action' => 'view', $universityProcedure->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faculty') ?></th>
            <td><?= $universityProcedure->has('faculty') ? $this->Html->link($universityProcedure->faculty->name, ['controller' => 'Faculties', 'action' => 'view', $universityProcedure->faculty->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Types Procedure') ?></th>
            <td><?= $universityProcedure->has('types_procedure') ? $this->Html->link($universityProcedure->types_procedure->name, ['controller' => 'TypesProcedures', 'action' => 'view', $universityProcedure->types_procedure->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Request Detail') ?></th>
            <td><?= h($universityProcedure->request_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Procedure') ?></th>
            <td><?= $universityProcedure->has('status_procedure') ? $this->Html->link($universityProcedure->status_procedure->name, ['controller' => 'StatusProcedures', 'action' => 'view', $universityProcedure->status_procedure->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voucher Number') ?></th>
            <td><?= h($universityProcedure->voucher_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($universityProcedure->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($universityProcedure->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($universityProcedure->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $universityProcedure->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
