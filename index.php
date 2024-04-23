<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img\usado.png" type="image/x-icon">

    <title>Moda Sustentável</title>
</head>
<body>
<header >
<!-- style="position: fixed; top: 0; left: 0; width: 100%;" -->
<!-- Barra de navegação -->
<div class="navbar">
    <a href="#oquee">O que é</a>
    <a href="#causas">Causas</a>
    <a href="#solucao">Solução</a>
    <div class="functions">
    <!-- Formulário para escolha do tamanho do título -->
    <form method="post">
    <label class="button1" for="titulo">Tamanho do título:</label>
    <br>
    <select name="titulo" onchange="this.form.submit()">
        <option value="24px" <?php if(isset($_POST['titulo']) && $_POST['titulo'] == '24px') echo 'selected'; ?>>Pequeno</option>
        <option value="36px" <?php if(isset($_POST['titulo']) && $_POST['titulo'] == '36px') echo 'selected'; ?>>Médio</option>
        <option value="48px" <?php if(isset($_POST['titulo']) && $_POST['titulo'] == '48px') echo 'selected'; ?>>Grande</option>
    </select>
</form>

    <button onclick="toggleDarkMode()">Dark Mode</button>
</div>
</div>
<h1 style="font-size: <?php echo isset($_POST['titulo']) ? $_POST['titulo'] : '36px'; ?>"><?php echo isset($_POST['titulo']) ? 'Moda Sustentável' : ''; ?> <br> Você sabe de onde vem suas roupas?</h1>
<br>



</header>


<!-- Conteúdo -->

<main>

<div class="content">
 <h2 class="center" id="oquee">O que é moda?</h2> 

    <div class="moda">
        <img src="https://img.freepik.com/fotos-premium/estilistas-de-moda-negra-usam-sua-visao-inovadora-e-atencao-aos-detalhes-para-criar-momentos-de-moda-inesqueciveis-gerado-por-ia_727385-2155.jpg" alt="muitas roupas em lixão">
        

     <p>A moda é um conceito amplo que engloba tendências de roupas, acessórios, estilo de vida e comportamento. Ela é uma forma de expressão cultural e individual, que reflete as mudanças na sociedade e as influências de diversos aspectos, como arte, música e tecnologia.</p>

</div>
    <h2 class="center" id="causas">Causas</h2>

    <div class="moda">

        <p>
A indústria da moda é altamente poluente, consumindo enormes quantidades de água e liberando toneladas de microfibras sintéticas no mar. Além disso, contribui significativamente para o desmatamento, como evidenciado pela destruição de extensas áreas de Cerrado. Embora seja vista como conveniente e acessível, a produção, consumo e descarte de roupas têm um impacto ambiental e social devastador</p>

 <img src="https://blog.ebaconline.com.br/blog/wp-content/uploads/2022/12/kqyqkfntwv83wktjdfmvc.png" alt="">
 
</div>


    <h2 class="center" id="solucao">O que é moda sustentável?</h2>


<div class="moda">
    <img src="img/flavia-aranhaspfw21soprofoto-mariana-caldas3.jpg" alt="mulher com roupa sustentavel">
    <p class="p3">
        
        Moda sustentável é um conceito que se refere à prática de produzir roupas, acessórios e calçados de forma
        ambientalmente responsável, socialmente justa e economicamente viável. Isso inclui o uso de materiais
        orgânicos, reciclados ou de baixo impacto ambiental, assim como a adoção de práticas de produção éticas e
        transparentes.

        Ao mesmo tempo, a sustentabilidade na moda também defende que ela seja mais durável e atemporal, sem encorajar o consumo excessivo de roupas descartáveis.
    
        Há várias razões para optar pela moda sustentável. Além de reduzir o impacto negativo da indústria da moda no
        meio ambiente, ela também promove condições de trabalho justas e seguras para os trabalhadores da indústria
        têxtil, muitos dos quais estão em países em desenvolvimento.
 
        Os impactos positivos da moda sustentável são diversos. Ela contribui para a conservação dos recursos naturais,
        reduzindo o desperdício de água e energia, e diminui a poluição do ar e da água causada pela produção em massa
        de roupas. Além disso, promove uma mentalidade de consumo mais consciente e duradouro, incentivando a
        reutilização, reciclagem e upcycling de peças de vestuário.
    </p>

    </div>
 </div>
        
   

</main>
   

<div class="footer">

<footer>
<p>Desenvolvido por Emily e Gabriela &copy;</p>
</footer>
</div>


<script src="script.js"></script>
</body>


<script src="https://cdn.userway.org/widget.js" data-account="kCDHqw9ltL"></script>

<div vw class="enabled">
  <div vw-access-button class="active"></div>
  <div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
  </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
  new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

</html>

