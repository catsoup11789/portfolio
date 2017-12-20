<div class="accordion">
    <?php $occupation = $job->title(); ?>
    <?php $projects = $pages->find('projects')->children()->visible()->filterBy('occupation', '*=', $occupation) ?>
    <?php if($projects->count() >= 1): ?>
    <h5 class="accordion-toggle inactive"><?= $projects->count() ?> project<?php if($projects->count() > 1): ?>s<?php endif ?></h5>
    <p class="accordion-content">
        <?php foreach($projects as $project): ?>
        <span><strong><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;<a href="<?= $project->url(); ?>"><?= $project->title(); ?></a></strong></span>
        <?php endforeach ?>
    </p>
    <?php endif ?>
</div>