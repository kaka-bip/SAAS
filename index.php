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
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/img/Logo.png" type="image/x-icon" />
    <title>SIMPLI</title>
  </head>
  <body>
    <header>
      <nav class="nav-bar">
        <div class="logo">
          <img src="assets/img/Logo.png" alt="logo" />
          <span class="nome-logo">Simpli</span>
        </div>
        <ul class="nav-links">
          <li><a href="../index.html">Home</a></li>
          <li><a href="assets/pages/planos.php">Planos</a></li>
          <li><a href="assets/pages/dashboard.php">Painel</a></li>
        </ul>

        <div class="btn-login">
          <button class="btn-global">
            <a href="assets/pages/login.php">Entrar</a>
          </button>
        </div>
      </nav>
    </header>

    <section id="home">
      <div class="content">
        <h1>Controle seu dinheiro sem complicações</h1>
        <p>
          <span>simpli</span> é um sistema de controle de finanças que permite
          você controlar seu dinheiro de forma simples e eficiente.
        </p>

        <button class="btn-global">
          <a href="assets/pages/login.php">Comece agora</a>
        </button>
      </div>

      <div class="img-money">
        <img src="assets/img/money-jar-22.png" alt="money" />
      </div>
    </section>

    <section id="sobre">
      <div class="cards">
        <div class="card">
          <div class="icon">
            <i class="fa-sharp fa-solid fa-check"></i>
          </div>
          <p>Simples</p>
          <p>Interface limpa e fácil de usar, projetada para o dia a dia.</p>
        </div>
        <div class="card">
          <div class="icon">
            <i class="fa-regular fa-clock" style="color: rgb(99, 230, 190)"></i>
          </div>
          <p>Rápido</p>
          <p>Registre seus gastos em segundos, sem perder tempo.</p>
        </div>
        <div class="card">
          <div class="icon">
            <i
              class="fa-solid fa-file-circle-xmark"
              style="color: rgb(99, 230, 190)"
            ></i>
          </div>
          <p>Sem planinhas</p>
          <p>
            Esqueça as planilhas complexas. Tudo que você precisa em um só
            lugar.
          </p>
        </div>
      </div>
    </section>

    <section id="planos">
      <div class="titulo">  
        <h1>Escolha o plano ideal para você</h1>
        <p>Comece grátis e expanda conforme sua necessidade</p>
      </div>

      <div class="planos-cards">
        <div class="planos-card">
          <p>Plus</p>
          <span class="preco">R$0<span class="mes"></span></span>
          <div class="recursos">
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>Registrar gastos</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>Categorias básicas</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>Histórico de 7 dias</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>2 créditos de gastos por dia</span
            >
          </div>
          <button class="btn-planos">Assinar agora</button>
        </div>

        <div class="planos-card" style="background-color: #a7f8c354; border: 2px solid #166534;">

            <span class="popular"></span>

          <p>Gratuito</p>
          <span class="preco">R$9,90<span class="mes"></span></span>
          <div class="recursos">
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i> Tudo do Free</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i> Relatórios avançados</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>Metas financeiras</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i> Suporte rápido</span
            >
          </div>
          <button class="btn-planos">Assinar agora</button>
        </div>

        <div class="planos-card">
          <p>Pro</p>
          <span class="preco">R$19,90<span class="mes"></span></span>
          <div class="recursos">
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>Registrar gastos</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>Categorias básicas</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>1 Usuário</span
            >
            <span class="span-recurso">
              <i class="fa-sharp fa-solid fa-check"></i>Relatórios simples</span
            >
          </div>
          <button class="btn-planos">Assinar agora</button>
        </div>
      </div>
    </section>
  </body>
</html>
