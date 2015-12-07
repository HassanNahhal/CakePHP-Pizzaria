<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->tagID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->tagID], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->tagID)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->tagID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('TagName') ?></th>
            <td><?= h($tag->tagName) ?></td>
        </tr>
        <tr>
            <th><?= __('TagID') ?></th>
            <td><?= $this->Number->format($tag->tagID) ?></td>
        </tr>
        <tr>
            <th><?= __('ArticalID') ?></th>
            <td><?= $this->Number->format($tag->articalID) ?></td>
        </tr>
        <tr>
            <th><?= __('UserID') ?></th>
            <td><?= $this->Number->format($tag->userID) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tag->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tag->modified) ?></tr>
        </tr>
    </table>
</div>
