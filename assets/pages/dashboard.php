<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon" />
    <title>Painel — Simpli</title>
  </head>
  <body class="dashboard-page">
    <header>
      <nav class="nav-bar">
        <div class="logo">
          <a href="../../index.php">
            <img src="../img/Logo.png" alt="logo" />
            <span class="nome-logo">Simpli</span>
          </a>
        </div>
        <ul class="nav-links">
          <li><a href="../../index.php">Home</a></li>
          <li><a href="dashboard.php">Painel</a></li>
        </ul>

        <div class="btn-login">
          <button class="btn-global" type="button">
            <a href="login.php">Sair</a>
          </button>
        </div>
      </nav>
    </header>

    <main>
      <section id="dashboard">
        <h1>Dashboard</h1>

        <input type="number" id="valor" placeholder="Valor" />

        <select id="categoria">
          <option>Alimentação</option>
          <option>Transporte</option>
          <option>Lazer</option>
        </select>

        <button onclick="adicionarGasto()">Adicionar</button>

        <h2 id="total">R$ 0.00</h2>

        <div id="lista"></div>
      </section>
    </main>

    <footer>
      <div class="footer-copy">
        &copy; 2026 SIMPLI. Todos os direitos reservados.
      </div>
    </footer>

    <script src="../js/gastos.js"></script>
  </body>
</html>
