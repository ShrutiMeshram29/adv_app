<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Judge $judge
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Judge'), ['action' => 'edit', $judge->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Judge'), ['action' => 'delete', $judge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $judge->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Judges'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Judge'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="judges view content">
            <h3><?= h($judge->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($judge->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation Name') ?></th>
                    <td><?= h($judge->designation_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($judge->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($judge->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($judge->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>