<?php snippet('header') ?>

<main class="grid">
    
    <div class="row" style="padding-bottom: 3em;">
        <div class="col-large-3">
            <div class="content">
                <h6>About Me</h6>
                <?php if($page->externals() != ''): ?>
                <?php $externals = yaml($page->externals()) ?>
                <ul class="none links">
                    <?php foreach($externals as $external): ?>
                    <li><a href="<?= $external['link'] ?>" target="_blank"><?= $external['text2'] ?>&nbsp;→</a></li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </div>
        </div>
        <div class="col-large-8">
            <div class="content">
                <?= $page->text()->kirbytext() ?>
                <div class="expertise">
                <strong>Expertise: </strong><?php foreach ($page->expertise()->split() as $tag): ?>
                <span class="expertise"><?= $tag ?></span><span>, </span> 
                <?php endforeach?></div>
            </div>
        </div>
    </div>
 
    
    <?php foreach($pages->visible() as $section): ?>
    <section class="row">
        <div class="col-large-3">
            <div class="content">
                <h6><?php if($section->title() == "Projects"): ?>
                Recent <?php endif ?><?= $section->title()->html() ?>
                </h6>
            </div>
        </div>
    <div class="col-large-8">
        <div class="content">
            <?php snippet($section->uid(), array('data' => $section)) ?>
        </div>
    </section>
    <?php endforeach ?>

</main>

<?php snippet('footer') ?>