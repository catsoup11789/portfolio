<?php snippet('header') ?>

<main class="grid">
    <div class="row">
        <div class="col-large-12">
            <div class="content"><nav class="breadcrumb">
  <ul>
    <?php foreach($site->breadcrumb() as $crumb): ?>
    <li<?php e($crumb->isActive(), ' class="is-active"') ?>><a href="<?= $crumb->url() ?>"><?= $crumb->title()->html() ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav></div>
        </div>
    </div>
    <div class="row row-bottom row-space-between">
        <div class="col-large-8">
            <div class="content left"><h2><?= $page->title() ?></h2>
            <?php if($page->who() != ''): ?><h5><strong>FOR: </strong><?= $page->who() ?></h5><?php endif ?></div>
        </div>
        <div class="col-large-3">
            <div class="content right"><h3><?= $page->year() ?></h3></div>
        </div>
    </div>
    <div class="row">
        <div class="col-large-12">
        <div class="content">
            <hr/>
            <?= $page->description()->kt() ?>
            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <figure>
                <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
            </figure>
            <?php endforeach ?>
            
            <?php if ($page->tools() != '' || $page->type() != '' || $page->website() != ''): ?><hr/><?php endif ?>
            <div class="grid">
                <div class="row row-middle">
                    <div class="col-large-10">
                        <div class="grid">
                            <div class="row">
                                <div class="content"><?php if($page->tools() != ''): ?><span class="tag-title muted">Tools Used:</span><br/><?php foreach($page->tools()->split() as $tool): ?><span class="tag"><?= $tool ?></span><?php endforeach ?><?php endif ?></div>
                            </div>
                            <div class="row">
                                <div class="content"><?php if($page->category() != ''): ?><span class="tag-title muted">Creative Fields:</span><br/><?php foreach($page->category()->split() as $category): ?><span class="tag"><?= $category ?></span><?php endforeach ?><?php endif ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-large-2"><?php if($page->website() != ''):?><p class="center"><a href="<?= $page->website() ?>" target="_blank" class="btn">View Website</a></p><?php endif ?></div>
                </div>
            </div>
            </div></div>
    </div>
</main>
<?php snippet('prevnext') ?>
<?php snippet('footer') ?>