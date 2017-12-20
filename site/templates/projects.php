<?php snippet('header') ?>

<main class="grid">
    
    <div class="row">
        <div class="col-large-12">
            <div class="content">
                <nav class="breadcrumb">
                  <ul>
                    <?php foreach($site->breadcrumb() AS $crumb): ?>
                    <li<?php e($crumb->isActive(), ' class="is-active"') ?>><a href="<?php echo $crumb->url() ?>"><?php echo $crumb->title()->html() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </nav>
                <h2 class="left"><?= $page->title() ?></h2>
            <hr>
            </div>
        </div>
    </div>
    <?php snippet('filter', array('categories' => $categories)) ?>
    
    <div class="row">
        <div class="col-large-12">
            <div class="content">
            <ul class="projects-showcase">
            <?php foreach($items as $project): ?>
                <li class="project-item">
                    <a href="<?= $project->url() ?>" class="project-link">
                        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
                        <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="project-image"/>
                        <?php endif ?>
                        <div class="project-caption">
                            <h3 class="project-title"><?= $project->title() ?></h3>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>
            </ul>
            </div>
        </div>
    </div>
    
</main>

<?php snippet('footer') ?>