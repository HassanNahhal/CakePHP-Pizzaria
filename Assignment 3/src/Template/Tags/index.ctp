<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tags index large-9 medium-8 columns content">
    <h3><?= __('Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('tagID') ?></th>
                <th><?= $this->Paginator->sort('tagName') ?></th>
                <th><?= $this->Paginator->sort('articalID') ?></th>
                <th><?= $this->Paginator->sort('userID') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tags as $tag): ?>
            <tr>
                <td><?= $this->Number->format($tag->tagID) ?></td>
                <td><?= h($tag->tagName) ?></td>
                <td><?= $this->Number->format($tag->articalID) ?></td>
                <td><?= $this->Number->format($tag->userID) ?></td>
                <td><?= h($tag->created) ?></td>
                <td><?= h($tag->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tag->tagID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tag->tagID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->tagID], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->tagID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
