<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusProcedure $statusProcedure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Status Procedure'), ['action' => 'edit', $statusProcedure->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Status Procedure'), ['action' => 'delete', $statusProcedure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusProcedure->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Status Procedures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status Procedure'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List University Procedures'), ['controller' => 'UniversityProcedures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New University Procedure'), ['controller' => 'UniversityProcedures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="statusProcedures view large-9 medium-8 columns content">
    <h3><?= h($statusProcedure->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($statusProcedure->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($statusProcedure->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($statusProcedure->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($statusProcedure->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $statusProcedure->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related University Procedures') ?></h4>
        <?php if (!empty($statusProcedure->university_procedures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Facultie Id') ?></th>
                <th scope="col"><?= __('Types Procedure Id') ?></th>
                <th scope="col"><?= __('Request Detail') ?></th>
                <th scope="col"><?= __('File Attachment') ?></th>
                <th scope="col"><?= __('Status Procedure Id') ?></th>
                <th scope="col"><?= __('Voucher Number') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusProcedure->university_procedures as $universityProcedures): ?>
            <tr>
                <td><?= h($universityProcedures->id) ?></td>
                <td><?= h($universityProcedures->date) ?></td>
                <td><?= h($universityProcedures->student_id) ?></td>
                <td><?= h($universityProcedures->facultie_id) ?></td>
                <td><?= h($universityProcedures->types_procedure_id) ?></td>
                <td><?= h($universityProcedures->request_detail) ?></td>
                <td><?= h($universityProcedures->file_attachment) ?></td>
                <td><?= h($universityProcedures->status_procedure_id) ?></td>
                <td><?= h($universityProcedures->voucher_number) ?></td>
                <td><?= h($universityProcedures->status) ?></td>
                <td><?= h($universityProcedures->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UniversityProcedures', 'action' => 'view', $universityProcedures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UniversityProcedures', 'action' => 'edit', $universityProcedures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UniversityProcedures', 'action' => 'delete', $universityProcedures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universityProcedures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
