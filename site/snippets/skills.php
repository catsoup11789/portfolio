<article>
    <table>
        <thead>
        <tr>
            <th>Skills</th>
            <th>Use</th>
            <th>Competence</th>
        </tr>
        </thead>
    <?php $n = 0; foreach($skills = $pages->find('skills')->children()->visible() as $skill): $n++; ?>  
        <tr class="<?php echo ($n%2) ? 'odd' : 'even' ?>">
            <td><?= $skill->title() ?></td>
            <td><?= $skill->use() ?></td>
            <td><span class="<?= $skill->competence()->lower() ?>"><?= $skill->competence() ?></span></td>
        </tr>
    <?php endforeach ?>
    </table>
</article>
