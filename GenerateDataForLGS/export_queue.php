<?php

require '../vendor/fzaninotto/faker/src/autoload.php';

echo "Creating dummy data for export_queue" . PHP_EOL;

try {
$pdo = new PDO('mysql:host=localhost;dbname=cohort_lgs', 'developer', 'developer');
$sql = 'INSERT INTO export_queue (campaign, consumer_data, created, delivered) VALUES (?, ?, ?, ?)';
$stmt = $pdo->prepare($sql);
$faker = \Faker\Factory::create();

var_dump($faker);

for ($i=0; $i < 2; $i++) {
  $stmt->bindValue(1, $faker->numberBetween(1000, 9000), PDO::PARAM_INT);
  $stmt->bindValue(2, $faker->address, PDO::PARAM_STR);
  $stmt->bindValue(3, $faker->dateTime('now')->format("Y-m-d H:i:s"), PDO::PARAM_STR);
  $stmt->bindValue(4, null, PDO::PARAM_NULL);

  echo " | " . $faker->numberBetween(1000, 9000) . " | " . $faker->address . " | " . $faker->dateTime('now')->format("Y-m-d H:i:s") . " | " . null;

  $stmt->execute();
}
} catch (Exception $e) {
$e->getMessage();
}
