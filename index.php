<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Horror Movie Trailers</title>
</head>

<body>
    <h1>Horror Video Trailers</h1><br>
    <div class="flex-container">
        <?php
        require 'src/YoutubeVideo.php';
        require 'src/VimeoVideo.php';

        //Print Youtube

        $array = array(
            "A Haunting In Venice" => "yEddsSwweyE",
            "SAW X" => "t3PzUo4P21c",
            "THE NUN II" => "QF-oyCwaArU",
            "Smile" => "BcDK7lkzzsU",
            "M3GAN" => "BRb4U99OU80"
        );

        foreach (array_keys($array) as $arrayvalue) {
            $currentElement = new YoutubeVideo($array[$arrayvalue], $arrayvalue);
            echo "<div>\n";
            echo "<p>" . $currentElement->getName() . "</p>";
            echo $currentElement->getHTML() . "\n";
            echo "</div>\n";
        }

        //Print Vimeo
        
        $array2 = array(
            "The Oregionian" => "180017984",
            "Exhibit A" => "81048340",
            "Big Ass Spider!" => "102575049",
            "SICKHOUSE " => "168071438",
            "In A Glass Cage" => "141281970"
        );
        foreach (array_keys($array2) as $arrayvalue) {
            $currentElement = new VimeoVideo($array2[$arrayvalue], $arrayvalue);
            echo "<div>\n";
            echo "<p>" . $currentElement->getName() . "</p>";
            echo $currentElement->getHTML() . "\n";
            echo "</div>\n";
        }

        //Printing both arrays again
        
        foreach (array_keys($array) as $arrayvalue) {
            $currentElement = new YoutubeVideo($array[$arrayvalue], $arrayvalue);
            echo "<div>\n";
            echo "<p>" . $currentElement->getName() . "</p>";
            echo $currentElement->getHTML() . "\n";
            echo "</div>\n";
        }
        foreach (array_keys($array2) as $arrayvalue) {
            $currentElement = new VimeoVideo($array2[$arrayvalue], $arrayvalue);
            echo "<div>\n";
            echo "<p>" . $currentElement->getName() . "</p>";
            echo $currentElement->getHTML() . "\n";
            echo "</div>\n";
        }
        ?>
    </div>
</body>

</html>