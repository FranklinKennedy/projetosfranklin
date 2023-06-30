<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <!-- Meu Cabeçario -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">FK</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="selecionar()">INÍCIO</a></li>
                    <li><a href="#sobremi" onclick="selecionar()">SOBRE MIM</a></li>
                    <li><a href="#skills" onclick="selecionar()">HABILIDADES</a></li>
                    <li><a href="#curriculum" onclick="selecionar()">CURRÍCULO</a></li>
                    <li><a href="#portfolio" onclick="selecionar()">PORTFÓLIO</a></li>
                    <li><a href="#contato" onclick="selecionar()">CONTATO</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img/hero.png" alt="">
            </div>
            <h1>Franklin Kennedy</h1>
<h2>Desenvolvedor Web</h2>
<div class="redes">
    <a href="https://www.facebook.com/franklin71100"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.linkedin.com/in/franklin-kennedy-734504109/"><i class="fab fa-linkedin-in"></i></a>
</div>
</div>
</section>

    <!-- SECCION SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Eu</h2>
            <p><span>Meu nome é Franklin Kennedy</span>, tenho
                22 anos e sou residente na encantadora cidade de Montes
                Claros, localizada em Minas Gerais. Atualmente, estou cursando TecNet (Programação Web) no IFNMG e estou
                no
                2º período. Prevejo concluir meu curso e obter minha formação em janeiro de 2023. Tenho conhecimento e
                paixão pelas áreas
                de Java, PHP, MySQL e Android Studio.
            </p>

            <div class="fila">
                <!-- Dados Pessoais -->
                <div class="col">
                    <h3>Dados Pessoais</h3>
                    <ul>
                        <li>
                            <strong>Data de Nascimento</strong>
                            07-11-2000
                        </li>
                        <li>
                            <strong>Telefone</strong>
                            (38) 9 8807-7492
                        </li>
                        <li>
                            <strong>E-mail</strong>
                            kennedy.franklin9@gmail.com
                        </li>

                        <li>
                            <strong>Endereço</strong>
                            Montes Claros - MG
                        </li>

                    </ul>
                </div>
            </div>
            <button>
                <a href="documentos/curriculo_franklin_kennedy.pdf" target="_blank">Baixar CV</a> <i class="fa-solid fa-download"></i>
                <span class="overlay"></span>
            </button>
        </div>
    </section>

    <!-- Habilidades -->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>Habilidades</h2>
            <div class="fila">
                <!-- Technical Skill -->
                <div class="col">
                    <h3>Habilidades</h3>
                    <div class="skill">
                        <span>JAVA</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>PHP</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>MySQL</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Microsoft Oficce</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Inglês</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Habilidade pessoal -->
                <div class="col">
                    <h3>Habilidades Pessoais</h3>
                    <div class="skill">
                        <span>Comunicação</span>
                        <div class="barra-skill">
                            <div class="progreso" style="width: 80%;">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabalho em Equipe</span>
                        <div class="barra-skill">
                            <div class="progreso" style="width: 80%;">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Criatividade</span>
                        <div class="barra-skill">
                            <div class="progreso" style="width: 70%;">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicação</span>
                        <div class="barra-skill">
                            <div class="progreso" style="width: 60%;">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Habilidade de Resolução de Problemas</span>
                        <div class="barra-skill">
                            <div class="progreso" style="width: 94%;">
                                <span>94%</span>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CURRICULO -->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Curriculo</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Educação</h3>
                    <div class="item izq">
                        <h4>Téc em Edicação</h4>
                        <span class="casa">Excelência Cursos Técnicos</span>
                        <span class="fecha">2017 - 2019</span>
                        <p>O curso Técnico em Edificações me capacitou para enfrentar os desafios do mercado da
                            construção civil. Através de uma formação técnica sólida, adquiri habilidades e
                            conhecimentos essenciais para interpretar e elaborar projetos, coordenar equipes e garantir
                            a qualidade das edificações. Estou preparado para atuar de forma autônoma ou integrar
                            equipes de projetos e construção, contribuindo para o desenvolvimento de obras que
                            transformam e melhoram a vida das pessoas.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Bombeiro Civil</h4>
                        <span class="casa">Academia Brasileira de Bombeiros Civil</span>
                        <span class="fecha">2018 - 2019</span>
                        <p>No Curso de Bombeiro Civil, experimentei um crescimento notável, tanto pessoal quanto
                            profissional. Através dessa formação, adquiri conhecimentos e habilidades fundamentais para
                            atuar de forma eficaz em situações de emergência, protegendo vidas e patrimônios.<br> A
                            conexão com o curso de Edificações se revela na importância da segurança contra incêndios e
                            acidentes em construções. Como Técnico em Edificações, compreendi a relevância de projetar
                            edificações seguras, seguindo as normas e regulamentos de prevenção de incêndios. Agora,
                            como Bombeiro Civil, estou capacitado para lidar diretamente com essas situações, aplicando
                            os conhecimentos adquiridos e contribuindo para a segurança das edificações e de seus
                            ocupantes.<br> Essa combinação de habilidades entre Técnico em Edificações e Bombeiro Civil
                            amplia minhas possibilidades profissionais, permitindo-me trabalhar não apenas na concepção
                            e construção, mas também na prevenção e resposta a situações emergenciais. Estou
                            entusiasmado em continuar crescendo nesses dois campos complementares, desempenhando um
                            papel fundamental na proteção e bem-estar da comunidade.<br>
                        </p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Assistente Administrativo</h4>
                        <span class="casa">TecNet (Programação)</span>
                        <span class="fecha">2022 - Atual</span>
                        <p>O curso de TecNet (Programação) despertou minha paixão pelo mundo da tecnologia. Com foco em
                            PHP, Java, Android Studio, Banco de Dados e HTML, adquiri conhecimentos sólidos nessas áreas
                            essenciais para desenvolver sistemas web, aplicativos móveis e soluções inovadoras. Estou
                            pronto para enfrentar desafios na programação e contribuir para a transformação digital em
                            diferentes setores.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                </div>

                <div class="col derecha">
                    <h3>Experiencia de Trabalho</h3>
                    <div class="item der">
                        <h4>Jovem Aprendiz</h4>
                        <span class="casa">INSTITUTO DE DESENVOLVIMENTO EDUCACIONAL MINEIRO</span>
                        <span class="fecha">2019 - 2021</span>
                        <p>Carteiras assinada pelo Instituto de Desenvolvimento Educacional Mineiro e Trabalhava
                            terceirizado no escritório da construtora Flisa LTDA.<br> Minha rotina era baseada em fazer
                            planilhas de orçamento, conferencia de documentos para contrato e movimentos bancários como
                            depósitos e retirada de valor de cheque.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION PORTFOLIO -->
    <section id="portfolio" class="portfolio">
        <div class="contenido-seccion">
            <h2>PROJETOS</h2>
            <div class="galeria">
                <div class="proyecto">
                    <img src="img/p1.jpg" alt="">
                    <div class="overlay">
                        <h3><a href="documentos/Site Responsivo.rar" target="_blank">APPLE</a></h3>
                        <p>Site para estudar e aperfeiçoar técnicas HTML, CSS</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p2.jpg" alt="">
                    <div class="overlay">
                        <h3><a href="documentos/html-fotoblog-barcelona.rar" target="_blank">Barcelona Site</a></h3>
                        <p>Site para estudar e aperfeiçoar técnicas</p>
                    </div>
                </div>               
            </div>
        </div>
    </section>

    <!-- SECCION CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2>CONTATO</h2>
            <div class="fila">
                <!-- Formulario -->
                <div class="col">
                    <form action="https://api.staticforms.xyz/submit" method="post">
                        <input type="hidden" name="accessKey" value="be320042-c8e4-46ef-8f08-928298eb7db6">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" placeholder="Digite seu nome ou da empresa" required>
                        
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" placeholder="Digite seu E-mail" required>
                        
                        <label for="assunto">Assunto:</label>
                        <input type="text" name="assunto" placeholder="Digite o Assunto" required>
                        <input type="hidden" name="redirectTo" value="#contato">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Digite a Mensagem 📩"></textarea>
                    <button>
                        Enviar<i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                </div>
            </form>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="https://www.facebook.com/franklin71100"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/in/franklin-kennedy-734504109/"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
