<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CourtCase> $courtCases
 */
?>
<div class="courtCases index content">
    <?= $this->Html->link(__('New Court Case'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Court Cases') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('petitioner') ?></th>
                    <th><?= $this->Paginator->sort('respondent') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courtCases as $courtCase): ?>
                <tr>
                    <td><?= $this->Number->format($courtCase->id) ?></td>
                    <td><?= h($courtCase->name) ?></td>
                    <td><?= h($courtCase->petitioner) ?></td>
                    <td><?= h($courtCase->respondent) ?></td>
                    <td><?= h($courtCase->created) ?></td>
                    <td><?= h($courtCase->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $courtCase->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $courtCase->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $courtCase->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $courtCase->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>