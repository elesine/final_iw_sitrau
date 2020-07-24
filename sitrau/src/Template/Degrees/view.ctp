<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Degree $degree
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Degree'), ['action' => 'edit', $degree->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Degree'), ['action' => 'delete', $degree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $degree->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Degree'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Deans'), ['controller' => 'Deans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dean'), ['controller' => 'Deans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Directors'), ['controller' => 'Directors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Director'), ['controller' => 'Directors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rectors'), ['controller' => 'Rectors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rector'), ['controller' => 'Rectors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="degrees view large-9 medium-8 columns content">
    <h3><?= h($degree->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($degree->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acronym') ?></th>
            <td><?= h($degree->acronym) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($degree->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($degree->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($degree->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $degree->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Coordinators') ?></h4>
        <?php if (!empty($degree->coordinators)): ?>
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
            <?php foreach ($degree->coordinators as $coordinators): ?>
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
        <h4><?= __('Related Deans') ?></h4>
        <?php if (!empty($degree->deans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Degree Id') ?></th>
                <th scope="col"><?= __('Faculty Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($degree->deans as $deans): ?>
            <tr>
                <td><?= h($deans->id) ?></td>
                <td><?= h($deans->user_id) ?></td>
                <td><?= h($deans->degree_id) ?></td>
                <td><?= h($deans->faculty_id) ?></td>
                <td><?= h($deans->status) ?></td>
                <td><?= h($deans->created) ?></td>
                <td><?= h($deans->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Deans', 'action' => 'view', $deans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Deans', 'action' => 'edit', $deans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Deans', 'action' => 'delete', $deans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Directors') ?></h4>
        <?php if (!empty($degree->directors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Degree Id') ?></th>
                <th scope="col"><?= __('Department Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($degree->directors as $directors): ?>
            <tr>
                <td><?= h($directors->id) ?></td>
                <td><?= h($directors->user_id) ?></td>
                <td><?= h($directors->degree_id) ?></td>
                <td><?= h($directors->department_id) ?></td>
                <td><?= h($directors->status) ?></td>
                <td><?= h($directors->created) ?></td>
                <td><?= h($directors->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Directors', 'action' => 'view', $directors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Directors', 'action' => 'edit', $directors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Directors', 'action' => 'delete', $directors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $directors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Rectors') ?></h4>
        <?php if (!empty($degree->rectors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Degree Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($degree->rectors as $rectors): ?>
            <tr>
                <td><?= h($rectors->id) ?></td>
                <td><?= h($rectors->user_id) ?></td>
                <td><?= h($rectors->degree_id) ?></td>
                <td><?= h($rectors->status) ?></td>
                <td><?= h($rectors->created) ?></td>
                <td><?= h($rectors->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rectors', 'action' => 'view', $rectors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rectors', 'action' => 'edit', $rectors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rectors', 'action' => 'delete', $rectors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rectors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Teachers') ?></h4>
        <?php if (!empty($degree->teachers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Degree Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($degree->teachers as $teachers): ?>
            <tr>
                <td><?= h($teachers->id) ?></td>
                <td><?= h($teachers->user_id) ?></td>
                <td><?= h($teachers->degree_id) ?></td>
                <td><?= h($teachers->status) ?></td>
                <td><?= h($teachers->created) ?></td>
                <td><?= h($teachers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Teachers', 'action' => 'view', $teachers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Teachers', 'action' => 'edit', $teachers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teachers', 'action' => 'delete', $teachers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teachers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
