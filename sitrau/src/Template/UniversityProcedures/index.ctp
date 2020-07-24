<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UniversityProcedure[]|\Cake\Collection\CollectionInterface $universityProcedures
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New University Procedure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types Procedures'), ['controller' => 'TypesProcedures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Types Procedure'), ['controller' => 'TypesProcedures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Status Procedures'), ['controller' => 'StatusProcedures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status Procedure'), ['controller' => 'StatusProcedures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="universityProcedures index large-9 medium-8 columns content">
    <h3><?= __('University Procedures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facultie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('types_procedure_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('request_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_procedure_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voucher_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($universityProcedures as $universityProcedure): ?>
            <tr>
                <td><?= $this->Number->format($universityProcedure->id) ?></td>
                <td><?= h($universityProcedure->date) ?></td>
                <td><?= $universityProcedure->has('student') ? $this->Html->link($universityProcedure->student->id, ['controller' => 'Students', 'action' => 'view', $universityProcedure->student->id]) : '' ?></td>
                <td><?= $universityProcedure->has('faculty') ? $this->Html->link($universityProcedure->faculty->name, ['controller' => 'Faculties', 'action' => 'view', $universityProcedure->faculty->id]) : '' ?></td>
                <td><?= $universityProcedure->has('types_procedure') ? $this->Html->link($universityProcedure->types_procedure->name, ['controller' => 'TypesProcedures', 'action' => 'view', $universityProcedure->types_procedure->id]) : '' ?></td>
                <td><?= h($universityProcedure->request_detail) ?></td>
                <td><?= $universityProcedure->has('status_procedure') ? $this->Html->link($universityProcedure->status_procedure->name, ['controller' => 'StatusProcedures', 'action' => 'view', $universityProcedure->status_procedure->id]) : '' ?></td>
                <td><?= h($universityProcedure->voucher_number) ?></td>
                <td><?= h($universityProcedure->status) ?></td>
                <td><?= h($universityProcedure->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $universityProcedure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $universityProcedure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $universityProcedure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universityProcedure->id)]) ?>
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
