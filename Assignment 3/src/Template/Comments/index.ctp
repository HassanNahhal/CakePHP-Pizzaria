<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comments index large-9 medium-8 columns content">
    <h3><?= __('Comments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('commentID') ?></th>
                <th><?= $this->Paginator->sort('approved') ?></th>
                <th><?= $this->Paginator->sort('userID') ?></th>
                <th><?= $this->Paginator->sort('articleID') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $comment): ?>
            <tr>
                <td><?= $this->Number->format($comment->commentID) ?></td>
                <td><?= h($comment->approved) ?></td>
                <td><?= $this->Number->format($comment->userID) ?></td>
                <td><?= $this->Number->format($comment->articleID) ?></td>
                <td><?= h($comment->created) ?></td>
                <td><?= h($comment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comment->commentID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->commentID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->commentID], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->commentID)]) ?>
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
