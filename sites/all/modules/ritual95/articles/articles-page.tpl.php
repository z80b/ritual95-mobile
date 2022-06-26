<?php ?>
<div class="article-page main-node">
    <h1>Статьи</h1>
    <div class="page-body">
        <?php if ($data_source):?>
            <div class="inner">
                <?php while ($node = db_fetch_object($data_source)):?>
                    <div class="teaser">
                        <h2>
                            <span><?php print date('d.m.Y',$node->created);?></span>
                            <?php print l($node->title, "node/$node->nid", array('absolute' => true))?>
                        </h2>
                        <div><?php print $node->teaser;?></div>
                    </div>
                    <hr />
                <?php endwhile;?>
            </div>
        <?php else:?>
            <p>Раздел в стадии заполнения</p>
        <?endif;?>
    </div>
    <div class="clear"></div>
</div>