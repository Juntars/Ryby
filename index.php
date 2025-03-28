<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="ryby.css">
</head>
<body>
    <div class="banner">
        <h1>Portal dla wędkarzyt</h1>
    </div>
    <div class="main">
        <div class="left">
            <div class="first">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                
                    <?php include 'ryby.php'; ?>
                </ol>
            </div>
            <div class="ryby">
                <h2>Ryby drapieżne naszych wód</h2>
                <table>
                    <tr>
                        <th>L.P.</th>
                        <th>gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                    <?php include 'ryby.php'?>
                </table>
            </div>
        </div>
        <div class="right">
            <img src="ryba1.jpg" alt="Sum"> 
            <br>
            <a href="kwerendy.txt" download>Pobierz Kwerende</a>
        </div>
    </div>
    <div class="footer">
        <p>Stronę wykonał:Juntars</p>
    </div>
</body>
</html>