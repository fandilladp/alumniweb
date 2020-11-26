<?php
helper('auth');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Teknik Elektro</title>
</head>

<body>
    <?php if (user()->status != 'tamu') : ?>
        <embed width="100%" height=1000px src="<?= base_url('cv/' . $cv[0]); ?>" ?>
    <?php else : ?>
        <h1>Access Denied</h1>
    <?php endif ?>
</body>

</html>