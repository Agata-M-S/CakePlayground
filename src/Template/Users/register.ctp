<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?php //= __('Actions') ?><!--</li>-->
<!--        <li>--><?php //= $this->Html->link(__('List Users'), ['action' => 'index']) ?><!--</li>-->
<!--        <li>--><?php //= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?><!--</li>-->
<!--        <li>--><?php //= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="input-div">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Register') ?></legend>
        <?php
        echo $this->Form->control('user_first_name');
        echo $this->Form->control('user_last_name');
        //            echo $this->Form->control('user_date_created', ['empty' => true]);
        echo $this->Form->control('password');
        echo $this->Form->control('username');
        echo $this->Form->control('email');
        //            echo $this->Form->control('reviews._ids', ['options' => $reviews]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
