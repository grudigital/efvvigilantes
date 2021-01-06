-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jan-2021 às 22:06
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `efvvigilantes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `cpf` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `whatsapp` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `cpf`, `email`, `whatsapp`) VALUES
(2, 'felipe', '352.516.908-61', 'felipe@grudigital.com.br', '(11) 93093-7007'),
(3, 'Lourival ', '353.535.353-34', 'felipe@grudigital.com.br', '(11) 11111-1111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(10) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `avaliacao` varchar(250) DEFAULT NULL,
  `imagem` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `nome`, `avaliacao`, `imagem`) VALUES
(1, 'Jardel Moraes', 'fiz curso é recomendo professores ótimos escola nota 10', '1609958696.jpg'),
(2, 'Paulo', 'Essa é uma das escolas mais competentes da seu estudo de vigilantes patrimonial e pessoal de nossa Bahia', '1609958785.jpg'),
(3, 'Marcio Santos', 'Melhor escola do estado, recomendo a todos, o atendimento é excelentíssimo.', '1609958865.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blocos`
--

CREATE TABLE `blocos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `resumo` text NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `blocos`
--

INSERT INTO `blocos` (`id`, `titulo`, `resumo`, `descricao`, `imagem`) VALUES
(2, 'Quem somos 1 - Formando profissionais e realizando sonhos', 'Formando profissionais e realizando sonhos', 'Nascemos com o objetivo de capacitar profissionais para tornar nossa Cidade e Pais mais seguros.', '1609960167.jpg'),
(3, 'Quem somos 2 -  O que nos torna únicos ', ' O que nos torna únicos ', 'Somos especialistas e amamos o que fazemos. Nossa maior paixão é instruir e transformar pessoas até então comuns nos melhores profissionais em segurança e vigilantes.\r\n<br/><br/>\r\nTudo é feito com muito amor, desde a preparação do material das aulas, a toda nossa estrutura feita para proporcionar o maior conforto a nossos alunos, para que a única preocupação seja o ensino de qualidade.', ''),
(4, 'Quem somos - Missão', 'Missão', 'Transformar a segurança de nosso país com ensino de qualidade e profissionais capacitados e apaixonados por fazer do mundo um lugar melhor com igualdade e segurança para todos.', ''),
(5, 'Quem somos - Filosofia', 'Filosofia', 'O futuro de nosso país está nas mãos de nossos professores e instrutores que através de seus conhecimentos são capazes de formar uma nova geração melhor, mais forte, integra e preparada.', ''),
(6, 'Quem somos - Professores qualificados', 'Professores qualificados', 'Somos muito seletivos na escolha de professores e equipe, pois é através do domínio e conhecimento deles que o curso será um sucesso e munirá nossos alunos a desempenhar um trabalho com excelência e perfeição.', ''),
(7, 'Quem somos - Material didático ', 'Material didático', 'Outro de nossos maiores cuidados é com a preparação do material didático e conteúdo a ser passado para nossos alunos. Uma grade de aulas preparadas durante mais de 10 anos para que aja total entendimento do conteúdo proposto.', ''),
(8, 'Quem somos - Melhor custo benefício', 'Melhor custo benefício do mercado', 'Um ensino de qualidade não tem preço, mas aqui na EFV você encontra ótimos valores assim como as melhores condições de pagamento. Você adquire uma nova profissão se qualifica e paga um valor justo e confortável.', ''),
(9, 'Quem somos - Empregabilidade garantida', 'Empregabilidade garantida', 'Você será totalmente preparado para o mercado de trabalho, estando apto a exercer as funções a que seu curso designou imediatamente, você estará vivenciado e habituado as rotinas por profissionais que exercem as funções há mais de uma década.', ''),
(10, 'Rodapé - Texto de resumo', 'Há mais de 20 anos preparando profissionais para o mercado de trabalho em vigilância e segurança. Com mais de 5.000 alunos formados a EFV é líder em preparação de alunos no Nordeste Brasileiro.', 'Há mais de 20 anos preparando profissionais para o mercado de trabalho em vigilância e segurança. Com mais de 5.000 alunos formados a EFV é líder em preparação de alunos no Nordeste Brasileiro.', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados`
--

CREATE TABLE `certificados` (
  `id` int(10) UNSIGNED NOT NULL,
  `aluno` int(10) DEFAULT NULL,
  `arquivo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `certificados`
--

INSERT INTO `certificados` (`id`, `aluno`, `arquivo`) VALUES
(3, 3, '1609944995.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `inicioproximaturma` date DEFAULT NULL,
  `informacoesproximaturma` varchar(120) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `datainclusao` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `resumo`, `descricao`, `inicioproximaturma`, `informacoesproximaturma`, `imagem`, `datainclusao`) VALUES
(2, 'Curso de formação de vigilantes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL, '1609884726.jpg', '2021-01-05'),
(3, 'Extensão em transporte de valores', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL, '1609884794.jpg', '2021-01-05'),
(4, 'Extensão em escolta armada', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, NULL, '1609884863.jpg', '2021-01-05'),
(5, 'Extensão em segurança pessoal privada', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, NULL, '1609884918.jpg', '2021-01-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeriafotos`
--

CREATE TABLE `galeriafotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagem` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `galeriafotos`
--

INSERT INTO `galeriafotos` (`id`, `imagem`) VALUES
(6, '1609957178.jpg'),
(7, '1609957185.jpg'),
(8, '1609957191.jpg'),
(9, '1609957198.jpg'),
(10, '1609957206.jpg'),
(11, '1609957212.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeriavideos`
--

CREATE TABLE `galeriavideos` (
  `id` int(10) UNSIGNED NOT NULL,
  `video` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `galeriavideos`
--

INSERT INTO `galeriavideos` (`id`, `video`) VALUES
(5, 'oPezSqJgAAE'),
(6, 'wgRYWJXocpM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefone1` varchar(30) DEFAULT NULL,
  `telefone2` varchar(30) DEFAULT NULL,
  `telefone3` varchar(30) DEFAULT NULL,
  `telefone4` varchar(30) DEFAULT NULL,
  `facebook` varchar(80) DEFAULT NULL,
  `instagram` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `email`, `telefone1`, `telefone2`, `telefone3`, `telefone4`, `facebook`, `instagram`) VALUES
(1, '44031-125', 'Travessa Mantinha', '50', '', NULL, 'Sítio Novo ', 'BA', 'efv_esc@uol.com.br ', '(75) 3624-3088 ', '(75) 3624-1993', '(75) 3022-7665', '(75) 99131-6651', 'https://www.facebook.com/EFV-Vigilantes-104812794540465/', 'https://www.instagram.com/efvvigilantes/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

CREATE TABLE `publicacoes` (
  `id` int(10) NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(80) DEFAULT NULL,
  `datapublicacao` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `titulo`, `resumo`, `descricao`, `imagem`, `datapublicacao`) VALUES
(2, 'Número de vigilantes privados é quase 5 vezes maior que efetivo do Exército', 'Número de vigilantes privados supera o de policiais em vários estados.\r\nMoradores pagam cada vez mais caro para reforçar a segurança.', 'O medo de assaltos tem feito moradores de condomínios pagarem cada vez mais caro para reforçar a segurança. O reflexo disso é que o número de vigilantes não para de crescer. O contingente de vigilância privada do país já é quase cinco vezes maior que todo o efetivo do Exército.\r\n<br>\r\nCrianças e idosos na praça. Cena típica de interior no meio do Rio de Janeiro. Mas por toda parte, há olhos atentos observando tudo. Primeiro, foram instaladas as cancelas. Depois vieram as guaritas, as grades e o serviço de vigias e vigilantes. E com tudo isso, segundo os moradores, veio a tranquilidade.\r\n<br>\r\nEm uma área com 40 prédios, onde vivem 13 mil pessoas, a sensação de segurança tem um preço e os moradores estão dispostos a pagar. O custo para cada prédio: R$ 7 mil. “É a solução que nós temos. Porque nós vamos ficar à mercê dos bandidos, dos assaltantes? Nós tivemos que recorrer a isso e não nos arrependemos, não”, diz Denise Corrêa, presidente da associação de moradores.\r\n<br>\r\nBom Dia Brasil: Como a senhora se sente tendo que pagar por segurança?<br>\r\nMirian Sander (vice-presidente da associação de moradores): Olha, a segurança em si que deveria ser a pública, eles não têm homens suficientes que possam garantir. Então, tivemos que apelar para segurança privada.\r\n<br>\r\nOs moradores contam hoje com 50 vigias e vigilantes 24 horas por dia. É um serviço cada vez mais requisitado nas grandes cidades por quem busca mais segurança, principalmente em condomínios.\r\n<br>\r\nNo estado do Rio, o número de vigilantes subiu de 86 mil para 91 mil desde 2013, quase o dobro do efetivo da Policia Militar. O crescimento foi registrado também em todo o país: já são 989 mil vigilantes, quase cinco vezes o contingente do Exército brasileiro.\r\n<br>\r\nO vigilante precisa passar por um curso com um mês de duração que inclui aulas de defesa pessoal e tiro. Esses cursos são fiscalizados pela Polícia Federal. Depois, ele é autorizado a usar arma de fogo.\r\n<br>\r\n“Quando ocorrer algum ilícito, ele tem o poder para intervir e fazer cessar esse ilícito e deter as pessoas as pessoas envolvidas”, explica Marcelo Daemon, delegado da Polícia Federal.\r\n<br>\r\nMas o serviço de vigilância só é permitido em áreas particulares, proibido em vias públicas.\r\n<br>\r\nO Sindicato das Empresas de Segurança Privada alerta: é preciso cuidado para não contratar empresas clandestinas, sem autorização da Polícia Federal. “O risco é responder por severas ações a nível de constrangimento ilegal, a nível de um profissional atuando inadequadamente”, afirma Manoel dos Anjos Almeida, vice-presidente do Sindicato das Empresas de Segurança Privada do Rio de Janeiro.\r\n<br>\r\nOs moradores de um condomínio também decidiram se unir para enfrentar a violência. Além de vigias, eles contrataram vigilantes armados, que fazem rondas constantes sobre duas rodas.\r\n<br>\r\nHoje, segurança é o maior gasto da associação de moradores: cada um paga R$ 1 mil por mês. Preço alto por um pouco mais de paz.\r\n<br>\r\n“É um custo que os moradores julgam necessário para dar essa sensação de segurança”, afirma um morador.', '1609883941.jpg', '2021-01-05'),
(3, 'STJ reconhece aposentadoria especial para vigilantes', 'A Primeira Seção do Superior Tribunal de Justiça (STJ) decidiu ontem (9) reconhecer que vigilantes, quer trabalhem armados ou não, têm direito à aposentadoria especial', 'A Primeira Seção do Superior Tribunal de Justiça (STJ) decidiu ontem (9)vreconhecer que vigilantes, quer trabalhem armados ou não, têm direito àvaposentadoria especial. <br>\r\nA questão foi decidida durante o julgamento de três processos que tratavam do reconhecimento da contagem diferenciada do tempo de serviço para solicitar o benefício no Instituto Nacional do Seguro Social (INSS).\r\nApesar do entendimento, a União pode recorrer da decisão. A discussão envolve o reconhecimento da periculosidade no exercício das atividades dos vigilantes. Até abril de 1995, era permitido o reconhecimento da periculosidade por meio de qualquer comprovação dos riscos da profissão. Porém, a partir da edição da Lei 9.032/1995 e do Decreto 2.172/1997, o enquadramento passou a ser conforme a comprovação de exposição a agentes nocivos. Dessa forma, os vigilantes não tiveram mais direito à aposentadoria especial e diversas ações foram protocoladas em todo o país em busca do reconhecimento da nocividade do trabalho.<br>\r\nPor unanimidade, o colegiado do STJ reconheceu o direito dos vigilantes à aposentadoria especial e definiu a seguinte tese, que poderá ser seguida em casos semelhantes:<br>\r\n“É admissível o reconhecimento da especialidade da atividade de vigilante, com ou sem arma de fogo, em data posterior a Lei 9.032/1995 e ao Decreto 2.172/1997, desde que haja comprovação da efetiva nocividade da atividade por qualquer meio de prova até 5 de março de 1997 (data do decreto) e, após essa data, mediante apresentação de laudo técnico ou elemento material equivalente para comprovar a permanente, não ocasional, nem intermitente, exposição a agente nocivo que coloque em risco a integridade física do segurado”.<br>\r\nAndré Richter - Repórter da Agência Brasil - Brasília<br>\r\nEdição: Aline Lea', '1609965341.jpg', '2021-01-05'),
(4, 'Projeto inclui direitos humanos nos cursos de formação de agentes de segurança ', 'Autor da proposta, Fabiano Contarato diz que é essencial engajar agentes de segurança na luta antirracista\r\n', 'Motivado pela morte de João Alberto Silveira Freitas, um homem negro espancado por dois seguranças de empresa contratada pela rede de supermercados Carrefour, o senador Fabiano Contarato (Rede-ES) apresentou um projeto de lei que determina a inclusão, em cursos de capacitação de agentes de segurança pública e privada, de conteúdos relacionados a direitos humanos e combate ao racismo, à violência de gênero, à homofobia e outras formas de discriminação.\r\n\r\nPara Contarato, “o assassinato de uma pessoa negra não é fato isolado, não é tragédia ocasional, não é fatalidade esporádica”. O senador observa que a violência “atingiu seu ápice”. Segundo ele, a proposta pretende reverter essa violência crescente que gera vítimas fatais de forças policiais e de agentes de segurança de empresas privadas.\r\n\r\n“É fundamental engajar agentes de segurança na luta antirracista. Incluir conteúdos relacionados aos direitos humanos e ao combate a preconceitos nos processos de formação e aperfeiçoamento desses agentes tem o potencial de revolucionar as práticas e rotinas, contribuindo para fazer deles atores de transformação, e não mais de reprodução do racismo estrutural da sociedade brasileira”, argumenta.\r\n\r\nDe acordo com o projeto (PL 5.245/2020), os cursos destinados à formação e ao aperfeiçoamento de agentes de segurança incluirão conteúdos relacionados aos direitos humanos, liberdades fundamentais e princípios democráticos. Também haverá conteúdos de combate ao racismo, à violência de gênero, ao preconceito por orientação sexual e identidade de gênero, à xenofobia, à intolerância religiosa e ao preconceito contra pessoas com necessidades especiais.\r\n\r\nFonte: Agência Senado', '1609884367.jpg', '2021-01-05'),
(5, 'Formação de vigilantes ainda é considerado insuficiente', 'Embora representem pouco mais da metade da força de segurança no País, os vigilantes têm uma formação que especialistas consideram curta e insuficiente. ', 'Embora representem pouco mais da metade da força de segurança no País, os vigilantes têm uma formação que especialistas consideram curta e insuficiente. Eles também defendem que é necessário haver maior fiscalização tanto por parte do poder público quanto das empresas que contratam esses serviços, para evitar casos de violência extrema, abuso e preconceito, como o que ocorreu em um Carrefour de Porto Alegre na quinta-feira passada. O debate sobre a segurança privada voltou a ganhar espaço após João Alberto Silveira Freitas, de 40 anos, ser espancado e morto por um vigilante e um policial militar temporário que fazia bico. O caso se soma a outros tantos ocorridos em estabelecimentos... ', '1609884533.jpg', '2021-01-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `seo`
--

CREATE TABLE `seo` (
  `id` int(10) UNSIGNED NOT NULL,
  `analytics` varchar(80) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `seo`
--

INSERT INTO `seo` (`id`, `analytics`, `description`, `keywords`) VALUES
(1, 'UA-60987813-1', 'Escola feirense de formação de  vigilantes, a EFV tem mais de 30 anos de experiencia no mercado de formac1ão de profissionais.', 'formacao de vigilantes, vigilantes na bahia, escola de vigilantes em sitio novo, segurança privada, segurança armada, reciclagem de vigilantes, curso de formacao de vigilantes, curso de vigilantes, curso de segurança de carro forte,\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Felipe Sergio', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Netto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'EFV Vigilantes', 'efv_esc@uol.com.br', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blocos`
--
ALTER TABLE `blocos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `galeriafotos`
--
ALTER TABLE `galeriafotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `galeriavideos`
--
ALTER TABLE `galeriavideos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `blocos`
--
ALTER TABLE `blocos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `certificados`
--
ALTER TABLE `certificados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `galeriafotos`
--
ALTER TABLE `galeriafotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `galeriavideos`
--
ALTER TABLE `galeriavideos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
