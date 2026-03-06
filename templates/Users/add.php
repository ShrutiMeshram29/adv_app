<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $agencies
 */
?>
<?php
$this->assign('title', __('Add User'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Users'), 'url' => ['action' => 'index']],
    ['title' => __('Add')],
]);
?>

<div class="card card-primary card-outline">
    <?= $this->Form->create($user) ?>
    <div class="card-body">
        <?= $this->Form->control('full_name', ['label' => __('Full Name')]) ?>
        <?= $this->Form->control('username', ['label' => __('Username')]) ?>
        <?= $this->Form->control('password', ['label' => __('Password')]) ?>
        <?= $this->Form->control('agencies._ids', [
            'label' => __('Agencies'),
            'options' => $agencies,
            'multiple' => true,
            'class' => 'form-control select2'
        ]) ?>
    </div>
    <div class="card-footer d-flex">
        <div class="ml-auto">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
