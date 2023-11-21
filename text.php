<?php 

    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vehicula ipsum a arcu cursus vitae congue. Viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis. Tortor posuere ac ut consequat semper viverra nam libero justo. In mollis nunc sed id semper risus in hendrerit. Facilisis mauris sit amet massa vitae tortor. Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum integer. Pretium lectus quam id leo in vitae turpis massa sed. Morbi enim nunc faucibus a pellentesque sit amet porttitor eget. Proin nibh nisl condimentum id venenatis. Diam donec adipiscing tristique risus nec feugiat in. Interdum varius sit amet mattis vulputate. Non curabitur gravida arcu ac tortor dignissim convallis. Sit amet nisl purus in. Dolor morbi non arcu risus quis varius quam quisque id. Nibh venenatis cras sed felis eget velit aliquet sagittis. Eu ultrices vitae auctor eu augue ut.

    Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Aliquam id diam maecenas ultricies mi eget mauris. Pellentesque sit amet porttitor eget. Nulla malesuada pellentesque elit eget. Eget arcu dictum varius duis at consectetur. Euismod nisi porta lorem mollis aliquam ut porttitor leo. Facilisi morbi tempus iaculis urna. Volutpat est velit egestas dui id ornare arcu. Felis bibendum ut tristique et egestas quis ipsum suspendisse. Sagittis purus sit amet volutpat. Risus nec feugiat in fermentum posuere urna nec. Facilisis gravida neque convallis a cras semper auctor. Diam maecenas sed enim ut sem viverra aliquet eget. Quis ipsum suspendisse ultrices gravida dictum fusce. In metus vulputate eu scelerisque felis imperdiet.
    
    Nisi quis eleifend quam adipiscing vitae proin sagittis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Eu ultrices vitae auctor eu. Dis parturient montes nascetur ridiculus mus. Eget mi proin sed libero enim sed faucibus turpis. Sed risus ultricies tristique nulla aliquet. Tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Mus mauris vitae ultricies leo integer malesuada. Enim ut sem viverra aliquet eget sit amet tellus. Vestibulum lorem sed risus ultricies tristique nulla. Hendrerit dolor magna eget est lorem ipsum dolor sit. Ornare arcu dui vivamus arcu felis bibendum ut tristique. Massa vitae tortor condimentum lacinia quis vel eros. Lacus laoreet non curabitur gravida arcu ac tortor. Faucibus vitae aliquet nec ullamcorper sit amet risus. Massa eget egestas purus viverra accumsan in nisl.
    ";

    $word_to_change=$_POST["replace_word"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <div>
        <h3> Testo </h3>
        <p><?php echo $text; ?></p>

        <h3>Lunghezza</h3>
        <p>Lunghezza del testo è: <?php echo strlen($text); ?></p>

        <h3>Il testo con parola sostituita</h3>
        <p><?php echo str_replace($word_to_change, "****", $text); ?></p>

    </div>

</body>
</html>