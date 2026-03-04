<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Judge> $judges
 */
?>
<div class="judges index content">
    <?= $this->Html->link(__('New Judge'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Judges') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('designation_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($judges as $judge): ?>
                <tr>
                    <td><?= $this->Number->format($judge->id) ?></td>
                    <td><?= h($judge->name) ?></td>
                    <td><?= h($judge->designation_name) ?></td>
                    <td><?= h($judge->created) ?></td>
                    <td><?= h($judge->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $judge->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $judge->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $judge->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $judge->id),
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