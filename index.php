<?php


//Snack 1 array
$basketGames = [
    1 => [
        'squadraCasa' => 'Virtus Bologna',
        'squadraOspite' => 'Brescia',
        'puntiCasa' => 79,
        'puntiOspite' => 57
    ],
    2 => [
        'squadraCasa' => 'Cremona',
        'squadraOspite' => 'Trento',
        'puntiCasa' => 112,
        'puntiOspite' => 105
    ],
    3 => [
        'squadraCasa' => 'Reggiana',
        'squadraOspite' => 'Fortitudo Bologna',
        'puntiCasa' => 88,
        'puntiOspite' => 77
    ],
    4 => [
        'squadraCasa' => 'Napoli',
        'squadraOspite' => 'VL Pesaro',
        'puntiCasa' => 84,
        'puntiOspite' => 85
    ],
    5 => [
        'squadraCasa' => 'Varese',
        'squadraOspite' => 'Dinamo Sassari',
        'puntiCasa' => 96,
        'puntiOspite' => 110
    ],
    6 => [
        'squadraCasa' => 'Brindisi',
        'squadraOspite' => 'Derthona',
        'puntiCasa' => 82,
        'puntiOspite' => 99
    ],
];


//Snack 3 array
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Happy Hippo',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Happy Hippo',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Happy Hippo',
            'text' => 'Testo post 3'
        ],
        [
            'title' => 'Post 4',
            'author' => 'Happy Hippo',
            'text' => 'Testo post 4'
        ] 
    ],
    '15/05/2019' => [
        
        [
            'title' => 'Post 5',
            'author' => 'Happy Hippo',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Happy Hippo',
            'text' => 'Testo post 6'
        ]
    ],
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Snacks</title>


    <style>
        /* stile per lo snack 6 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .grey, .green {
            padding: 40px;
            float: left;
            width: 50%;
        }
        .grey {
            background: grey;
        }
        .green {
            background: green;
        }
        /* se si vuole aggiungere altro css è preferibile creare un file apparte */
    </style>

</head>
<body>

    <section id="snack1">
        
        <h1> Snack 1 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
        <?php
            for($i = 1; $i <= 6; $i++)
                echo "{$basketGames[$i]['squadraCasa']} - {$basketGames[$i]['squadraOspite']} | {$basketGames[$i]['puntiCasa']} - {$basketGames[$i]['puntiOspite']} <br>"; 
        ?>
    </section>
    <section id="snack2">
        
        <h1> Snack 2 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

        <?php

        

        if(empty($name) && empty($email) && empty($age)){
            echo 'Inserisci i valori nella query string';
        }else{
            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];
            $numcheck = is_numeric($age);
            
            if((strlen($name) >= 3) && (strpos($email,'@') && strpos($email, '.')) && ($numcheck)){
                echo 'Accesso riuscito';
            }else{
                echo 'Accesso negato';
            }
        }
        ?>
    </section>
    <section id="snack3">
        
        <h1> Snack 3 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

        <?php
            $arrayKey = array_keys($posts);
            for($x=0; $x < count($arrayKey); $x++){
                $date = $arrayKey;
                $dateValue = $date[$x];
                echo "{$dateValue}<br>";

                /*
                foreach($posts as $dateValue => $val){
                    $key = array_keys($val);
                    for($y = 0; $y < count($key); $y++){
                        echo "{$val[$y]['title']}<br>
                        {$val[$y]['author']}<br>
                        {$val[$y]['text']}<br><br>";
                    }
                }
                */

                for($y = 0; $y < 2; $y++){
                    echo "{$posts[$dateValue][$y]['title']}<br>{$posts[$dateValue][$y]['author']}<br>{$posts[$dateValue][$y]['text']}<br><br>";
                }
               
            }

        ?>

    </section>
    <section id="snack4">
        
        <h1> Snack 4 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

        <?php
            $nums = [];
            while(count($nums) < 15){
                $randNum = rand(1, 100);
                array_push($nums, $randNum);
                
            }
            for($a = 0; $a < 15; $a++)
            echo "{$nums[$a]}<br>";
        ?>

    </section>
    <section id="snack5">
        
        <h1> Snack 5 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

        <?php
        $paragraph = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas nobis, dolor ducimus ab ad sed, veritatis aperiam perferendis impedit dignissimos atque veniam autem modi, doloremque at deleniti beatae inventore laboriosam magnam. Sed libero delectus optio eos molestias eum doloribus veniam aliquid nobis quas, accusamus alias maxime in tenetur fuga ea';
        $paragraphExploded = explode(".", $paragraph);
            
        for($b = 0; $b < count($paragraphExploded); $b++)
        echo "{$paragraphExploded[$b]}.<br>";
        ?>
        
    </section>
    <section id="snack6">
        
        <h1> Snack 6 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
    </section>
    <section id="snack7">
        
        <h1> Snack 7 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
    </section>
</body>
</html>