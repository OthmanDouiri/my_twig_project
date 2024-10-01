<?php

// Load Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Twig setup
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates'); // Loading the templates folder
$twig = new \Twig\Environment($loader); // Creating Twig environment

// CV information
$data = [
    'name' => 'Othman Douiri',
    'title' => 'Software Developer',
    'email' => 'othman.douiri1@gmail.com',
    'phone' => '632782226',
    'address' => '08007, barcelona, españa',
    'education' => [
        ['title' => 'Bachelor of Computer Science', 'institution' => 'Ibn sina', 'year' => '2015'],
        ['title' => 'Grado superior', 'institution' => 'Univpuig castellar', 'year' => '2025']
    ],
    'experience' => [
        ['position' => 'Junior Developer', 'company' => 'Tech Company', 'years' => '2024-2021'],
        
    ],
    'skills' => ['PHP', 'Twig', 'JavaScript', 'HTML/CSS', 'SQL']
];

// Render the template and pass the data
echo $twig->render('cv.html.twig', $data);
