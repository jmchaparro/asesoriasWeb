<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategoriaSearch */
/** @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorias';
?>

<div class="site-index">
<section id="wrapper">
    <hgroup>
        <h2>Acesoria y Consultoria</h2>
        <h3>Uno de los pilares de nuestro grupo es prestar el servicio de asesoría
            y consultoría en las siguientes áreas:</h3>
    class .<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Fluid jumbo heading</h1>
            <p class="lead">Jumbo helper text</p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
    </div>
    </hgroup>
    <?php echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_categoria_item',
        'layout' => '<div id="holder"">{items}</div>{pager}',
        
    ]) ?>

    <div class="logo">
        <img src="Imag/logo.webp">
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div id="overlay"></div>
</section>
</div>


