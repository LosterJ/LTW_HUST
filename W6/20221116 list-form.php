<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $submitted = isset($_GET['sent']) && $_GET['sent'] == 1;
    $dishes = ['Casserole', 'Sandwich', 'Pie', 'Grilled Tuna', 'Surprise'];

    if ($submitted) {
        $preferences = $_GET['preferences'];
        
        if (count($preferences) == 0)
            print('<p>Please choose at least one dish.</p>');
        else {
            print('<p>Your prefered dishes:</p>
                <ul>');

            foreach ($preferences as $p)
                print('<li>' . $dishes[$p] . '</li>');

            print('</ul>');
        }
    }

    ?>
    
    <form action="" method="GET">
        <input type="hidden" name="sent" value="1">

        <p>Your favorite dishes:</p>
        <?php
        foreach ($dishes as $i => $d) { ?>
            <p>
                <label>
                    <input type="checkbox" name="preferences[]" value="<?= $i ?>"
                        <?php
                        if ($submitted && in_array($i, $preferences))
                            print(' checked');
                        ?>
                    >
                    <?= $d ?>
                </label>
            </p>
        <?php } ?>

        <button type="submit">Submit</button>
    </form>

</body>
</html>