<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CourtCase $courtCase
 */
?>

<?php
$this->assign('title', __('Edit Court Case'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Court Cases'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $courtCase->id]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
    <?= $this->Form->create($courtCase) ?>
    <div class="card-body">
        <?= $this->Form->control('name') ?>
        <?= $this->Form->control('petitioner') ?>
        <?= $this->Form->control('respondent') ?>
    </div>
    <div class="card-footer d-flex">
        <div class="mr-auto">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $courtCase->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $courtCase->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
        <div class="ml-auto">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'view', $courtCase->id], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>