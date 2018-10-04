<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Wanneer Krijg Ik Stufie</title>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
        <body>
            <div id="inhoud">
                <div id="whitespace">
                </div>
                <div id="code">
                <?php
                $date = date('m-d');
                echo '<p id="code1">Tis nu ' . $date . "</p>";
                ?>
                <?php
                $date = date('d');
                if ($date == 24)
                {
                    echo '<p id="code2">Jonkies tis StufiDag</p>';
                }
                else
                {
                    if ($date > 24 && $date < 31)
                    {
                        $subt = 31 - $date;
                        echo "test";
                    }
                    else
                    {
                        $subt = 24 - $date;
                        echo '<p id="code2">Tis nog ' . $subt . " dagen tot Stufi!</p>";
                    }
                }   
                ?>
                </div>
            </div>
        </body>
</html>