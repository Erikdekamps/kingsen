<?php
include_once 'cards.php';
$number = mt_rand(1,52);
$name = $cards[$number]['name'];
$type = $cards[$number]['type'];
$rule = $cards[$number]['rule'];
$description = $cards[$number]['description'];

print '<p class="title">' . $name . ' of ' . $type . '</p>';
print '<p class="name">' . $rule . '</p>';
print '<p class="sprite image-' . $number . '"></p>';
print '<p class="description">' . $description . '</p>';
