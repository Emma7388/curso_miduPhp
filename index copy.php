//$name = "Emma";
//$isDev = true;
//$age = 36;

//1
//if ($isOld) {
// echo "<h2>Vos segui aprendiendo no seas weon</h2>";
//} else if ($isDev) {
// echo "<p>Es lo mejor para vos dale!</p>";
//} else {
// echo "<H3>TE QUEDA BOCHA</H3>";
//}

<?php
define('LOGO_URL', 'https://randomuser.me/api/portraits/lego/8.jpg');
?>
//
//$outputAge = match (true) {
// $age < 2=> "Eres un bebé, $name",
    // $age < 10=> "Eres un niño, $name",
        // $age < 18=> "Eres un adolecente, $name",
            // default => "Eres Adulto 🧓"
            //};
            //$bestLanguages = ["PHP", "JavaScript", "Phyton", "1", "2"];
            //$bestLanguages[3] = "Java";
            //$bestLanguages[4] = "CSS";
            //$bestLanguages[] = "TypeCript";

            //$output = "Hola $name, tenés una edad de $age. 🤣";

            //$person = ["name" => "Emma","age" => 36,"isDev" => true,"languages" => ["PHP", "JavaScript", "Python"],];
            //
            <div class="container">
                <h1><?= $output ?></h1>
                <h2><?= $outputAge ?></h2>
                <h2>El mejor lenguaje es: <?= $person["languages"][2] ?></h2>
                <img src="<?= LOGO_URL ?>" alt="foto X">
            </div>


            <ul>
                <?php foreach ($bestLanguages as $key => $language) : ?>

                    <li> <?= $key . " " .  $language ?> </li>

                <?php endforeach; ?>
            </ul>

            <style>
                :root {
                    color-scheme: light dark;
                }

                body {
                    display: grid;
                    place-content: center;
                    text-align: center;
                }

                .container {
                    background-color: red;
                }

                ul {
                    list-style: none;
                }
            </style>