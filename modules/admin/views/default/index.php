<?php
use yii\bootstrap\Nav;
use yii\helpers\Html;

$this->title = 'Админка';
?>
<div class="admin-default-index">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                    echo Nav::widget([
                        'options' => ['class' => 'nav nav-pills nav-stacked'],
                        'items' => [

                        ],
                        'encodeLabels' => false
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
