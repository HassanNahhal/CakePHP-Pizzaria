<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tag->tagID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tag->tagID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tags form large-9 medium-8 columns content">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Edit Tag') ?></legend>
        <?php
            echo $this->Form->input('tagName');
            echo $this->Form->input('articalID');
            echo $this->Form->input('userID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
