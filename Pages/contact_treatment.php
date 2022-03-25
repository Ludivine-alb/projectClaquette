<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Merci pour votre message</title>
    <meta name="description" content="description" />
    <meta name="author" content="author" />
    <meta name="keywords" content="keywords" />
    <link rel="stylesheet" href="/Assets/contact-faq-style.css" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Serif:wght@100|Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/Assets/Images/icons8-sandal-64.png">
</head>

<body>
  

<main class="footer-relative">
  <!-- Header : included in PHP -->
  <?php include '../Layouts/header.php' ?>

    <h1>Merci pour votre message !</h1>

    <section class="contact-treatment">

    <div>
        <p>
            <?php echo 'Bonjour ' . $_POST['first-name'] . '!'; ?>
        </p>
    </div>

    <div>
        <p>
            <?php echo 'Merci de nous avoir contacté à propos de ce sujet : "' . $_POST['select'] . '". Un membre du Claquette Project te contactera incessamment sous peu par mail à ' . $_POST['mail'] . 'pour répondre à ta demande :' ?>
        </p>
    </div>

    <div>
        <p>
            <?php echo $_POST['user_message'] ?>
        </p>
    </div>

    <div class="contact-grid-container">
        <label for="button">Clique sur les claquettes pour revenir à la page d'accueil du Claquette Project&nbsp;:</label>
        <a href="../index.php" id="button"><input type="image" alt="Click me!" src="/Assets/Images/rsz_toggle_sandale1.png" width="auto" height="auto" /></a>
    </div>

    </section>

    <div class="push"></div>

</main>


        <!-- Footer : included in PHP -->
        <?php include '../Layouts/footer.php' ?>

</body>

<?php
$data = array_map('trim', $_POST);
?>

</html>