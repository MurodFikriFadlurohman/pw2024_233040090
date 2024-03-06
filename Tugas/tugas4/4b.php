<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD", "Card Reader", "Modem"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php for($i = 0; $i < 6; $i++) { ?>
            <li><?php echo $hardware[$i]; ?></li> 
        <?php } ?>
    </ol>

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <li><?php echo $hardware[6]; ?></li>
        <li><?php echo $hardware[2]; ?></li>
        <li><?php echo $hardware[7]; ?></li>
        <li><?php echo $hardware[0]; ?></li>
        <li><?php echo $hardware[3]; ?></li>
        <li><?php echo $hardware[1]; ?></li>
        <li><?php echo $hardware[5]; ?></li>
        <li><?php echo $hardware[4]; ?></li>
    </ol>
</body>
</html>