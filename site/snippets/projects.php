<article class="grid showcase">
    <div class="row row-space-between">
        <?php foreach($projects = $pages->find('projects')->children()->visible()->limit(4) as $project): ?>
        <div class="col-large-3 showcase-item">
         <a href="<?= $project->url()?>" class="showcase-link"><?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image"/>
        <?php endif ?>
        <div class="showcase-caption">
            <h3 class="showcase-title"><?= $project->title() ?></h3>
        </div>
            </a></div>
        <?php endforeach ?>
    </div>
    <p><a href="<?= page('projects')->url() ?>" class="btn">Show all projects &hellip;</a></p>
</article>
