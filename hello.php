<h1>
    <?= $greeting; ?>,
</h1>
<p><?= $who;?></p>


<?php foreach ($array as $key => $value):?>
    <h2><?=$value; ?></h2>
<?php endforeach;?>
