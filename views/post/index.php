<?php if (count($model)):   ?>

    <?php foreach ($model as $item):?>
        <div class="well">
            <h3><?= $item->title?></h3>
            <p>
                <?= $model->description ?>
            </p>
        </div>
    <?php endforeach;?>

<?php endif; ?>
