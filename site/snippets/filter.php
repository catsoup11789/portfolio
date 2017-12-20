<div class="row row-top">
    <div class="col-large-1"><div class="content">
        <span class="filter-by">Filter by:</span>
        </div></div>
        <div class="col-large-11"><div class="content">
        <ul class="filter">
            <li><a<?php e(param('category') == 'new', ' class="is-active"', '')?> href="<?= $page->url() . '/category:new' ?>"><?= 'new' ?></a></li>
            <?php foreach($categories as $category): ?>
            <li><a<?php e(param('category') == $category, ' class="is-active"', '')?> href="<?= $page->url() . '/category:' . urlencode($category) ?>"><?= $category ?></a></li>
            <?php endforeach ?> 
            <?php if(param('category')): ?><li>
          <a class="button" href="<?= $page->url() ?>"><span style="color: #999; font-size: 1.1em; top: 2px; position: relative; padding-right: .25em">&times;</span> remove filter</a>
          </li><?php endif ?>
        </ul>
    </div></div>
</div>