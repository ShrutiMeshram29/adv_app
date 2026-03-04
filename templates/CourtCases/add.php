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
            <?= $this->Html->link(__('List Court Cases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="courtCases form content">
            <?= $this->Form->create($courtCase) ?>
            <fieldset>
                <legend><?= __('Add Court Case') ?></legend>
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
