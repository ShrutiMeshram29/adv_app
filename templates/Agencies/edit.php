<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>

<?php
$this->assign('title', __('Edit Agency'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Agencies'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $agency->id]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
    <?= $this->Form->create($agency) ?>
    <div class="card-body">
        <?= $this->Form->control('name') ?>
        <?= $this->Form->control('users._ids', [
            'options' => $users ?? [],
            'class' => 'select2',
            'label' => __('Users'),
            'data-placeholder' => __('Select users')
        ]) ?>
    </div>
    <div class="card-footer d-flex">
        <div class="mr-auto">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agency->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
        <div class="ml-auto">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'view', $agency->id], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
