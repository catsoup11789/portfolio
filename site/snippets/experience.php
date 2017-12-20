<?php foreach($jobs = $pages->find('experience')->children()->visible() as $job): ?>
    <article>
        <h3><?= $job->title() ?></h3>
        <h4><?php if($job->employer() != ''): ?><span><?= $job->employer() ?></span><?php endif ?> <?= $job->time_period() ?></h4>
        <?= $job->description()->kt() ?>
            <?php snippet('experience-honors', array('job' => $job)) ?>
                <?php snippet('experience-projects', array('job' => $job)) ?>
    </article>
    <?php endforeach ?>