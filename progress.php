<?php

$data = json_decode(
    file_get_contents("php://input"),
    true
);

file_put_contents(
    "data/progress.json",
    json_encode($data)
);

echo "Progress Saved";

?>

