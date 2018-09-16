<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> DWA - Project 1 </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <h1 class="name">Satya</h1>
            <div class="introContainer">
                <img class="image" src="./images/satya.png" alt="satya">    
                    <article>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fringilla dui non vulputate convallis. 
                        Morbi in faucibus tortor, in aliquet sem. Phasellus at faucibus risus. Aliquam pharetra, est ultrices 
                        posuere commodo, lectus nunc egestas ante, eget interdum lorem lorem nec nisl. Mauris efficitur luctus 
                        dolor at efficitur. Suspendisse potenti. Nullam vehicula ut lectus quis laoreet. Nam eu ipsum ac nunc 
                        varius gravida a vel mauris. Etiam pretium ut nisi eu mollis. Suspendisse ullamcorper cursus facilisis. 
                        Integer faucibus felis sed ex vehicula, sed tempus nibh accumsan. Integer molestie arcu sed sapien dapibus 
                        suscipit et eget turpis.
                    </article>
            </div>
            <?php
                $quotes = [
                    1 => ["Don't cry because it's over, smile because it happened.", "Dr. Seuss"],
                    2 => ["Be yourself; everyone else is already taken.", "Oscar Wilde"],
                    3 => ["Be the change that you wish to see in the world.", "Mahatma Gandhi"],
                    4 => ["Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.", "Albert Einstein"],
                    5 => ["You only live once, but if you do it right, once is enough.", "Mae West"]
                ];
                echo "<blockquote>";
                $randomIndex = array_rand($quotes);
                echo "<div>" . $quotes[$randomIndex][0] . "</div>";
                echo "<div class='author'>" . $quotes[$randomIndex][1] . "</div>"; 
                echo "</blockquote>";
            ?>
        </div>
    </body>
</html>