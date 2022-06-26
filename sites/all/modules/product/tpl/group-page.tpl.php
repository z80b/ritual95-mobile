<div class="group-page clear-block">
    <h1 class="page-title"><?php print $title?></h1>
    <div class="content clear-block<?php print ' '.arg(0).arg(1)?>">
        <div class="clear"></div>
        <div class="section">
            <?php print $products?>
            <div class="clear"></div>
            <?php print $pager?>
        </div>
        <div class="clear"></div>
        <div style="margin: 30px 0 20px 0"><?php print $description?></div>
    </div><br>
</div>