<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $agencies
 */
?>
<?php
$this->assign('title', __('Edit User'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Users'), 'url' => ['action' => 'index']],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
    <?= $this->Form->create($user) ?>
    <div class="card-body">
        <?= $this->Form->control('full_name', ['label' => __('Full Name')]) ?>
        <?= $this->Form->control('username', ['label' => __('Username')]) ?>
        <?= $this->Form->control('password', [
            'label' => __('Password'),
            'required' => false,
            'placeholder' => __('Leave empty to keep current password')
        ]) ?>
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
