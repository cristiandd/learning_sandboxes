<?php 

$json = '[
  {
    "nome": "João",
    "idade": 20
  },
  {
    "nome": "Gláucio",
    "idade": 25
  }
]';

// Set the second parameter as true for returning an array, otherwise it will return an object
$data = json_decode($json, true);

print_r($data);

 ?>