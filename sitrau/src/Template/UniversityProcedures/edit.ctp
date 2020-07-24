<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UniversityProcedure $universityProcedure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $universityProcedure->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $universityProcedure->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List University Procedures'), ['action' => 'index']) ?></li>
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
<div class="universityProcedures form large-9 medium-8 columns content">
    <?= $this->Form->create($universityProcedure) ?>
    <fieldset>
        <legend><?= __('Edit University Procedure') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('student_id', ['options' => $students]);
            echo $this->Form->control('facultie_id', ['options' => $faculties, 'empty' => true]);
            echo $this->Form->control('types_procedure_id', ['options' => $typesProcedures]);
            echo $this->Form->control('request_detail');
            echo $this->Form->control('status_procedure_id', ['options' => $statusProcedures]);
            echo $this->Form->control('voucher_number');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
