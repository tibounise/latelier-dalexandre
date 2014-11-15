<?php

function envoyerMail($mail,$message) {

}

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>L'atelier d'Alexandre - Contact</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/atelier-alexandre.css">
</head>
<body>
  <div class="container-fluid main-container">
    <div class="row main-row">
      <div class="col-sm-2 menu">
        <h1 class="title-logo">L'Atelier d'Alexandre</h1>
        <ul>
          <a href="index.html"><li>Accueil</li></a>
          <a href="plek.html"><li>La machine PLEK</li></a>
          <a href="realisations.html"><li>Nos réalisations</li></a>
          <a href="atelier.html"><li>Nous trouver</li></a>
          <a href="contact.html"><li>Contact</li></a>
        </ul>
      </div>
      <div class="col-sm-10 col-sm-offset-2 content">
        <h1>Nous contacter</h1>

        <hr>

        <?php
          if (empty($_POST['mail']) OR empty($_POST['message'])) {
        ?>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="row">
              <div class="col-md-6">
                <p>
                  <strong>L'atelier d'Alexandre</strong><br>
                  29 Boulevard Dubreuil<br>
                  91400, Orsay, FRANCE
                </p>
              </div>
              <div class="col-md-6">
                <p class="text-right">
                  Mail : <a href="">atelieralexandre@wanadoo.fr</a><br>
                  <abbr title="Numéro de téléphone">Tel:</abbr> <strong>01 69 28 12 23</strong>
                </p>
              </div>
            </div>

            <hr>

            <h2>Formulaire de contact</h2>

            <br>

            <div class="alert alert-danger text-center" role="alert">
              Erreur : certains champs du formulaire sont vides.
            </div>

            <form action="contact.php" class="form-horizontal" role="form" method="POST">
              <div class="form-group">
                <label class="col-sm-2 control-label">Mail :</label>
                <div class="col-sm-10">
                  <input type="mail" name="mail" class="form-control" value="<?php if (!empty($_POST['mail'])) { echo htmlspecialchars($_POST['mail']); } ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Message :</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="10" name="message">
                    <?php if (!empty($_POST['message'])) { echo htmlspecialchars($_POST['message']); } ?>
                  </textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <button class="btn btn-danger">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <?php
          }
        ?>
    </div>
  </div>
</body>
</html>