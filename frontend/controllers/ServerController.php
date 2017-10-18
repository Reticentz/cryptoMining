<?php

namespace frontend\controllers;

class ServerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-zcash.flypool.org/miner/t1MZ9MUkTBQ57x8Rx6AmED9gHD9tqFwHrTp/currentStats",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $this->render('index', [
            'response' => $response,
        ]);
    }

}
