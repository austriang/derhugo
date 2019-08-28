<!DOCTYPE html>
<html lang="de">

<head>
    <title>Hugos Blog - Kontakt</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylev1_1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
</head>

<body class="body1">
    <!--HEADER Bereich-->
    <header class="header help">
        <div class="Logo" id="logok">
            <div class="logo__image">
                <a href="index.html"><img src="bilder/hugologo.png"></a>
            </div>
            <div class="logo__content">
            </div>
        </div>

        <!-- NAVIGATIONS BEREICH -->

        <div class="nav">
            <a class="nav__button" href="index.html">Startseite</a>
        </div>
    </header>
    <main>
        <?php
        if (isset($_POST["submit"])) {
            mail("info@derhugo.com", "Kontaktformular", 'Name: ' . $_POST["name"] . ' Betreff: ' . $_POST["betreff"] . ' Email: ' . $_POST["email"] . ' Frage: ' . $_POST["frage"] . ' Nachricht: ' . $_POST["message"]);
            ?>
        <h1 style="color: green;">Das Kontaktformular wurde abgesendet!</h1>
        <?php
        }
        ?>
        <form action="kontakt.php" method="post" class="kontakt">
            <input class="auswahl" type="text" name="name" placeholder="Name" required><br>
            <input class="auswahl" type="email" name="email" placeholder="Email" required><br>
            <input class="auswahl" type="text" name="betreff" placeholder="Betreff" required><br>
            <select class="auswahl" name="frage">
                <option value="af">Allgemeine Frage</option>
                <option value="bf">Buissnes Frage</option>
                <option value="vf">Video Frage</option>
            </select><br>
            <textarea class="auswahl" name="message" rows="8" cols="80" placeholder="Ihre Nachricht" required></textarea><br>
            <div class="g-recaptcha" data-sitekey="your_site_key"></div><br>
            <button type="submit" name="submit">Absenden</button>
        </form>
    </main>

    <!-- FOOTER ANFANG -->


    <footer class="footer help">
        <div class="totop">
            <a href=/#logok> Back to Top </a> </div> <div class="footer__haupt">
                <div class="footer__bereich1">
                    <h2>Quicklinks</h2>
                    <ul>
                        <li><a href="index.html">Startseite</a>
                        </li>
                        <li>
                            <a href="esk.html">ESK</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a target="_blanc" href="https://www.youtube.com/channel/UC4HQadf3h5up8JlS0BkCc7Q">Youtube</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__bereich2">
                    <h2>Social Media</h2>
                    <ul>
                        <li>
                            <a target="_blanc" href="https://www.youtube.com/channel/UC4HQadf3h5up8JlS0BkCc7Q"><i class="fab fa-youtube"></i></a>
                        <li>
                            <a target="_blanc" href="https://www.instagram.com/dako_20/?hl=de"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer__bereich3">
                    <h2>Kontakt</h2>
                    <ul>
                        <li>
                            Dave Kock
                        </li>
                        <li>
                            Elserweg 5, 6714 Nüziders
                        </li>
                        <li>
                            Austria
                        </li>
                        <br>
                        <li>
                            <a href="mailto: info@derhugo.com">info(at)derhugo(dot)com</a>
                        </li>

                </div>
                <div class="footer__bereich4">
                    <ul>
                        <li>
                            <a href="kontakt.php">Kontakt</a>
                        </li>
                        <li>
                            <a href="impressum.html">Impressum</a>
                        </li>
                        <li>
                            <a href="datenschutz.html">Datenschutz</a>
                        </li>
                    </ul>
                </div>
        </div>
    </footer>
</body>

</html>