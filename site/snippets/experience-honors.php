<div class="accordion">
    <?php $occupation = $job->title(); ?>
    <?php $honors = $pages->find('honors-awards')->children()->visible()->filterBy('occupation', '*=', $occupation) ?>
    <?php if($honors->count() >= 1): ?>
    <h5 class="accordion-toggle inactive"><?= $honors->count() ?> honor<?php if($honors->count() > 1): ?>s<?php endif ?> or award<?php if($honors->count() > 1): ?>s<?php endif ?></h5>
    <p class="accordion-content">
        <?php foreach($honors as $honor): ?>
        <strong><i class="fa fa-trophy" aria-hidden="true"></i> <?= $honor->title(); ?></strong>&nbsp;
        <?= $honor->description()->kt()->excerpt(140) ?> <a href="#<?= $honor->title(); ?>">View <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a><br/>
        <?php endforeach ?>
    </p>
    <?php endif ?>
</div>