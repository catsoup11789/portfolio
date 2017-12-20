
<?php foreach($universities = $pages->find('education')->children()->visible() as $university): ?>
<article>
    <h3><?= $university->title() ?></h3>
    <h4><span><?php if($university->degree() != ''): ?><?= $university->degree() ?>, <?php endif ?><?= $university->fieldOfStudy() ?></span> <?= $university->graduation() ?></h4>
    <?= $university->description()->kt() ?>
    <?php if($university->honors() != '' || $university->activities() != ''): ?><ul class="none">
        <?php if($university->honors() != ''): ?><li><strong>Honors &amp; Awards: </strong> <?= $university->honors() ?></li><?php endif ?>
        <?php if($university->activities() != ''): ?><li><strong>Activities &amp; Societies: </strong> <?= $university->activities() ?></li><?php endif ?>
    </ul><?php endif ?>
    <?php snippet('education-projects', array('university' => $university)) ?>
</article>
<?php endforeach ?>