<?php
use Exception;
// use MongoDB\Client;
use MongoDB\Driver\ServerApi;
use mongodb\vendor\mongodb\mongodb\src\Client;

$uri = "mongodb+srv://testonly:kpoMfnTYY45hZi3f@cluster0.itopv.mongodb.net/?retryWrites=true&w=majority";

// Specify Stable API version 1
$apiVersion = new ServerApi(ServerApi::V1);

// Create a new client and connect to the server
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);

try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('admin')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}
