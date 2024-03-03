<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censure</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container-sm m-auto">
        <?php
        $paragraph = $_POST['paragraph'];
        // var_dump($paragraph);
        $word = $_POST['word'];
        // var_dump($word);
        $censoredParagraph = str_ireplace($word, '***', $paragraph);
        // var_dump($censoredParagraph);
        ?>
        <div class="text-center m-5">
            <h2 class="text-success">Your inserted paragraph:</h2>
            <?= $paragraph ?>
            <h6 class="mt-2">Length of your paragraph</h6>
            <?= strlen($paragraph) ?>
        </div>
        <div class="text-center">
            <h2 class="text-danger">Your censored paragraph:</h2>
            <?= $censoredParagraph ?>
            <h6 class="mt-2">Length of censored paragraph</h6>
            <?= strlen($censoredParagraph) ?>
        </div>
    </div>
</body>

</html>