<?php

// Array de alunos com nome, RM, e-mail e 3 notas
$students = [
    [
        "name" => "Pedro Teixeira",
        "rm" => "002512344",
        "email" => "teixeira.pedro@email.com",
        "grades" => [7.5, 8.0, 6.5, 8.5, 5.0, 9.0]
    ],
    [
        "name" => "Júlia Oliveira",
        "rm" => "002512345",
        "email" => "julia.oliveira@email.com",
        "grades" => [5.0, 4.5, 6.0, 7.5, 4.0, 8.0]
    ],
    [
        "name" => "Gabriel Diaz",
        "rm" => "002512346",
        "email" => "gabs.diaz@email.com",
        "grades" => [9.0, 8.5, 9.5, 6.0, 7.0, 4.5]
    ],
    [
        "name" => "Matheus Freitas",
        "rm" => "002512347",
        "email" => "matheus.freitas@email.com",
        "grades" => [6.0, 6.0, 6.0, 8.0, 8.0, 8.0]
    ],
    [
        "name" => "Alice Francisco",
        "rm" => "002512348",
        "email" => "fran.alice@email.com",
        "grades" => [9.0, 8.5, 9.5, 7.5, 6.0, 4.5]
    ],
    [
        "name" => "Igor Gabriel",
        "rm" => "002512349",
        "email" => "iguinho.gabs@email.com",
        "grades" => [8.0, 9.0, 6.0, 7.5, 7.5, 7.5]
    ],
    [
        "name" => "Rafael Souza ",
        "rm" => "002512340",
        "email" => "souza.rafa@email.com",
        "grades" => [9.0, 8.5, 9.5, 6.0, 6.0, 6.0]
    ],
    [
        "name" => "Murilo Martins",
        "rm" => "002512351",
        "email" => "murilao.martins@email.com",
        "grades" => [6.0, 6.5, 7.0, 8.5, 8.5, 9.5]
    ],
    [
        "name" => "Luiz Lopez",
        "rm" => "002512352",
        "email" => "lopez.luiz@email.com",
        "grades" => [9.0, 8.5, 9.5, 7.0, 5.0, 6.5]
    ],
    [
        "name" => "Leonardo Ricco",
        "rm" => "002512353",
        "email" => "ricco.leo@email.com",
        "grades" => [6.0, 7.0, 6.0, 3.0, 4.5, 9.0]
    ],
    [
        "name" => "Henrique Santana",
        "rm" => "002512354",
        "email" => "santana.henrique@email.com",
        "grades" => [9.0, 8.5, 9.5, 4.5, 7.0, 3.5]
    ],
    [
        "name" => "Ian Ribeiro",
        "rm" => "002512355",
        "email" => "ian.tarzan@email.com",
        "grades" => [6.0, 6.0, 6.0, 9.0, 9.0, 9.0]
    ]
];
 
// Impressão dos dados dos alunos
foreach ($students as $student) {
    $average = array_sum($student['grades']) / count($student['grades']);
    $situation = ($average >= 6.0) ? "Approved" : "Failed";
 
    echo "Name: " . $student['name'] . "\n";
    echo "RM: " . $student['rm'] . "\n";
    echo "E-mail: " . $student['email'] . "\n";
    echo "Grades: " . implode(", ", $student['grades']) . "\n";
    echo "Average: " . number_format($average, 2) . "\n";
    echo "Situation: " . $situation . "\n";
    echo "--------------------------\n";
}
?>
 
