<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "kontakty" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>ZE-ZA-HRÁTKY | Kontakty</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="kontakty container">
      <?php include_once("header.html") ?>
        <div id="first" class="kontakty">

          <div id="kontakty" class="container container-padding">
            <?php
              //seznam mailů, na které se zpráva odešle
              $to = 'info@zezahratky.cz';
              $from = $_POST['odesilatel_mail'];
              //proměnné naplněné z formáře kontaktujte_nas.html
              $formSubject = $_POST['predmet'];
              $formMessage = $_POST['zprava'];
              $formURL = $_POST['url'];

              $pr = "Dotaz z webu: $predmet";

              //hlavicka
                $hlavicka = "From:$from\n" . "BCC:market@solanska.cz";
                $hlavicka .= "Subject:$pr\n";
                $hlavicka .= "MIME-Version: 1.0\n";
                $hlavicka .= "Content-Transfer-Encoding: QUOTED-PRINTABLE\n"; //způsob kódování
                $hlavicka .= "X-Mailer: PHP\n";
                $hlavicka .= "Content-Type: text/plain; charset=UTF-8\n"; // kódování
              
              //kopie emailu odesílatele
              $subjectCopy = 'Kopie Vaší zprávy z webu zezahratky.cz';
              $messageCopy = 'Vaše zpráva, kterou jste odeslali přes web zezahratky.cz:' . "\n" . "Předmět: " . $formSubject . "\n" . $formMessage;

              //mail na 
              $subjectOrig = "Dotaz z webu: $formSubject";

              if (!empty($formUrl)) {
                  $page1  = '<div class="container"><p>' .$formUrl .
                  $page1 .= '</p><a class="btn btn-success" href="http://www.zezahratky.cz">';
                  $page1 .= ' Zpět na zezahratky.cz</a></p> </div></div>';
                  echo ($page1);
              } else if (empty($from) or empty($formMessage) or empty($formSubject)) { 
                  echo('<div class="container container-padding"><h2 class="page-header">Omlouváme se, někde nastala chyba. Váš e-mail nebyl odeslán. </h2>><p>Zkuste zadat požadavek znovu, zkontrolujte, že jste vyplnili všechny kolonky. V případě, že to stále nepůjde, kontaktujte nám přímo na e-mailu info@zezahratky.cz nebo na telefonním čísle +420 608 229 543. Děkujeme za pochopení.</p><p><a class="btn btn-sucess" href="kontakty.php">Zpět do kontaktů</a></p></div></div>');
              } else {
                  mail($to,   $subjectOrig, $formMessage, $hlavicka);
                  mail($from, $subjectCopy, $messageCopy, $hlavicka);
                  echo('<div class="container container-padding"><h2 class="page-header">Váš mail byl úspěšně odeslán</h2><p> Děkujeme za vaši zprávu či dotaz.</><p> Po přečtení se Vám budeme snažit, co nejdříve odpovědět na mail, který jste zadali ' . '('.$from.').</p><p><a class="btn btn-success" href="kontakty.php">Zpět do kontaktů</a></p></div>');
              }
              
        ?>
        </div>
      </div>
    </div>
        <?php
              include_once("footer.html");
        ?>
  </body>
</html>
