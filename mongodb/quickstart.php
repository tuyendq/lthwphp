<?php
  use MongoDB\Driver\ServerApi;

  require_once __DIR__ . '/vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  $uri = 'mongodb+srv://' . $_ENV['DB_USER'] . ':' . $_ENV['DB_PASS'] .
  '@cluster0.itopv.mongodb.net/?retryWrites=true&w=majority';

  $apiVersion = new ServerApi(ServerApi::V1);

  $client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);

  try {
    $client->selectDatabase('test')->command(['ping'=>1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
  } catch (Exception $e) {
    printf($e->getMessage());
  }
