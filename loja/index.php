<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ORION TECH PRO</title>
  <style>
    :root{
      --bg:#F6FFF7;            /* fundo base (sutil) */
      --text:#0b2a1f;          /* texto escuro sobre verde claro */
      --accent1:#07A55C;       /* verde principal (mais escuro) */
      --accent2:#37D399;       /* verde claro/acento */
      --muted:#4b5563;
      --card:#ffffff;
      --whatsapp:#25D366;
      --instagram-gradient: linear-gradient(45deg,#F58529,#DD2A7B,#8134AF);
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family:Inter,Arial,Helvetica,sans-serif;
      background: 
        /* camada sutil de textura via gradientes (opção sem imagem) */
        linear-gradient(180deg, rgba(7,165,92,0.06) 0%, rgba(55,211,153,0.03) 100%),
        radial-gradient(1200px 600px at 10% 10%, rgba(7,165,92,0.04), transparent 10%),
        radial-gradient(900px 500px at 90% 90%, rgba(55,211,153,0.03), transparent 10%),
        var(--bg);
      color:var(--text);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      -webkit-text-size-adjust:100%;
      -ms-text-size-adjust:100%;
    }

    /* Header */
    header{
      display:flex;
      align-items:center;
      gap:20px;
      padding:22px 28px;
      /* header com gradiente verde */
      background: linear-gradient(90deg, var(--accent1), var(--accent2));
      color:#fff;
      border-bottom-left-radius:18px;
      border-bottom-right-radius:18px;
      position:relative;
    }
    .logo{width:120px;height:120px;border-radius:14px;overflow:hidden;flex:0 0 120px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center}
    .logo img{width:100%;height:100%;object-fit:cover;display:block}
    .brand h1{font-size:28px;margin:0;letter-spacing:0.6px}
    .brand h1 span{font-weight:700;color:rgba(0,0,0,0.08)}
    .slogan{margin-top:6px;color:rgba(255,255,255,0.92);font-style:italic}
    .phone-number{
      position:absolute;
      right:28px;
      top:50%;
      transform:translateY(-50%);
      font-size:18px;
      font-weight:bold;
      background:rgba(255,255,255,0.12);
      padding:8px 16px;
      border-radius:8px;
      color:#fff;
      box-shadow:0 4px 12px rgba(2,6,23,0.12);
    }

    /* Menu de Navegação */
    .nav-menu{
      background:rgba(255,255,255,0.85);
      padding:12px 0;
      border-bottom:1px solid rgba(2,6,23,0.04);
      position:sticky;
      top:0;
      z-index:100;
      backdrop-filter: blur(4px);
    }
    .nav-container{max-width:1100px;margin:0 auto;padding:0 20px}
    .nav-links{display:flex;gap:30px;justify-content:center;flex-wrap:wrap}
    .nav-links a{
      color:var(--text);
      text-decoration:none;
      font-weight:500;
      padding:8px 0;
      transition:color 0.22s, transform 0.15s;
      font-size:15px;
    }
    .nav-links a:hover{color:var(--accent1); transform:translateY(-2px);}

    main{max-width:1100px;margin:22px auto;padding:20px}

    /* Serviços - grid 3 por linha */
    .servicos-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .servico-card{
      background:var(--card);
      border-radius:12px;
      padding:14px;
      box-shadow:0 6px 18px rgba(15,23,42,0.06);
      text-align:center;
      transition:transform .18s ease, box-shadow .18s;
    }
    .servico-card:hover{transform:translateY(-6px);box-shadow:0 12px 28px rgba(7,165,92,0.09)}
    .servico-card img{width:100%;height:160px;object-fit:cover;border-radius:8px}
    .servico-card h3{margin:12px 0 6px 0;font-size:18px}
    .servico-card p{color:var(--muted);font-size:14px;margin:0}

    @media (max-width:980px){
      .servicos-grid{grid-template-columns:repeat(2,1fr)}
    }
    @media (max-width:640px){
      .servicos-grid{grid-template-columns:1fr}
      header{flex-direction:column;align-items:flex-start}
      .logo{width:88px;height:88px}
      .phone-number{position:static;transform:none;margin-top:12px;align-self:flex-end}
      .nav-links{gap:15px;font-size:14px}
    }

    /* Produtos e acessórios (cards) */
    .produtos{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;margin-top:26px}
    .produto{background:#fff;border-radius:12px;padding:14px;box-shadow:0 6px 18px rgba(15,23,42,0.04);text-align:center}
    .produto img{width:120px;height:120px;object-fit:contain}
    .produto h4{color:var(--accent1);margin:10px 0 6px 0}
    .produto p{color:var(--muted);font-size:14px;margin:0}
    .badge{display:inline-block;margin-top:8px;padding:8px 10px;border-radius:10px;background:linear-gradient(90deg,var(--accent1),var(--accent2));color:#fff}

    /* Painel de celulares à venda */
    .panel{background:#fff;border-radius:12px;padding:14px;margin-top:22px;box-shadow:0 6px 18px rgba(2,6,23,0.04)}
    .selectors{display:flex;gap:10px;flex-wrap:wrap;align-items:center}
    select,input{padding:10px;border-radius:8px;border:1px solid rgba(15,23,42,0.06);background:transparent}
    .okbtn{padding:10px 14px;border-radius:8px;border:none;cursor:pointer;background:linear-gradient(90deg,var(--accent1),var(--accent2));color:#fff}
    .result{display:flex;gap:12px;align-items:center;margin-top:12px}
    .result img{width:120px;height:120px;object-fit:contain;border-radius:8px;background:#f3f4f6;padding:6px}
    .info small{color:var(--muted);display:block;margin-top:6px}

    /* Map & socials */
    .maplink{
      display:inline-block;
      margin-top:12px;
      padding:12px 16px;
      border-radius:10px;
      background:#0b1220;
      color:#fff;
      text-decoration:none;
      font-size:14px;
    }

    .socials{
      display:flex;
      gap:12px;
      margin-top:10px;
      flex-wrap:wrap;
    }

    .socials a{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      gap:8px;
      padding:12px 16px;
      border-radius:8px;
      background:#fff;
      border:1px solid rgba(15,23,42,0.04);
      text-decoration:none;
      color:var(--text);
      flex:1;
      min-width:120px;
      font-size:14px;
      text-align:center;
    }

    .socials a#whatsappLink {
      background-color: var(--whatsapp);
      color: #fff;
      border: none;
    }

    .socials a#instagramLink {
      background: var(--instagram-gradient);
      color: #fff;
      border: none;
    }

    /* Admin quick links top */
    .admin-quick {
      max-width:1100px;
      margin: 18px auto;
      padding: 12px 20px;
      display:flex;
      gap:12px;
      flex-wrap:wrap;
      align-items:center;
      justify-content:center;
    }
    .admin-quick a {
      background:#fff;
      padding:8px 12px;
      border-radius:8px;
      border:1px solid rgba(2,6,23,0.05);
      text-decoration:none;
      color:var(--text);
      font-weight:600;
      box-shadow:0 6px 18px rgba(2,6,23,0.03);
    }

    /* CRUD toggle block (mostra quando escolher modelo) */
    #crudLinks {
      display:none;
      margin-top:16px;
      background:#fff;
      padding:14px;
      border-radius:10px;
      box-shadow:0 8px 24px rgba(2,6,23,0.04);
    }
    #crudLinks a {
      display:inline-block;
      margin:6px 10px 6px 0;
      padding:8px 12px;
      background:linear-gradient(90deg,var(--accent1),var(--accent2));
      color:#fff;
      border-radius:8px;
      text-decoration:none;
      font-weight:600;
    }

    /* Melhorar responsividade para telas pequenas */
    @media (max-width:480px){
      .socials{flex-direction:column;}
      .socials a{min-width:auto;width:100%}
      .admin-quick{padding:10px;}
    }

    footer{max-width:1100px;margin:30px auto 70px;padding:20px;text-align:center;color:var(--muted)}

    /* Small helpers */
    .muted{color:var(--muted)}

    /* Grid de celulares */
    .celulares-grid{display:grid;grid-template-columns:repeat(auto-fit, minmax(250px, 1fr));gap:15px;margin-top:15px}

    /* pequenos ajustes de acessibilidade */
    a:focus, button:focus, select:focus { outline:3px solid rgba(7,165,92,0.18); outline-offset:2px; }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <!-- mantive o nome do arquivo da sua logo (você disse que já substituiu a imagem na pasta) -->
      <img src="orion.jpg" alt="ORION TECH PRO - logo">
    </div>
    <div class="brand">
      <h1>ORION TECH <span>PRO</span></h1>
      <div class="slogan">Assistência técnica e acessórios — rapidez, confiança e peças originais.</div>
    </div>
    <div class="phone-number">📞 (61) 98173-5190</div>
  </header>

  <!-- Menu de Navegação Rápida -->
  <nav class="nav-menu" aria-label="Menu principal">
    <div class="nav-container">
      <div class="nav-links">
        <a href="#nossos-servicos">Nossos Serviços</a>
        <a href="#produtos">Produtos</a>
        <a href="#celulares-venda">Celulares à Venda</a>
        <a href="#como-chegar">Como Chegar</a>
        <a href="#redes-sociais">Redes Sociais</a>
      </div>
    </div>
  </nav>

  <!-- Admin quick links (sempre visível para facilitar testes) -->
  <div class="admin-quick" aria-hidden="false">
    <a href="cadastrar_cliente.php">Cadastrar Cliente</a>
    <a href="listar_clientes.php">Listar Clientes</a>

    <a href="cadastrar_vendedor.php">Cadastrar Vendedor</a>
    <a href="listar_vendedores.php">Listar Vendedores</a>

    <a href="cadastrar_produto.php">Cadastrar Produto</a>
    <a href="listar_produtos.php">Listar Produtos</a>
  </div>

  <main>
    <!-- Serviços (3 por linha) -->
    <section id="nossos-servicos">
      <h2 style="margin-bottom:12px">Nossos principais serviços</h2>
      <div class="servicos-grid">
        <div class="servico-card">
          <img src="conserto.jpg" alt="Troca de telas">
          <h3>Troca de telas</h3>
          <p>Substituição de displays com peças testadas e calibração.</p>
        </div>

        <div class="servico-card">
          <img src="tampaquebrada.jpg" alt="Tampas traseiras">
          <h3>Substituição de tampas traseiras</h3>
          <p>Tampas originais e compatíveis com acabamento polido.</p>
        </div>

        <div class="servico-card">
          <img src="bateria.jpg" alt="Troca de bateria">
          <h3>Troca de baterias</h3>
          <p>Baterias novas com teste completo de carga e garantia.</p>
        </div>

        <div class="servico-card">
          <img src="montagem.jpg" alt="Montagem de PCs">
          <h3>Montagem e upgrades de PC</h3>
          <p>Montagem sob medida, upgrades de SSD e memória.</p>
        </div>

        <div class="servico-card">
          <img src="concertonot.jpg" alt="Conserto de notebooks">
          <h3>Conserto de notebooks</h3>
          <p>Diagnóstico completo e substituição de peças.</p>
        </div>

        <div class="servico-card">
          <img src="melhoria.jpg" alt="Melhorias no PC">
          <h3>Otimização e limpeza</h3>
          <p>Melhorias de desempenho, limpeza física e software.</p>
        </div>
      </div>
    </section>

    <!-- Produtos / acessórios -->
    <section id="produtos" style="margin-top:22px">
      <h2>Produtos & Acessórios</h2>
      <div class="produtos">
        <div class="produto">
          <img src="acessorios/capinha.jpg" alt="Capinha premium">
          <h4>Capinha Premium</h4>
          <p>Proteção e estilo — disponível para vários modelos.</p>
          <div class="badge">Temos capinhas</div>
        </div>

        <div class="produto">
          <img src="acessorios/pelicula.jpg" alt="Películas">
          <h4>Películas (hidrogel, privacidade, 3D)</h4>
          <p>Películas pré-prontas para instalação imediata.</p>
          <div class="badge">Hidrogel • Privacidade • 3D</div>
        </div>

        <div class="produto">
          <img src="acessorios/fone.jpg" alt="Fone bluetooth">
          <h4>Fones Bluetooth</h4>
          <p>Modelos com boa autonomia e qualidade sonora.</p>
          <div class="badge">Acessórios</div>
        </div>
      </div>
    </section>

    <!-- Catálogo de celulares à venda -->
    <section id="celulares-venda" class="panel" aria-labelledby="titulo-celulares">
      <h3 id="titulo-celulares">Celulares à Venda</h3>
      <p class="muted">Confira nossos smartphones disponíveis com preços especiais</p>

      <div class="selectors" role="group" aria-label="Seleção de aparelhos">
        <select id="brandSelect" aria-label="Escolha a marca">
          <option value="">-- Escolha a marca --</option>
          <option value="apple">iPhone</option>
          <option value="samsung">Samsung</option>
          <option value="xiaomi">Xiaomi</option>
        </select>

        <select id="modelSelect" aria-label="Escolha o modelo">
          <option value="">-- Escolha o modelo --</option>
        </select>

        <button id="checkBtn" class="okbtn" aria-haspopup="true">Ver Preço</button>
      </div>

      <div id="resultArea" class="result" style="display:none" aria-live="polite">
        <img id="resultImg" src="images/placeholder-phone.jpg" alt="aparelho">
        <div class="info">
          <div id="resultText">
            <strong id="phoneName">Nome do aparelho</strong>
            <div id="priceInfo" style="margin-top:8px;"></div>
          </div>
        </div>
      </div>

      <!-- CRUD LINKS que aparecem quando escolher um modelo -->
      <div id="crudLinks" aria-hidden="true">
        <h4>Gerenciamento rápido</h4>
        <a href="cadastrar_cliente.php">Cadastrar Cliente</a>
        <a href="listar_clientes.php">Listar Clientes</a>

        <a href="cadastrar_vendedor.php">Cadastrar Vendedor</a>
        <a href="listar_vendedores.php">Listar Vendedores</a>

        <a href="cadastrar_produto.php">Cadastrar Produto</a>
        <a href="listar_produtos.php">Listar Produtos</a>
      </div>

      <div style="margin-top:20px;">
        <h4>Todos os Modelos Disponíveis</h4>
        <div class="celulares-grid" aria-label="Lista de modelos"></div>
      </div>
    </section>

    <!-- Como chegar / mapas e redes sociais -->
    <section id="como-chegar" style="margin-top:22px" class="panel">
      <h3>Como chegar</h3>
      <p class="muted">Clique no link abaixo para abrir o Google Maps e conseguir chegar à loja.</p>
      <a id="mapsLink" class="maplink" href="https://www.google.com/maps?q=Asa+Norte+CLN+314+Orion+Tech+Pro,+BL+B+Loja+005+-+Asa+Norte,+Brasília+-+DF,+70767-520" target="_blank" rel="noopener">Abrir localização no Google Maps</a>

      <!-- Mapa Google Maps integrado -->
      <iframe 
        src="https://www.google.com/maps?q=Asa+Norte+CLN+314+Orion+Tech+Pro,+BL+B+Loja+005+-+Asa+Norte,+Brasília+-+DF,+70767-520&output=embed" 
        width="100%" 
        height="300" 
        style="border:0; margin-top:12px; border-radius:8px;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="Localização Orion Tech Pro">
      </iframe>

      <div id="redes-sociais" style="margin-top:20px">
        <strong>Redes sociais</strong>
        <div class="socials" id="redesWrapper">
          <a id="instagramLink" href="https://www.instagram.com/oriontechpro/" target="_blank" rel="noopener noreferrer">📷 Instagram</a>
          <a id="whatsappLink" href="https://wa.me/5561981735190" target="_blank" rel="noopener noreferrer">💬 WhatsApp</a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div style="max-width:900px;margin:0 auto">
      <p style="margin:0 0 6px 0">© 2025 ORION TECH PRO — Assistência técnica e acessórios</p>
    </div>
  </footer>

  <!-- SCRIPT PRINCIPAL -->
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    try {
      // catálogo mantido conforme seu arquivo original (nomes de imagens preservados)
      const celulares = {
        apple: {
          'XR 64GB': {
            img: 'iphone/XR.jpg',
            preco: 'R$ 1.050',
            cores: '⚪️ Branco',
            condicao: 'Seminovo',
            garantia: '3 meses',
            estoque: true
          },
          '11 64GB': {
            img: 'iphone/11.jpg',
            preco: 'R$ 1.499 - R$ 1.549',
            cores: '⚪️🟣 Branco/Roxo - R$1.549<br>⚫️ Preto - R$1.499',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '11 128GB': {
            img: 'iphone/11.jpg',
            preco: 'R$ 1.759 - R$ 1.799',
            cores: '⚪️ Branco - R$1.799<br>⚫️ Preto - R$1.759',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '12 64GB 🇺🇸': {
            img: 'iphone/12.jpg',
            preco: 'R$ 1.899 - R$ 1.999',
            cores: '🟣 Roxo - R$1.899<br>🔵⚫️ Azul/Preto - R$1.999',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '12 128GB 🇺🇸': {
            img: 'iphone/12.jpg',
            preco: 'R$ 1.199 - R$ 1.999',
            cores: '🟣 Roxo - R$1.999<br>⚫️🔵 Preto/Azul - R$1.199 🚨',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '12 Pro 128GB 🇺🇸': {
            img: 'iphone/12pro.jpeg',
            preco: 'R$ 2.449',
            cores: '⚫️ Preto',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '12 Pro Max 128GB 🇺🇸': {
            img: 'iphone/12promax.jpg',
            preco: 'R$ 2.899',
            cores: '⚫️ Preto<br>(Câmera genuína)',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '13 128GB 🇺🇸': {
            img: 'iphone/13.jpg',
            preco: 'R$ 2.599 - R$ 2.699',
            cores: '🩷 Rosa - R$2.599<br>⚫️🔵🟢 Preto/Azul/Verde - R$2.699',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '13 256GB 🇺🇸': {
            img: 'iphone/13258.jpg',
            preco: 'R$ 2.799',
            cores: '🟢 Verde',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '13 Pro 128GB 🇺🇸': {
            img: 'iphone/13pro.jpg',
            preco: 'R$ 3.299',
            cores: '⚫️ Preto',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '13 Pro 256GB 🇺🇸': {
            img: 'iphone/13pro256.jpg',
            preco: 'R$ 3.950',
            cores: '⚫️🟢 Preto/Verde',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '13 Pro Max 128GB 🇺🇸': {
            img: 'iphone/13pm.jpg',
            preco: 'R$ 3.599 🚨',
            cores: '🟢⚫️🟠 Verde/Preto/Dourado',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '14 128GB 🇺🇸': {
            img: 'iphone/14.jpg',
            preco: 'R$ 2.890 - R$ 2.999 🚨',
            cores: '⚪️ Branco - R$2.999 🚨<br>🟣⚫️ Roxo/Preto - R$2.890 🚨',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '14 Plus 128GB 🇺🇸': {
            img: 'iphone/14plus.jpg',
            preco: 'R$ 2.990 🚨',
            cores: '🔵⚫️ Azul/Preto',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '14 Pro 128GB 🇺🇸': {
            img: 'iphone/14pro.jpg',
            preco: 'R$ 3.850 🚨',
            cores: '⚫️ Preto',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '14 Pro 256GB 🇺🇸': {
            img: 'iphone/14pro.jpg',
            preco: 'R$ 3.970 🚨',
            cores: '⚫️🟣 Preto/Roxo',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '14 Pro Max 128GB 🇺🇸': {
            img: 'iphone/14promax.jpg',
            preco: 'R$ 4.599',
            cores: '⚫️🟣 Preto/Roxo',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '15 128GB 🇺🇸': {
            img: 'iphone/15.jpg',
            preco: 'R$ 3.250 - R$ 3.799',
            cores: '🩷 Rosa - R$3.750<br>🔵⚫️🟢 Azul/Preto/Verde - R$3.799<br>⚫️ Preto (tampa trocada) - R$3.250 🚨',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '15 Pro 128GB 🇺🇸': {
            img: 'iphone/15pro.jpg',
            preco: 'R$ 4.650',
            cores: '🖤🩶 Preto/Cinza',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          },
          '15 Pro 256GB 🇺🇸': {
            img: 'iphone/15pro.jpg',
            preco: 'R$ 4.850',
            cores: '⚫️🔵 Preto/Azul',
            condicao: 'Seminovo',
            garantia: '6 meses',
            estoque: true
          }
        },
        xiaomi: {
          'Redmi Note 13 Pro': {
            img: 'xiaomi/redmi13pro.jpg',
            preco: 'R$ 1.899',
            cores: 'Cinza',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'A5 4/128GB': {
            img: 'xiaomi/a5.jpg',
            preco: 'R$ 699,00',
            cores: '🔵 Azul<br>⚫️ Preto',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          '13X 8/256GB': {
            img: 'xiaomi/13x.jpg',
            preco: 'R$ 1.130,00',
            cores: '⚫️ Preto',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          '14C 4/128GB': {
            img: 'xiaomi/14c.jpg',
            preco: 'R$ 999,00',
            cores: '⚫️ Preto<br>🔵 Azul<br>🟣 Roxo',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          '14C 8/256GB': {
            img: 'xiaomi/14c2.jpg',
            preco: 'R$ 1.110,00',
            cores: '🟢 Verde<br>⚫️ Preto<br>🔵 Azul',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          '15C 4/128GB': {
            img: 'xiaomi/15c.jpg',
            preco: 'R$ 1.115,00',
            cores: '⚫️ Preto<br>🔵 Azul<br>🟢 Verde',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          '15C 8/256GB 🇮🇩': {
            img: 'xiaomi/15c2.jpg',
            preco: 'R$ 1.215,00',
            cores: '🟢 Verde<br>🔵 Azul<br>🟠 Laranja',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          '15C 8/256GB 🇨🇳': {
            img: 'xiaomi/15c_china.jpg',
            preco: 'R$ 1.260,00',
            cores: '🟢 Verde',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco C61 4/128GB': {
            img: 'xiaomi/c61.jpg',
            preco: 'R$ 699,00',
            cores: '🟢 Verde',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco C71 3/64GB': {
            img: 'xiaomi/c71.jpg',
            preco: 'R$ 799,00',
            cores: '⚫️ Preto<br>🔵 Azul',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco C71 4/128GB': {
            img: 'xiaomi/c711.jpg',
            preco: 'R$ 899,00',
            cores: '🔵 Azul<br>⚫️ Preto',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco C75 8/256GB': {
            img: 'xiaomi/c75.jpg',
            preco: 'R$ 1.199,00',
            cores: '⚫️ Preto',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco C85 8/256GB': {
            img: 'xiaomi/c85.jpg',
            preco: 'R$ 1.299,00',
            cores: '⚫️ Preto<br>🔵 Azul',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Note 14 8/256GB': {
            img: 'xiaomi/note14.jpg',
            preco: 'R$ 1.530,00',
            cores: '⚫️ Preto<br>🟢 Verde',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Note 14S 8/256GB': {
            img: 'xiaomi/note14s.jpg',
            preco: 'R$ 1.599,00',
            cores: '⚫️ Preto',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco M7 5G 8/256GB': {
            img: 'xiaomi/m7.jpg',
            preco: 'R$ 1.370,00',
            cores: '⚪️ Prata<br>🔵 Azul',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco M7 Pro 5G 12/256GB': {
            img: 'xiaomi/m7pro.jpg',
            preco: 'R$ 1.599,00',
            cores: '🟣 Roxo<br>⚪️ Prata',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco M7 Pro 5G 12/512GB': {
            img: 'xiaomi/m7pro2.jpg',
            preco: 'R$ 1.790,00',
            cores: '🟢 Verde',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Note 14 Pro 8/256GB': {
            img: 'xiaomi/14pro.jpg',
            preco: 'R$ 1.899,00',
            cores: '🟣 Roxo<br>🔵 Azul<br>⚫️ Preto',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Note 14 5G 8/256GB': {
            img: 'xiaomi/145g.jpg',
            preco: 'R$ 1.789,00',
            cores: '⚫️ Preto<br>🟢 Verde',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Note 14 Pro 5G 8/256GB': {
            img: 'xiaomi/14pro5g.jpg',
            preco: 'R$ 1.899,00',
            cores: '⚫️ Preto<br>🟢 Verde<br>🟣 Roxo',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Note 14 Pro Plus 5G 8/256GB': {
            img: 'xiaomi/note14proplus.jpg',
            preco: 'R$ 1.399,00',
            cores: '🟠 Dourado',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Note 14 Pro Plus 5G 12/512GB': {
            img: 'xiaomi/note14proplus.jpg',
            preco: 'R$ 2.599,00',
            cores: '🟣 Roxo',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco X7 12/512GB': {
            img: 'xiaomi/x7.jpg',
            preco: 'R$ 1.899,00',
            cores: '⚫️ Preto<br>⚪️ Prata',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco X7 Pro 5G 8/256GB': {
            img: 'xiaomi/x7pro.jpg',
            preco: 'R$ 2.199,00',
            cores: '🟢 Verde<br>🟡 Amarelo<br>⚫️ Preto',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Poco X7 Pro 5G 12/512GB': {
            img: 'xiaomi/x7pro512.jpg',
            preco: 'R$ 2.450,00 - R$ 2.470,00',
            cores: '🟢 Verde - R$2.450,00<br>⚫️ Preto - R$2.450,00<br>🟡 Amarelo - R$2.470,00',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          },
          'Redmi Pad 2 8/256GB': {
            img: 'xiaomi/pad2.jpg',
            preco: 'R$ 1.520,00',
            cores: '⚪️ Cinza',
            condicao: 'Novo',
            garantia: '12 meses',
            estoque: true
          }
        }
      };

      // elementos
      const brandSelect = document.getElementById('brandSelect');
      const modelSelect = document.getElementById('modelSelect');
      const checkBtn = document.getElementById('checkBtn');
      const resultArea = document.getElementById('resultArea');
      const resultImg = document.getElementById('resultImg');
      const phoneName = document.getElementById('phoneName');
      const priceInfo = document.getElementById('priceInfo');
      const celularesGrid = document.querySelector('.celulares-grid');
      const crudLinks = document.getElementById('crudLinks');

      if (!brandSelect || !modelSelect || !checkBtn || !resultImg || !priceInfo || !celularesGrid || !crudLinks) {
        console.warn('Um ou mais elementos esperados não foram encontrados no DOM. IDs: brandSelect, modelSelect, checkBtn, resultImg, priceInfo, celularesGrid, crudLinks');
        return;
      }

      /* função utilitária para carregar imagens com fallback */
      function setImgSafe(imgElement, src) {
        imgElement.onerror = () => {
          imgElement.onerror = null;
          imgElement.src = 'images/placeholder-phone.jpg';
        };
        imgElement.src = src || 'images/placeholder-phone.jpg';
      }

      // ao mudar marca: preencher select de modelos
      brandSelect.addEventListener('change', () => {
        const marca = brandSelect.value;
        modelSelect.innerHTML = '<option value="">-- Escolha o modelo --</option>';
        if (!marca) {
          resultArea.style.display = 'none';
          // também esconde os links de CRUD
          crudLinks.style.display = 'none';
          crudLinks.setAttribute('aria-hidden', 'true');
          return;
        }
        const modelos = Object.keys(celulares[marca] || {});
        modelos.forEach(modelo => {
          const option = document.createElement('option');
          option.value = modelo;
          option.textContent = modelo;
          modelSelect.appendChild(option);
        });
        resultArea.style.display = 'none';
        crudLinks.style.display = 'none';
        crudLinks.setAttribute('aria-hidden', 'true');
      });

      // mostrar preço ao clicar
      checkBtn.addEventListener('click', () => {
        const marca = brandSelect.value;
        const modelo = modelSelect.value;
        if (!marca || !modelo) {
          alert('Por favor, escolha a marca e o modelo.');
          return;
        }
        const celular = celulares[marca] && celulares[marca][modelo];
        if (!celular) {
          alert('Modelo não encontrado no catálogo.');
          return;
        }
        resultArea.style.display = 'flex';
        setImgSafe(resultImg, celular.img);
        phoneName.textContent = `${getMarcaNome(marca)} ${modelo}`;
        priceInfo.innerHTML = `
          <div style="color: var(--accent1); font-size: 24px; font-weight: bold; margin-bottom: 8px;">
            ${celular.preco}
          </div>
          <div style="font-size: 14px; color: var(--text); margin-bottom: 10px; background: #f8f9fa; padding: 12px; border-radius: 8px;">
            <strong>🎨 Cores disponíveis:</strong><br>
            <div style="margin-top: 6px;">${celular.cores}</div>
          </div>
          <div style="font-size: 14px; color: var(--muted);">
            <strong>Condição:</strong> ${celular.condicao}<br>
            <strong>Garantia:</strong> ${celular.garantia}<br>
            <strong>Estoque:</strong> ${celular.estoque ? '✅ Disponível' : '❌ Indisponível'}
          </div>
          <button onclick="window.open('https://wa.me/5561981735190', '_blank')" style="margin-top: 12px; padding: 10px 16px; background: linear-gradient(90deg, var(--accent1), var(--accent2)); color: white; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-size: 16px;">
            📞 Entrar em Contato via WhatsApp
          </button>
        `;

        // Mostrar links CRUD ao visualizar preço do modelo
        crudLinks.style.display = 'block';
        crudLinks.setAttribute('aria-hidden', 'false');
      });

      // também mostrar/ocultar CRUD ao mudar o select do modelo (sem clicar no botão)
      modelSelect.addEventListener('change', () => {
        if (modelSelect.value) {
          // show quick CRUD links (se quiser requerer checkBtn clique, comente estas linhas)
          crudLinks.style.display = 'block';
          crudLinks.setAttribute('aria-hidden', 'false');
        } else {
          crudLinks.style.display = 'none';
          crudLinks.setAttribute('aria-hidden', 'true');
        }
      });

      function getMarcaNome(codigoMarca) {
        const marcas = { 'apple': 'iPhone', 'samsung': 'Samsung', 'xiaomi': 'Xiaomi' };
        return marcas[codigoMarca] || codigoMarca;
      }

      // preencher grid com cartões (sem imagens carregadas inline até que clique)
      function preencherGridCelulares() {
        celularesGrid.innerHTML = '';
        const frag = document.createDocumentFragment();
        for (const [marca, modelos] of Object.entries(celulares)) {
          for (const [modelo, info] of Object.entries(modelos)) {
            const card = document.createElement('div');
            card.className = 'servico-card';
            card.style.cursor = 'pointer';
            card.onclick = () => {
              brandSelect.value = marca;
              brandSelect.dispatchEvent(new Event('change'));
              setTimeout(() => {
                modelSelect.value = modelo;
                checkBtn.click();
                if (resultArea) {
                  window.scrollTo({ top: resultArea.offsetTop - 100, behavior: 'smooth' });
                }
              }, 80);
            };

            // imagem do card com fallback
            const img = document.createElement('img');
            img.alt = modelo;
            img.style.height = '140px';
            img.onerror = () => { img.onerror = null; img.src = 'images/placeholder-phone.jpg'; };
            img.src = info.img || 'images/placeholder-phone.jpg';

            const h3 = document.createElement('h3');
            h3.textContent = `${getMarcaNome(marca)} ${modelo}`;

            const priceP = document.createElement('p');
            priceP.style.color = 'var(--accent1)';
            priceP.style.fontWeight = 'bold';
            priceP.style.fontSize = '18px';
            priceP.style.margin = '8px 0';
            priceP.innerHTML = info.preco;

            const metaP = document.createElement('p');
            metaP.style.fontSize = '12px';
            metaP.style.color = 'var(--muted)';
            metaP.style.margin = '0';
            metaP.textContent = `${info.condicao} • ${info.garantia}`;

            const coresDiv = document.createElement('div');
            coresDiv.style.fontSize = '11px';
            coresDiv.style.color = 'var(--muted)';
            coresDiv.style.marginTop = '4px';
            coresDiv.innerHTML = getCoresResumo(info.cores);

            card.appendChild(img);
            card.appendChild(h3);
            card.appendChild(priceP);
            card.appendChild(metaP);
            card.appendChild(coresDiv);

            frag.appendChild(card);
          }
        }
        celularesGrid.appendChild(frag);
      }

      function getCoresResumo(cores) {
        if (!cores) return 'Várias cores';
        const emojisCores = (''+cores).match(/[⚪️🟣⚫️🔵🟢🩷🖤🩶🟠🟡🇺🇸🚨🎨]+/g);
        return emojisCores ? emojisCores.join(' ') : cores;
      }

      preencherGridCelulares();

      // adicionar debug para desenvolvimento (pode remover)
      window.__ORION_DEBUG__ = { celulares };

    } catch (err) {
      console.error('Erro no script principal:', err);
    }
  });
  </script>
</body>
</html>
