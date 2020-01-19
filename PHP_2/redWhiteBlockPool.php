<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pool</title>
</head>
<body>
    <h1>first</h1>
    <?php 
    

    for ($red=1; $red <42; $red++) { 
        for ($white=1; $white <42; $white++) { 
            for ($block=1; $block < 42; $block++) { 
                if ($red+$block==28 && $red+$white==25 && $white+$block==31) {
                    echo ("red=$red white=$white block=$block");
                }
            }
        }
    }

    


    ?>
    <br>
    <h1>secondly</h1>
    <?php 
    /**
     * r+w=25 b+w=31 b+r=28
     * 
     * 2(r+w+b)=25+31+28=84
     * 
     * r+w+b=84/2=42
     */
    for ($red=1; $red < 25; $red++) { 
        $white=25-$red;
        $block=28-$red;
        if ($white+$block==31) {
            echo ("red=$red white=$white block=$block");
        }
    }
    ?>
</body>
</html>