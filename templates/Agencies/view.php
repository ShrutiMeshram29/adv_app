<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Agency'), ['action' => 'edit', $agency->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agency'), ['action' => 'delete', $agency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agencies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agency'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agencies view content">
            <h3><?= h($agency->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($agency->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agency->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($agency->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($agency->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>