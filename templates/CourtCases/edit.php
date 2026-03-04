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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $courtCase->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $courtCase->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Court Cases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="courtCases form content">
            <?= $this->Form->create($courtCase) ?>
            <fieldset>
                <legend><?= __('Edit Court Case') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('petitioner');
                    echo $this->Form->control('respondent');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
