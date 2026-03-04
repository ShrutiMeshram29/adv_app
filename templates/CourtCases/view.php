<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CourtCase $courtCase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Court Case'), ['action' => 'edit', $courtCase->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Court Case'), ['action' => 'delete', $courtCase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courtCase->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Court Cases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Court Case'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="courtCases view content">
            <h3><?= h($courtCase->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($courtCase->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Petitioner') ?></th>
                    <td><?= h($courtCase->petitioner) ?></td>
                </tr>
                <tr>
                    <th><?= __('Respondent') ?></th>
                    <td><?= h($courtCase->respondent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($courtCase->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($courtCase->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($courtCase->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>