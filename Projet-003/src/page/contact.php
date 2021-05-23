<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/83f4286022.js " crossorigin="anonymous "></script>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ">
                <a class="navbar-brand" href="../../index.html"><i class="fas fa-guitar"></i>
                    Guitare</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="../../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./produits.html">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./photos.html">Photos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./nous_trouver.html">Nous trouver</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <?php
    function getArrayValue(array $array, string $value)
    {
    if (isset($array[$value]))
        return htmlspecialchars ($array[$value]) ;
    return "";
    }
    //check civilité
    $civilite["monsieur"] = getArrayValue($_POST, "civilite") == "monsieur"? "checked": "";
    $civilite["madame"] =getArrayValue($_POST, "civilite")== "madame"? "checked": "";
    //check nom prénom
    $nom = getArrayValue($_POST, "Nom");
    $prenom = getArrayValue($_POST, "Prenom");
    //check mail
    $mail = getArrayValue($_POST, "Mail");
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    //check question
    $question["question"]= getArrayValue($_POST, "question")=="question"? "selected": "";
    $question["entretien"]= getArrayValue($_POST, "question")=="entretien"? "selected": "";
    $question["service"]= getArrayValue($_POST, "question")=="service"? "selected": "";
    $question["autre"]= getArrayValue($_POST, "question")=="autre"? "selected": "";
    //check message 
    $message = getArrayValue($_POST, "message");
    ?>


    <section class="formulaire container min-vh-100">
        <h2 class=" mt-5 mb-4">Nous joindre</h2>
        <div>
            <form action="contact.php" method="post">
                <input class="form-check-input m-3" type="radio" name="civilite" id="civilite" value="monsieur" <?php echo $civilite["monsieur"];?>>
                <label class="form-check-label mt-2" for="monsieur">
                Monsieur
                </label>
                <input class="form-check-input m-3" type="radio" name="civilite" id="civilite" value="madame" <?php echo $civilite["madame"]; ?>>
                <label class="form-check-label mt-2" for="madame">
                Madame
                </label>
                <input class="form-control m-3" id="Nom" type="text" placeholder="Nom" aria-label="Nom" value="<?php echo $nom ?>" name="Nom">
                <input class="form-control m-3" id="Prenom" type="text" placeholder="Prenom" aria-label="Prenom" value="<?php echo $prenom ?>" name="Prenom">
                <input class="form-control m-3" id="Mail" type="text" placeholder="Mail" aria-label="Mail" name="Mail" value="<?php echo $mail ?>">
                <select class="form-select m-3" aria-label="Choix de demande" name="question">
                    <option value="question" <?php echo $question["question"]; ?>>Question</option>
                    <option value="entretien" <?php echo $question["entretien"]; ?>>Entretien</option>
                    <option value="service" <?php echo $question["service"]; ?>>Service après-vente</option>
                    <option value="autre" <?php echo $question["autre"]; ?>>Autre</option>
                    <textarea class="form-control m-3" id="message" rows="3" placeholder="Votre message" name="message"><?php echo $message ?></textarea>
                  </select>
                <div class="col-12 m-3">
                    <button class="btn btn-primary" type="submit">Envoyer votre demande</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="container-fluid bg-dark ">
        <div class=" row justify-content-center p-3">
            &copy;Guitare magasin 2021
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>