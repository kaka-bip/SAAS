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
        <div class="dashboard-head">
          <h1>Olá, bem-vindo ao seu painel</h1>
          <p>
            Acompanhe <span>simpli</span> — resumo financeiro do mês e últimos
            lançamentos.
          </p>
        </div>

        <div class="dashboard-stats">
          <article class="stat-card">
            <div class="stat-icon">
              <i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i>
            </div>
            <span class="stat-label">Receitas (mês)</span>
            <span class="stat-value positive">R$0,00</span>
          </article>
          <article class="stat-card">
            <div class="stat-icon">
              <i class="fa-solid fa-arrow-trend-down" aria-hidden="true"></i>
            </div>
            <span class="stat-label">Despesas (mês)</span>
            <span class="stat-value negative">R$0,00</span>
          </article>
          <article class="stat-card">
            <div class="stat-icon">
              <i class="fa-solid fa-wallet" aria-hidden="true"></i>
            </div>
            <span class="stat-label">Saldo estimado</span>
            <span class="stat-value positive">R$0,00</span>
          </article>
        </div>

        <div class="dashboard-grid">
          <div class="panel">
            <h2>Últimos lançamentos</h2>
            <div class="table-wrap">
              <table class="lancamentos-table">
                <thead>
                  <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Valor</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
            <button class="btn-global btn-dashboard" type="button">
              <a href="#">Registrar novo gasto</a>
            </button>
          </div>

          <aside class="panel">
            <h2>Gastos por categoria</h2>
            <ul class="categorias-list"></ul>
          </aside>
        </div>
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
