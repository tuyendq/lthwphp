<?php
  require_once __DIR__ . '/vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  $uri = 'mongodb+srv://' . $_ENV['DB_USER'] . ':' . $_ENV['DB_PASS'] .
  '@cluster0.itopv.mongodb.net/?retryWrites=true&w=majority';

  $client = new MongoDB\Client($uri);

  try {
    $client->selectDatabase('test')->command(['ping'=>1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
  } catch (Exception $e) {
    printf($e->getMessage());
  }
