<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foutmelding</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
            margin: 0;
        }
        main {
            max-width: 840px;
            margin: 0 auto;
        }
        thead {
            font-weight: 600;
        }
        p {
            color: red;
            font-weight: 600;
        }
    </style>
</head>
<body>
<main>
    <h1><?php echo lang('error.title', 'Error');?></h1>

    <?php if (env('DEBUG')) { ?>
        <p><?php echo $error['message'];?></p>

        <h2>Trace</h2>
        <table>
            <thead>
            <tr>
                <td>Bestand</td>
                <td>Regelnummer</td>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($error['trace'] as $e) {
                echo '<tr>';
                echo '<td>' . ($e['file'] ?? '') . '</td>';
                echo '<td>' . ($e['line'] ?? '') . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    <?php } else {
        ?>
        <p><?php echo lang('error.description', 'Er is een onbekend foutmelding opgetreden.');?></p>
        <?php
    } ?>
</main>
</body>
</html>