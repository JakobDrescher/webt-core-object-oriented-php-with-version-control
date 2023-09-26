<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Horror Movie Trailers</title>
</head>

<body>
    <h1>Horror Video Trailers</h1><br>
    <div class="flex-container">
        <div>
            <p>Horrortrailer 1</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yEddsSwweyE?si=-Ge2YCKwHW7jdvZI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <?php
        require 'src/YoutubeVideo.php';

        $array = array(
            //youtube
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

            //echo $arrayvalue;
            //echo $array[$arrayvalue];
        }
        ?>
    </div>
</body>

</html>