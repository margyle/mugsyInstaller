<?php
$query = $pdo->prepare('SELECT * FROM coffeeNowSettings WHERE coffeeNowMachineId=:parameter');
$query->bindParam(':parameter', $_SESSION["machineId"], PDO::PARAM_STR);
$query->execute();

foreach ($query as $row) {
    $coffeeNowRecipeId = $row['coffeeNowRecipeId'];
    $coffeeNowRecipeName = $row['coffeeNowRecipeName'];
    $coffeeNowSettingsType = $row['coffeeNowSettingsType'];

}
