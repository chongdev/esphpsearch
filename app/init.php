  <?php

    // use Elasticsearch\ClientBuilder;
    require 'vendor/autoload.php';

    // $client = ClientBuilder::create()->build();

    $es = new Elasticsearch\client([
    	'hosts' => ['127.0.0.1:9200']
    ]);