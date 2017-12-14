<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="rooms view large-9 medium-8 columns content">
<?= debug($showtimes->toArray()) ?> 
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
              <th scope="row"><?= __('Horaires') ?></th>
            <th scope="row"><?= __('lundi') ?></th>
            <th scope="row"><?= __('mardi') ?></th>
            <th scope="row"><?= __('mercredi') ?></th>
            <th scope="row"><?= __('jeudi') ?></th>
            <th scope="row"><?= __('vendredi') ?></th>
            <th scope="row"><?= __('samedi') ?></th>
            <th scope="row"><?= __('dimanche') ?></th>
        </tr>
        <tr>
     
        </tr>
    </table>
    
</div>
