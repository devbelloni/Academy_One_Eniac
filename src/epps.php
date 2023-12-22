<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mesas - Academy One</title>

  <!-- css -->
  <link rel="stylesheet" href="../template/css/style.css">
</head>
<body>
  <!-- hero section -->
  <header class="epps_heroSection">
    <!-- navbar component -->
    <?php include("../template/components/navbar.html") ?>
  </header>
  <main class="epps_mainContent">
    <h1 class="epps_mainContent_mainTitle">Mesas</h1>
    <section class="epps_mainContent_eppsDropdownsSection">
      <div class="epps_mainContent_eppsDropdownManagement bg-green-second">
        <div class="epps_mainContent_eppsDropdownManagementHeader">
          <h1 class="epps_mainContent_eppsDropdownManagementHeaderTitle">Gestão</h1>
          <img class="epps_mainContent_eppsDropdownManagementHeaderArrowControl" src="../img/Vetores/seta-baixo.png" alt="">
        </div>
        <div class="epps_mainContent_eppsDropdownManagementLinksBox">
          <a class="epps_mainContent_eppsDropdownManagementLink bg-green-third" href="./pmo.php">
            <img src="../img/Logo Mesas/logo-horizontal-pmo.png" alt="Logo Epp PMO">
          </a>
          <a class="epps_mainContent_eppsDropdownManagementLink bg-green-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-qualidade.png" alt="Logo Epp Qualidade">
          </a>
          <a class="epps_mainContent_eppsDropdownManagementLink bg-green-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-get.png" alt="Logo Epp GET">
          </a>
        </div>
      </div>
      <div class="epps_mainContent_eppsDropdownADM bg-orange-second">
        <div class="epps_mainContent_eppsDropdownADMHeader">
          <h1 class="epps_mainContent_eppsDropdownADMHeaderTitle">ADM</h1>
          <img class="epps_mainContent_eppsDropdownADMHeaderArrowControl" src="../img/Vetores/seta-baixo.png" alt="">
        </div>
        <div class="epps_mainContent_eppsDropdownADMLinksBox">
          <a class="epps_mainContent_eppsDropdownADMLink bg-orange-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-esg.png" alt="Logo Epp ESG">
          </a>
          <a class="epps_mainContent_eppsDropdownADMLink bg-orange-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-bpo.png" alt="Logo Epp BPO">
          </a>
          <a class="epps_mainContent_eppsDropdownADMLink bg-orange-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-rh.png" alt="Logo Epp RH">
          </a>
        </div>
      </div>
      <div class="epps_mainContent_eppsDropdownIT bg-purple-second">
        <div class="epps_mainContent_eppsDropdownITHeader">
          <h1 class="epps_mainContent_eppsDropdownITHeaderTitle">TI</h1>
          <img class="epps_mainContent_eppsDropdownITHeaderArrowControl" src="../img/Vetores/seta-baixo.png" alt="">
        </div>
        <div class="epps_mainContent_eppsDropdownITLinksBox">
          <a class="epps_mainContent_eppsDropdownITLink bg-purple-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-low-code.png" alt="Logo Epp Low Code">
          </a>
          <a class="epps_mainContent_eppsDropdownITLink bg-purple-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-cloud.png" alt="Logo Epp Cloud">
          </a>
        </div>
      </div>
      <div class="epps_mainContent_eppsDropdownMarket bg-blue-second">
        <div class="epps_mainContent_eppsDropdownITHeader">
          <h1 class="epps_mainContent_eppsDropdownITHeaderTitle">Mercado</h1>
          <img class="epps_mainContent_eppsDropdownITHeaderArrowControl" src="../img/Vetores/seta-baixo.png" alt="">
        </div>
        <div class="epps_mainContent_eppsDropdownITLinksBox">
          <a class="epps_mainContent_eppsDropdownITLink bg-blue-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-marketing.png" alt="Logo Epp Marketing">
          </a>
          <a class="epps_mainContent_eppsDropdownITLink bg-blue-third" href="">
            <img src="../img/Logo Mesas/logo-horizontal-sdr.png" alt="Logo Epp SDR">
          </a>
        </div>
      </div>
    </section>
  </main>
  <!-- footer component -->
  <?php include("../template/components/footer.html") ?>
</body>
</html>