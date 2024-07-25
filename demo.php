<?php

    $name = "Kelly";
    $isDev = true;
    $age = 18;
    $isOld = $age > 18;

    define('LOGO_URL', 'https://www.php.net//images/logos/new-php-logo.svg');
    

    $newAge = $age .'1';
    // echo gettype($name);
    // echo gettype($isDev);
    // echo gettype($age);
    $output = "Hola mi nombre es $name, con una edad de  $age";
    $output .= " , es dev $isDev";

    $outputAge = match(true){
        $age < 5 => "Eres un bebé",
        $age < 11 => "Eres un niño",
        $age < 18 => "Eres un adolescente",
        $age == 18 => "Eres mayor de edad",
    };

    const PAIS = 'Colombia';


    $bestLanguages = ["PHP", "JavaScript", "Python", 1, 2];
    $bestLanguages[] = "Java";

    $person = [
        "name" => "Kelly",
        "age" => 18,
        "isDev" => true,
    ];
?>

<!-- <?php if($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif($isDev) : ?>
    <h2>No eres viejo, pero eres dev</h2>
<?php else : ?>
    <h2>Estas joven, felicidades</h2>
<?php endif; ?> -->

<h3>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language?></li>
    <?php endforeach; ?>
</h3>

<img src="<?= LOGO_URL ?>" alt="PHP LOGO" width="200px">


<h2><?= $outputAge?></h2>
<h1><?=$output . PAIS; ?></h1>


<style>
    body {
        background-color: aquamarine;
    }

</style>
