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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $judge->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $judge->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Judges'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="judges form content">
            <?= $this->Form->create($judge) ?>
            <fieldset>
                <legend><?= __('Edit Judge') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('designation_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
