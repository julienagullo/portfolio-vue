<?php
$sitemap = [
    [
        'loc' => 'https://jagullo.fr/curriculum',
        'lastmod' => '2022-03-19',
    ],
    [
        'loc' => 'https://jagullo.fr/open-source',
        'lastmod' => '2022-03-19',
    ],
    [
        'loc' => 'https://jagullo.fr/contact',
        'lastmod' => '2022-03-19',
    ],
    [
        'loc' => 'https://jagullo.fr/',
        'lastmod' => '2022-03-19',
    ]
];

$xml = simplexml_load_file('https://jagullo.fr/blog/sitemap.xml');

foreach ($sitemap as $key => $value) {
    $url = $xml->addChild('url');
    $url->addChild('loc', $value['loc']);
    $url->addChild('lastmod', $value['lastmod']);
}


header("Content-Type:text/xml");
echo $xml->asXML();