<?php foreach($certifications = $pages->find('certifications')->children()->visible() as $certification): ?>
<article id="<?= $certification->title() ?>">
    <h3><?= $certification->title() ?></h3>
    <h4><span><?= $certification->authority() ?><?php if($certification->license() != ''): ?>, License <?= $certification->license() ?><?php endif ?></span></h4>
    <p><?php if($certification->expire() == "false"): ?>Starting <?php $acquiredForever = strtotime($certification->acquired()); echo date('F Y', $acquiredForever); ?><?php else: ?><?php $acquired = strtotime($certification->acquired()); echo date('F Y', $acquired); ?> &mdash; <?php $expired = strtotime($certification->expired()); echo date('F Y', $expired) ?><?php endif ?></p>
</article>
<?php endforeach ?>