<!doctype html>
<html lang="de">
  <head>
    <!-- required meta tags & site info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bewerben | GodQ eSports</title>

    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="rainbow, Rainbow Six Siege, GodQ, Esports, Ranked, R6, Siege, Deutsch, Clan, Gaming, zocken, e-sports"/>
    <meta name="description" content="Dein Rainbow Six Siege Clan wo Strats, Teamgeist und Skill vereint sind."/>
    <meta name="author" content="David Leven, nighty@godq.de">
    <meta name="reply-to" content="info@davidleven.de">
    <meta name="robots" content="index,follow" />
    <meta name="theme-color" content="#C7242F">

    <!-- open graph tags -->
    <meta name="og:title" content="Startseite | GodQ"/>
    <meta name="og:type" content="Website"/>
    <meta name="og:url" content="https://godq.de"/>
    <meta name="og:image" content="https://godq.de/cdn/godqBranding.png"/>
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="og:site_name" content="GodQ"/>
    <meta name="og:description" content="Dein Rainbow Six Siege Clan wo Strats, Teamgeist und Skill vereint sind."/>

    <!-- ccs -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- js -->
    <script src="https://kit.fontawesome.com/5b4bd5bc16.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  </head>
  <body id="apply">
    <header class="bg-primary-2 text-white">
      <?php include '../elements/navigation.php' ?>
      <section id="introducingHeader">
        <div class="container mx-auto pt-5">
          <div class="titleSection py-5">
            <h3 class="backTitle blue">Apply Now</h3>
            <h1 class="smallTitle">Werde ein Teil von uns</h1>
          </div>
        </div>
      </section>
    </header>
    <main>
      <section id="applyForm" class="bg-primary text-white">
        <div class="container mx-auto py-5">
          <p><b>So einfach gehts:</b> Einfach das Formular ausfüllen und sicher sein, dass du dich auf unserem Discord befindest. Ein Manager wird sich dann bei dir melden und alles weitere besprechen.</p>
          <p><b>Hinweis:</b> Die mit * markierten Felder sind Pflichtfelder.</p>
          <form class="py-5">
            <div class="form-group">
              <label for="inputEmail4" >Dein Name:*</label>
              <input type="text" required class="defaultForm form-control" id="inputEmail4">
            </div>
            <div class="form-group">
              <label for="inputPassword4" >Dein Discord-Tag: (User#1234)*</label>
              <input type="text" required class="defaultForm form-control" id="inputPassword4">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState" >Bewerben als*</label>
                <select id="inputState" required class="defaultForm form-control">
                  <option selected>...</option>
                  <option>Spieler</option>
                  <option>Backup Spieler</option>
                  <option>Content Creater</option>
                  <option>Developer</option>
                  <option>Manager</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" >Welche Rolle spielst du in Rainbow?*</label>
                <select id="inputState" required class="defaultForm form-control">
                  <option selected>...</option>
                  <option>Fragger</option>
                  <option>Flex</option>
                  <option>Support</option>
                  <option>Hard-Support</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" >IGL Erfahrung?*</label>
                <select id="inputState" required class="defaultForm form-control">
                  <option selected>...</option>
                  <option>Ja</option>
                  <option>Nein</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword4" >R6 Tracker Link zu deinem Account:*</label>
              <input type="text" required class="defaultForm form-control" id="inputPassword4">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputPassword4">Vorherige Clans:</label>
                <input type="text" class="defaultForm form-control" id="inputPassword4">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" >Alter:</label>
                <input type="number" min="14" class="defaultForm form-control" id="inputPassword4">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" >Wohnort (Land):</label>
                <input type="text" class="defaultForm form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword4" >Selbstbeschreibung in ein paar Sätzen:*</label>
                <textarea type="text" required class="defaultForm form-control" id="inputPassword4"></textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4" >Deine Stärken und Schwächen in Rainbow:*</label>
                <textarea type="number" required class="defaultForm form-control" id="inputPassword4"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" required type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Ich akzeptiere die Clanregeln*
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" required type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Ich bin damit einverstanden, dass meine Daten zur Bearbeitung der Bewerbung auf einem Server von GodQ gespeichert werden.*
                </label>
              </div>
            </div>
            <button type="submit" class="btn-red">Abschicken <i class="fas fa-chevron-right ml-3"></i></button>
          </form>
        </div>
      </section>
    </main>
    <?php include '../elements/footer.php' ?>
    <script src="../src/three.min.js"></script>
    <script src="../src/vanta.net.min.js"></script>
    <script>
    VANTA.NET({
      el: "#indexHeader",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      color: 0x151E3C,
      backgroundColor: 0x10172D,
      points: 12.00,
      maxDistance: 23.00,
      spacing: 19.00
    })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
