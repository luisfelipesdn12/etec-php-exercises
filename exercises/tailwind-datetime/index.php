<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datetime with Tailwind CSS</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-800 flex h-screen">
    <div class="m-auto bg-gray-900 w-96 border-4 border-gray-700 rounded-lg text-center p-4">
        <p class="text-gray-400">
            <?php echo "Hello World"; ?>
        </p>
        <hr class="opacity-10 mt-2 mb-2">
        <p class="mt-6 mb-6 text-xl font-bold text-gray-300">
            <?php
            setlocale(LC_ALL, array('pt_BR'));
            date_default_timezone_set("America/Sao_Paulo");

            $months_en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
            $months_pt = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

            $weekdays_en = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
            $weekdays_pt = array('Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado', 'Domingo');

            $current_date = date('l, d \d\e F \d\e Y à\s H:i');

            echo str_ireplace(
                array_merge($months_en, $weekdays_en),
                array_merge($months_pt, $weekdays_pt),
                $current_date
            ) . "<br>";
            ?>
        </p>
        <hr class="opacity-10 mt-2 mb-2">
        <p class="text-gray-400">
            <?php
            if (date('H') < 6) {
                echo "Boa madrugada 🛌";
            } else if (date('H') < 12) {
                echo "Bom dia 🌇";
            } else if (date('H') < 18) {
                echo "Boa tarde 🌆";
            } else {
                echo "Boa noite 🌃";
            }
            ?>
        </p>
    </div>
</body>

</html>