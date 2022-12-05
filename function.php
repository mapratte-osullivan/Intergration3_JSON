<?php

//Description des article
function des($article)
{
    echo $article['description'];
};

//Image des article
function img($article)
{
    echo $article['urlToImage'];
};

//Titre des article
function title($article)
{
    echo $article['title'];
};


function loadJson($url) {
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [],
    ]);

    $config['useragent'] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

    curl_setopt($curl, CURLOPT_USERAGENT, $config['useragent']);
    curl_setopt($curl, CURLOPT_REFERER, 'https://www.domain.com/');

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } 

    return $response;
};