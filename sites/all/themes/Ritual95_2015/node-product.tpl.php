<?php ?>
<?if ($teaser):?>
<div class="element">
    <div class="element_wrapper">
        <?php if(user_access('edit any product content')):?>
            <div class="product-edit-link" href="/node/<?php print $node->nid?>/edit"></div>
        <?php endif?>
        <a onclick="yaCounter6517690.reachGoal('sm-podrob'); return true;" href="<?php print url("node/{$node->nid}")?>" class="element_title"><?php print $node->title?></a>
        <a onclick="yaCounter6517690.reachGoal('sm-podrob'); return true;" href="<?php print url("node/{$node->nid}")?>" class="element_photo"><table><tr><td valign="middle">
            <?php /*print $node->product_thumb;*//* print $node->product_image;*/?>
            <?php /*print $node->product_thumb;*/ print '<img src="'.$node->thumbnail_url.'" alt="'. $node->title .'">';?></td></tr></table><!--<span class="sale"></span>--></a>
        <div class="element_price">
            <?if (!$node->product_minprice && !$node->product_maxprice):?>
            <span style="color:red">цену можно уточнить у менеджера</span>
            <?else:?>
                <?if($node->product_minprice && $node->product_maxprice && $node->product_minprice!=$node->product_maxprice):?>
                    Цена: от <?php print intval($node->product_minprice)?> Руб.
                <?elseif($node->product_minprice && $node->product_minprice > 0):?>
                    Цена: <?php print intval($node->product_minprice)?> Руб.
                <?endif;?>
            <?endif?>
        </div>
        <!-- <div class="element_prop">Размер: AxBxC / мрамор</div> -->
        <a onclick="yaCounter6517690.reachGoal('sm-podrob'); return true;" href="<?php print url("node/{$node->nid}")?>" class="element_detaillink">Смотреть подробнее</a>
    </div>
</div>
<?else:?>

<div class="element_detail product-node<?php if(isset($node->taxonomy[4])) print(' decoration-group')?>" id="node-<?php print $node->nid; ?>">
    <?php print $content ?>
</div>
<div class="clear"></div>

<?endif;?>
