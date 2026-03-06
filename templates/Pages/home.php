<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'Dashboard');
?>

<div class="row mb-3">
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Users</h3>
                <p>Manage system users</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <?= $this->Html->link('Open Users <i class="fas fa-arrow-circle-right"></i>', ['controller' => 'Users', 'action' => 'index'], ['class' => 'small-box-footer', 'escape' => false]) ?>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Judges</h3>
                <p>Manage judges records</p>
            </div>
            <div class="icon">
                <i class="fas fa-balance-scale"></i>
            </div>
            <?= $this->Html->link('Open Judges <i class="fas fa-arrow-circle-right"></i>', ['controller' => 'Judges', 'action' => 'index'], ['class' => 'small-box-footer', 'escape' => false]) ?>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>Cases</h3>
                <p>Manage court cases</p>
            </div>
            <div class="icon">
                <i class="fas fa-gavel"></i>
            </div>
            <?= $this->Html->link('Open Cases <i class="fas fa-arrow-circle-right"></i>', ['controller' => 'CourtCases', 'action' => 'index'], ['class' => 'small-box-footer', 'escape' => false]) ?>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>Rooms</h3>
                <p>Manage hearing rooms</p>
            </div>
            <div class="icon">
                <i class="fas fa-door-open"></i>
            </div>
            <?= $this->Html->link('Open Rooms <i class="fas fa-arrow-circle-right"></i>', ['controller' => 'Rooms', 'action' => 'index'], ['class' => 'small-box-footer', 'escape' => false]) ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quick Links</h3>
            </div>
            <div class="card-body">
                <div class="btn-group" role="group" aria-label="Quick links">
                    <?= $this->Html->link('Users', ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-outline-primary']) ?>
                    <?= $this->Html->link('Judges', ['controller' => 'Judges', 'action' => 'index'], ['class' => 'btn btn-outline-primary']) ?>
                    <?= $this->Html->link('Cases', ['controller' => 'CourtCases', 'action' => 'index'], ['class' => 'btn btn-outline-primary']) ?>
                    <?= $this->Html->link('Agencies', ['controller' => 'Agencies', 'action' => 'index'], ['class' => 'btn btn-outline-primary']) ?>
                    <?= $this->Html->link('Rooms', ['controller' => 'Rooms', 'action' => 'index'], ['class' => 'btn btn-outline-primary']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
