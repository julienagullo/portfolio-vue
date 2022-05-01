<?php
ini_set('display_errors', 1);
$pageUrl = 'https://jagullo.fr/page-sitemap.xml';
$pageXml = simplexml_load_file($pageUrl);
$lastDate = new DateTime('2022-01-01T00:00:00+00:00');
foreach ($pageXml as $url) {
    try {
        $date = new DateTime($url->lastmod);
    } catch (Exception $e) {
        continue;
    }
    if ($lastDate < $date) {
        $lastDate = $date;
    }
}

$xml = simplexml_load_file('https://jagullo.fr/blog/sitemap.xml');
$page = $xml->addChild('sitemap');
$page->addChild('loc', $pageUrl);
$page->addChild('lastmod', $lastDate->format('c'));

header("Content-Type:text/xml");
echo $xml->asXML();