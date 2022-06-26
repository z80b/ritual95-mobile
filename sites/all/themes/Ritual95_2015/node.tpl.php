<?php ?>
<div id="node-<?php print $node->nid; ?>" class="clear-block main-node node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
    <h1><?php print $node->title?></h1>
    <div class="content clear-block">
        <?php print $content; ?>
        <?php print $node_blocks; ?>
    </div>
    <div class="clear-block">
        <div class="meta">
            <?php if ($taxonomy): ?>
            <div class="terms"><?php print $terms ?></div>
            <?php endif;?>
        </div>

        <?php if ($links): ?>
            <div class="links"><?php print $links; ?></div>
        <?php endif; ?>
    </div>
</div>
