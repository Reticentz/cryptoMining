<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $response [] */

$response = ArrayHelper::toArray($response);
$array = $response['data'];
$hashrate = ArrayHelper::getValue($array,'currentHashrate');
$averageHashrate = ArrayHelper::getValue($array, 'averageHashrate');
$validShares = ArrayHelper::getValue($array, 'validShares');
$invalidShares = ArrayHelper::getValue($array, 'invalidShares');
$activeWorkers = ArrayHelper::getValue($array, 'activeWorkers');
$coinsPerMin = ArrayHelper::getValue($array, 'coinsPerMin');
$usdPerMin = ArrayHelper::getValue($array, 'usdPerMin');
$btcPerMin = ArrayHelper::getValue($array, 'btcPerMin');

$this->title = 'Crypto Mining';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Server Statistics</h1>


        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Current Stats</h2>
                <?= '<p>Hashrate:  ' . HTML::encode($hashrate) . '<br></p>' ?>
                <?= '<p>Average Hashrate:  ' . HTML::encode($averageHashrate) . '<br></p>' ?>
                <?= '<p>USD Per Min:  ' . HTML::encode($usdPerMin) . '<br></p>' ?>
                <?= '<p>Zcash Per Min:  ' . HTML::encode($coinsPerMin) . '<br></p>' ?>
                <?= '<p>BTC per min:  ' . HTML::encode($btcPerMin) . '<br></p>' ?>

            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
