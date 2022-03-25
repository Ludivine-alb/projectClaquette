<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact the Claquette Project</title>
  <meta name="description" content="description" />
  <meta name="author" content="author" />
  <meta name="keywords" content="keywords" />
  <link rel="stylesheet" href="/Assets/contact-faq-style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="/Assets/Images/icons8-sandal-64.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Serif:wght@100|Raleway:wght@300&display=swap">
</head>

<body>
  <!-- Header : included in PHP -->
  <?php include '../Layouts/header.php' ?> 
  <?php include '../Server/data.php' ?>

  <main>
    <h1>Contacter le Claquette Project</h1>

    <form action="contact_treatment.php" method="post">

      <h2>Formulaire</h2>
      <p>Ne vous posez pas la question, posez-la nous !</p>

      <div class="contact-grid-container">
        <label for="first-name">Prénom&nbsp;:</label>
        <input class=text-input type="text" required id="first-name" name="first-name" placeholder="Prénom">
      </div>

      <div class="contact-grid-container">
        <label for="last-name">Nom&nbsp;:</label>
        <input class=text-input type="text" required id="last-name" name="last-name" placeholder="Nom">
      </div>

      <div class="contact-grid-container">
        <label for="mail">Adresse e-mail&nbsp;:</label>
        <input class=text-input type="email" id="mail" name="mail" placeholder="e-mail">
      </div>

      <div class="contact-grid-container">
        <label for="drop-down list">Sujet de votre message&nbsp;:</label>
        <select name="select">
          <optgroup label="Sujet de votre message" id="drop-down list">
            <?php foreach ($formQuestions as $formQuestion) : ?><option value="<?= strtolower($formQuestion); ?>"><?= $formQuestion; ?></option><?php endforeach; ?>
          </optgroup>
        </select>
      </div>

      <div class="contact-grid-container">
        <label for="message">Message&nbsp;:</label>
        <textarea id="message" name="user_message" cols="30" rows="6" placeholder="Votre message ici"></textarea>
      </div>

      <!-- <div>
        <input type="submit" value="Envoyer au Claquette Project">
      </div> -->

      <div class="contact-grid-container">
        <label for="button">Clique sur les claquettes pour envoyer ton message à l'équipe du Claquette Project&nbsp;:</label>
        <input id="button" type="image" alt="Click me!" src="/Assets/Images/rsz_toggle_sandale1.png" width="auto" height="auto" />
      </div>

    </form>
  </main>

  <!-- Footer : included in PHP -->
   <?php include '../Layouts/footer.php' ?> 
</body>

</html>