<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="“Crop diseases” are a significant threat to food security and food supply chain, but due to the lack of system and infrastructure it was difficult to identify. Since the world is expanding rapidly, so, resolve these kinds of threats we have used smartphones along with machine learning algorithms to identify the damaged crop and suggested the medi kits."
    />
    <meta
      name="keywords"
      content="online disease detection system, plant disease detection, disease detection by machine learning, machine learning software bangladesh, crops disease detection  disease detection in fruits, disease detection system bangladesh,.auto medicine suggestions"
    />
    <meta name="author" content="Medina Tech" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>travel Agency</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png" />

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-G6DQKNQH9R"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "G-G6DQKNQH9R");
    </script>
  </head>

  <body class="homepage-2">
    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
      <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
      <!-- ***** Header Start ***** -->
      {{View::make('header')}}
      @yield('content')
      {{View::make('footer')}}
      

      

      

    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>

    <!-- Language Related JS -->
    <script src="assets/js/tinyi18n.js"></script>
    <script>
      tinyi18n.loadTranslations("translation.json");
    </script>

    <script>
      function englishMode() {
        tinyi18n.setLang("en");

        document.getElementById("tt-en").classList.remove("tt-none");
        document.getElementById("tt-bn").classList.add("tt-none");
      }
    </script>
    <script>
      function banglaMode() {
        tinyi18n.setLang("bd");

        document.getElementById("tt-bn").classList.remove("tt-none");
        document.getElementById("tt-en").classList.add("tt-none");
      }
    </script>
  </body>
  

</html>
