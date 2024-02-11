<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Note</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9e5ea; /* Couleur de fond rose */
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #ff4d6d; /* Rouge rose */
        }
        form {
            margin-top: 20px;
        }
        textarea {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #ff4d6d; /* Rouge rose */
            border-radius: 5px;
            resize: none;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #ff4d6d; /* Rouge rose */
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #ff6384; /* Rouge rose plus foncé au survol */
        }
        .love-note {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Love Note</h1>
        <form action="" method="post">
            <textarea name="expression" rows="5" cols="50" placeholder="Exprimez votre amour ici..."></textarea><br>
            <input type="submit" value="Envoyer">
        </form>
        <!-- Affichage des messages approuvés -->
        <div class="love-note">
            <h2>Messages approuvés :</h2>
            <?php

            if(isset($_POST['expression'])) {
                // Récupération de l'expression soumise par l'utilisateur
               
                if (!preg_match('/[a-zA-Z]/',$_POST['expression']))
                {

                    ob_start();
                    
                    eval('print '.$_POST['expression'].';') ;
                    $resultat = ob_get_clean();
                    
                    if ($resultat == "i love you" )
                    {
                        echo "Check ayiwannoumi1247.txt\n" ;
                    }
                    else {

                        echo $resultat;
                    }                

                    


                
                }
                else
                {
                    echo  "I don't understand letters darling.What do you mean ....";
                }
}
            ?>
        </div>
    </div>
</body>
</html>
