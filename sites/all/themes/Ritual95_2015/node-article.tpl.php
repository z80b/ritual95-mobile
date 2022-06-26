<?php ?>
<?if ($teaser):?>
    <div class="article-node teaser">
        <div class="node-content">
            <a href="<?php print url("node/{$node->nid}")?>" class="article-title"><?php print $node->title?></a>
            <div class="node-body">
                <?php print $node->teaser; ?>
            </div>
            <?php print l('Подробнее', "node/{$node->nid}", array('attributes' => array ('class' => 'read-more'))); ?>
        </div>
    </div>
<?else:?>
    <div id="node-<?php print $node->nid; ?>" class="clear-block main-node node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
        <h1><?php print $node->title?><span><?php print date('d.m.Y',$node->created);?></span></h1>
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
<?endif;?>