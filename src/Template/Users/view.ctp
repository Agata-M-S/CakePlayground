<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User First Name') ?></th>
            <td><?= h($user->user_first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Last Name') ?></th>
            <td><?= h($user->user_last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($user->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Date Created') ?></th>
            <td><?= h($user->user_date_created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Reviews') ?></h4>
        <?php if (!empty($user->reviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Review Id') ?></th>
                <th scope="col"><?= __('Review Score') ?></th>
                <th scope="col"><?= __('Review') ?></th>
                <th scope="col"><?= __('Review Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->reviews as $reviews): ?>
            <tr>
                <td><?= h($reviews->review_id) ?></td>
                <td><?= h($reviews->review_score) ?></td>
                <td><?= h($reviews->review) ?></td>
                <td><?= h($reviews->review_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reviews', 'action' => 'view', $reviews->review_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reviews', 'action' => 'edit', $reviews->review_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reviews', 'action' => 'delete', $reviews->review_id], ['confirm' => __('Are you sure you want to delete # {0}?', $reviews->review_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
