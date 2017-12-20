<?php foreach($honors = $pages->find('honors-awards')->children()->visible() as $honor): ?>
<article id="<?= $honor->title() ?>">
    <h3><?= $honor->title() ?></h3>
    <h4><?php if($honor->issuer() != ''): ?><span><?= $honor->issuer() ?></span><?php endif ?> <?= $honor->date('F Y') ?></h4>
    <?= $honor->description()->kt() ?>
</article>
<?php endforeach ?>