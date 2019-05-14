<?php

/* @var $this yii\web\View */

$this->title = 'AdminPart';
?>
<div class="site-index">

    <div class="jumbotron alert-success">
        <h1>Администратор</h1>

        <div class="lead"><?= $temp ?></div>

        <p>
            <button class="btn btn-lg btn-success" onclick="huy()">HUY???</button>
        </p>
    </div>

</div>

<script>
    function huy() {
        alert('HUY!!!');
    }
</script>
