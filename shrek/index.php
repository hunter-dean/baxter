<?php
function getRandomFunnyEffect()
{
    $funnyEffects = [
        "rotate",
        "flip",
        "bounce",
        "shake",
        "spin",
        "jello",
    ];

    // Get a random funny effect
    $randomEffect = $funnyEffects[array_rand($funnyEffects)];

    return $randomEffect;
}

// Get the random funny effect
$funnyEffect = getRandomFunnyEffect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Aesthetic</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Open Sans', sans-serif;
            color: #333;
            text-align: center;
            margin: 20px;
            animation: <?php echo $funnyEffect; ?> 1s infinite; /* Apply the random funny effect */
        }

        header {
            background-color: #3498db;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        h1 {
            color: #ffffff;
        }

        p {
            font-size: 18px;
        }

        iframe {
            border: 5px solid #3498db;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 80%;
            max-width: 640px;
            margin: 20px auto;
            display: block;
        }

        /* Define funny effects using CSS animations */
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes flip {
            from { transform: scaleX(1); }
            to { transform: scaleX(-1); }
        }

        @keyframes bounce {
            from, 20%, 50%, 80%, to { transform: translateY(0); }
            40%, 60% { transform: translateY(-30px); }
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-10px); }
            20%, 40%, 60%, 80% { transform: translateX(10px); }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes jello {
            0%, 11%, 22%, 33%, 44%, 55%, 66%, 77%, 88%, 100% { transform: translateX(0); }
            12%, 34%, 56%, 78% { transform: translateX(-6px) rotate(-6deg); }
            23%, 45%, 67%, 89% { transform: translateX(6px) rotate(6deg); }
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to My Enhanced Website!</h1>
    </header>
    <p>This website is safe and fun to explore.</p>
    <iframe src="https://www.tokyvideo.com/es/embed/206125" frameborder="0" width="640" height="360" scrolling="no"
        allowfullscreen webkitallowfullscreen mozallowfullscreen allowtransparency style="display:block;max-width:100%;margin:0 auto 10px"></iframe>
    <p>Thanks for visiting!</p>
    <button onclick="location.reload();">Refresh for a New Funny Effect</button>
</body>

</html>
