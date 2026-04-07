<?php
    $link = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_light_color_272x92dp.png';

    $content = file_get_contents($link);

    $pase = parse_url($link);

    $basename = basename($pase["path"]);

    $file = fopen($basename, 'w+');

    fwrite($file, $content);

    fclose($file);
    ?>

<img src="<?= $basename ?>" alt="google">
