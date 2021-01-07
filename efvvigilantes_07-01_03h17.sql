-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/01/2021 às 07:12
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.2.34

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
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `cpf` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `whatsapp` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `cpf`, `email`, `whatsapp`) VALUES
(2, 'Felipe Sergio', '352.516.908-60', 'felipe@grudigital.com.br', '(11) 93093-7007'),
(3, 'Lourival ', '353.535.353-34', 'felipe@grudigital.com.br', '11980246313');

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(10) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `avaliacao` varchar(250) DEFAULT NULL,
  `imagem` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `nome`, `avaliacao`, `imagem`) VALUES
(1, 'Jardel Moraes', 'fiz curso é recomendo professores ótimos escola nota 10', '1609958696.jpg'),
(2, 'Paulo', 'Essa é uma das escolas mais competentes da seu estudo de vigilantes patrimonial e pessoal de nossa Bahia', '1609958785.jpg'),
(3, 'Marcio Santos', 'Melhor escola do estado, recomendo a todos, o atendimento é excelentíssimo.', '1609958865.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blocos`
--

CREATE TABLE `blocos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `resumo` text NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blocos`
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
(10, 'Rodapé - Texto de resumo', 'Há mais de 20 anos preparando profissionais para o mercado de trabalho em vigilância e segurança. Com mais de 5.000 alunos formados a EFV é líder em preparação de alunos no Nordeste Brasileiro.', 'Há mais de 20 anos preparando profissionais para o mercado de trabalho em vigilância e segurança. Com mais de 5.000 alunos formados a EFV é líder em preparação de alunos no Nordeste Brasileiro.', ''),
(11, 'Home - Vídeo', 'Vídeo institucional', 'Conheça mais sobre a EFV', NULL),
(12, 'Home - Vídeo link ', 'wgRYWJXocpM', 'wgRYWJXocpM', NULL),
(13, 'Home - Topo', 'Há 26 anos', 'realizando sonhos e formando profissionais competentes', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `certificados`
--

CREATE TABLE `certificados` (
  `id` int(10) UNSIGNED NOT NULL,
  `aluno` int(10) DEFAULT NULL,
  `arquivo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `certificados`
--

INSERT INTO `certificados` (`id`, `aluno`, `arquivo`) VALUES
(3, 2, '1609944995.pdf'),
(4, 2, '1609989641.pdf');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `resumo` text DEFAULT NULL COMMENT 'objetivo',
  `descricao` text DEFAULT NULL COMMENT 'programa',
  `valores` text DEFAULT NULL,
  `documentosnecessarios` text DEFAULT NULL,
  `metodologia` text DEFAULT NULL,
  `avaliacao` text DEFAULT NULL,
  `inicioproximaturma` date DEFAULT NULL,
  `informacoesproximaturma` varchar(300) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `datainclusao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `resumo`, `descricao`, `valores`, `documentosnecessarios`, `metodologia`, `avaliacao`, `inicioproximaturma`, `informacoesproximaturma`, `imagem`, `datainclusao`) VALUES
(2, 'Curso de formação de vigilantes', 'Dotar o participante de conhecimentos e habilidades que o capacite para o exercício da profissão de vigilante, incluídas aí as atividades relativas a segurança física de estabelecimentos industriais e comerciais, adestrando-o para o manuseio de armamento e o emprego de defesa pessoal.\r\n', 'Grade Curricular<br/>\r\nA) Disciplinas Curriculares........................174 h/a<br/>\r\nB) Verificação de Aprendizagem.....................24 h/a<br/>\r\nC) Abertura de Curso...............................2 h/a<br/>\r\n<br/><br/>\r\nTOTAL..............................................200 h/a\r\n<br/><br/>\r\n\r\n1 - Noções de Segurança Privada - 8 horas/aula<br/>\r\n2 - Legislação Aplicada e Direitos Humanos - 20 horas/aula<br/>\r\n3 - Relações Humanas no Trabalho - 10 horas/aula<br/>\r\n4 - Sistema de Segurança Pública e Crime Organizado - 10 horas/aula<br/>\r\n5 - Prevenção e Combate a Incêndio - 6 horas/aula<br/>\r\n6 - Primeiros Socorros - 6 horas/aula<br/>\r\n7 - Educação Física - 12 horas/aula<br/>\r\n8 - Defesa Pessoal - 20 horas/aula<br/>\r\n9 - Armamento e Tiro - 24 horas/aula<br/>\r\n10- Vigilancia - 14 horas/aula<br/>\r\n11- Radiocomunicação - 10 horas/aula<br/>\r\n12- Noções de Segurança Eletrônica - 10 horas/aula<br/>\r\n13- Noções de Criminalística e Técnicas de Entrevista Prévia - 8 horas/aula<br/>\r\n14- uso Progressivo da Força - 8 horas/aula<br/>\r\n15- Gerenciamento de Crises - 8 horas/aula<br/>\r\n<br/>\r\nTotal - 200 horas/aula', 'Consulte nossos preços e promoções', 'Apresentar cópia simples dos documentos ou os ORIGINAIS, para que a EFV tire xerox e providencie a NECESSÁRIA conferência. Nesse caso, será cobrado R$0,20 por face de cada documento xerocopiado:\r\n<br/><br/>\r\n• Carteira de Identidade ( mínimo 21 anos )<br/>\r\n• CPF<br/>\r\n• Título de Eleitor<br/>\r\n• Carteira de Reservista<br/>\r\n• Histórico Escolar Autenticado ou Declaração Escolar original - mínimo quarta série do primeiro grau<br/>\r\n• CTPS - Carteira de Trabalho<br/>\r\n• Exame médico e Exame Psicotécnico<br/>\r\n• Atestado de Antecedentes Criminais<br/>\r\n• Comprovante de Residência (com CEP)- conta de luz, conta de TV a cabo, telefone ou correspondência bancária de preferência em nome do(a) aluno(a) ou dos pais.<br/>\r\n• Quitação da Justiça Eleitoral<br/>\r\n• Certidões negativadas', 'Será ministrado de conformidade com o estabelecido na Portaria 3233/2012 do Departamento de Polícia Federal. O curso é aplicado em uma única fase, visando o preparo profissional do aluno através de atividades práticas e simuladas, trazendo-o o mais próximo possível da realidade nas mais diversas situações em que devam ser aplicadas as regras e medidas de segurança.', 'Ao final do curso será realizada uma única avaliação de aprendizagem, por matéria, sendo considerado aprovado o aluno que obtiver um mínimo de 6 (seis) pontos num máximo de 10 (dez) pontos. A avaliação de aprendizagem das matérias \"Adestramento Físico\" e Armamento e Tiro será realizada de forma prática, enquanto que as demais constarão de provas teóricas do tipo objetivo.\r\n', '2021-01-08', 'Aulas aos sábados das 12h as 18h', '1609990494.jpg', '2021-01-05'),
(3, 'Extensão em transporte de valores', 'Dotar o aluno de conhecimentos, técnicas, habilidades e atitudes que o mantenham capacitado para o exercício da atividade especializada de Transporte de Valores.\r\n', 'PROGRAMA E CARGA HORÁRIA<br/><br/>\r\n\r\nLegislação Aplicada - 05 horas/aula<br/>\r\nTransporte de Valores - 10 horas/aula<br/>\r\nResolução das Situações de Emergências - 10 horas/aula<br/>\r\nArmamento e Tiro - 18 horas/aula<br/>\r\nVerificação de Aprendizagem - 07 horas/aula<br/>\r\n<br/>\r\nTotal: 50 horas/aula', 'Consulte nossos preços e promoções', 'Apresentar cópia simples dos documentos ou os ORIGINAIS, para que a EFV tire xerox e providencie a NECESSÁRIA conferência. Nesse caso, será cobrado R$0,20 por face de cada documento xerocopiado:<br/><br/>\r\n\r\n• Carteira de Identidade ( mínimo 21 anos )<br/>\r\n• CPF<br/>\r\n• Título de Eleitor<br/>\r\n• Carteira de Reservista<br/>\r\n• Certificado do Curso de Formação de Vigilantes<br/>\r\n• CTPS - Carteira de Trabalho<br/>\r\n• Exame médico e Exame Psicotécnico<br/>\r\n• Atestado de Antecedentes Criminais<br/>\r\n• Comprovante de Residência (com CEP) - conta de luz, conta de TV a cabo, telefone ou correspondência bancária de preferência em nome do(a) aluno(a) ou dos pais.<br/>\r\n• Quitação da Justiça Eleitoral<br/>\r\n• Certidões negativadas.', 'Será ministrado em conformidade ao que estabelece o Currículo Oficial da Portaria 3233/12 do Ministério da Justiça, aplicado em um a única fase, através de atividades práticas e simuladas, utilizando-se os recursos didáticos e equipamentos necessários à instrução tais como salas de aula equipadas com retro projetores e quadro negro/branco, veículo convencional, carabina cal. 12 tipo Pump Action com coronha curta ou empunhadura tipo pistola choque cilíndrico e Pistola calibre .380.', 'Ao final do curso será realizada uma única avaliação de aprendizagem, por matéria, sendo considerado aprovado o aluno que obtiver um mínimo de 6 (seis) pontos num máximo de 10 (dez) pontos.\r\n', '2021-01-09', 'Aulas aos sábados das 12h as 18h', '1609990579.jpg', '2021-01-05'),
(4, 'Extensão em escolta armada', 'Dotar o aluno de conhecimentos que o capacite ao desempenho das atribuições de prover a segurança na escolta armada, adotando medidas preventivas e repressivas ante possíveis ataques.\r\n', 'PROGRAMA E CARGA HORÁRIA<br/><br/>\r\n\r\nLegislação Aplicada - 05 horas/aula<br/>\r\nEscolta Armada - 10 horas/aula<br/>\r\nResolução das Situações de Emergências - 10 horas/aula<br/>\r\nArmamento e Tiro - 18 horas/aula<br/>\r\nVerificação de Aprendizagem - 07 horas/aula<br/><br/>\r\n\r\nTotal: 50 horas/aula', 'Consulte nossos preços e promoções', 'Apresentar cópia simples dos documentos ou os ORIGINAIS, para que a EFV tire xerox e providencie a NECESSÁRIA conferência. Nesse caso, será cobrado R$0,20 por face de cada documento xerocopiado:<br/><br/>\r\n\r\n• Carteira de Identidade ( mínimo 21 anos )<br/>\r\n• CPF<br/>\r\n• Título de Eleitor<br/>\r\n• Carteira de Reservista<br/>\r\n• Certificado do Curso de Formação de Vigilantes<br/>\r\n• CTPS - Carteira de Trabalho<br/>\r\n• Exame médico e Exame Psicotécnico<br/>\r\n• Atestado de Antecedentes Criminais<br/>\r\n• Comprovante de Residência (com CEP) - conta de luz, conta de TV a cabo, telefone ou correspondência bancária de preferência em nome do(a) aluno(a) ou dos pais.<br/>\r\n• Quitação da Justiça Eleitoral<br/>\r\n• Certidões negativadas.', 'Será ministrado em conformidade ao que estabelece o Currículo Oficial da Portaria 3233/12 do Ministério da Justiça, aplicado em um a única fase, através de atividades práticas e simuladas, utilizando-se os recursos didáticos e equipamentos necessários à instrução tais como salas de aula equipadas com retro projetores e quadro negro/branco, veículo convencional, carabina cal. 12 tipo Pump Action com coronha curta ou empunhadura tipo pistola  choque cilíndrico e Pistola calibre .380.\r\n', 'Ao final do curso será realizada uma única avaliação de aprendizagem, por matéria, sendo considerado aprovado o aluno que obtiver um mínimo de 6 (seis) pontos num máximo de 10 (dez) pontos.', '2021-01-22', 'Aulas aos sábados das 12h as 18h', '1609990644.jpg', '2021-01-05'),
(5, 'Extensão em segurança pessoal privada', 'Dotar o aluno de conhecimentos ,técnicas , habilidades e atitudes que o capacitem para o exercício da atividade de segurança pessoal privada, adotando medidas preventivas e repressivas ante possíveis ataques às pessoas que protege .\r\n', 'Grade Curricular<br/><br/>\r\nA) Disciplinas Curriculares....................46 h/a<br/>\r\nB) Verificação de Aprendizagem.................4 h/a<br/><br/>\r\n\r\nTOTAL..........................................50 h/a<br/><br/>\r\n\r\n\r\n1- Legislação Aplicada - 4 hora/aula<br/>\r\n2- Segurança Pessoal Privada - 12 horas/aula<br/>\r\n3- Resolução das Situações de Emergência - 8 horas/aula<br/>\r\n4- Armamento E Tiro - 12 horas/aula<br/>\r\n5- Defesa Pessoal - 10 horas/aula<br/>\r\n<br/>\r\n\r\nTOTAL - 50 horas/aula', 'Consulte nossos preços e promoções', 'Apresentar cópia simples dos documentos ou os ORIGINAIS, para que a EFV tire xerox e providencie a NECESSÁRIA conferência. Nesse caso, será cobrado R$0,20 por face de cada documento xerocopiado:<br/><br/>\r\n\r\n• Carteira de Identidade ( mínimo 21 anos )<br/>\r\n• CPF<br/>\r\n• Título de Eleitor<br/>\r\n• Carteira de Reservista<br/>\r\n• Certificado do Curso de Formação de Vigilantes<br/>\r\n• CTPS - Carteira de Trabalho<br/>\r\n• Exame médico e Exame Psicotécnico<br/>\r\n• Atestado de Antecedentes Criminais<br/>\r\n• Comprovante de Residência (com CEP) - conta de luz, conta de TV a cabo, telefone ou correspondência bancária de preferência em nome do(a) aluno(a) ou dos pais.<br/>\r\n• Quitação da Justiça Eleitoral<br/>\r\n• Certidões negativadas.', 'Será ministrado de conformidade com o estabelecido na Portaria 3233/12 do Ministério da Justiça. O curso é aplicado em uma única fase, visando o preparo profissional do aluno através de atividades práticas e simuladas, trazendo-o o mais próximo possível da realidade nas mais diversas situações em que devam ser aplicadas as regras e medidas de segurança.', 'Ao final do curso será realizada uma única avaliação de aprendizagem(prova objetiva), por matéria, sendo considerado aprovado o aluno que obtiver um mínimo de 6 (seis) pontos num máximo de 10 (dez) pontos. A avaliação de aprendizagem da matéria Armamento e Tiro será realizada de forma prática.', '2021-01-26', 'Aulas aos sábados das 12h as 18h', '1609990729.jpg', '2021-01-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeriafotos`
--

CREATE TABLE `galeriafotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagem` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `galeriafotos`
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
-- Estrutura para tabela `galeriavideos`
--

CREATE TABLE `galeriavideos` (
  `id` int(10) UNSIGNED NOT NULL,
  `video` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `galeriavideos`
--

INSERT INTO `galeriavideos` (`id`, `video`) VALUES
(5, 'oPezSqJgAAE'),
(6, 'wgRYWJXocpM');

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacoes`
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
-- Despejando dados para a tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `email`, `telefone1`, `telefone2`, `telefone3`, `telefone4`, `facebook`, `instagram`) VALUES
(1, '44031-125', 'Travessa Mantinha', '50', '', NULL, 'Sítio Novo ', 'BA', 'efv_esc@uol.com.br ', '(75) 3624-3088 ', '(75) 3624-1993', '(75) 3022-7665', '(75) 99131-6651', 'https://www.facebook.com/EFV-Vigilantes-104812794540465/', 'https://www.instagram.com/efvvigilantes/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicacoes`
--

CREATE TABLE `publicacoes` (
  `id` int(10) NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(80) DEFAULT NULL,
  `datapublicacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `titulo`, `resumo`, `descricao`, `imagem`, `datapublicacao`) VALUES
(2, 'Número de vigilantes privados é quase 5 vezes maior que efetivo do Exército', 'Número de vigilantes privados supera o de policiais em vários estados.\r\nMoradores pagam cada vez mais caro para reforçar a segurança.', 'O medo de assaltos tem feito moradores de condomínios pagarem cada vez mais caro para reforçar a segurança. O reflexo disso é que o número de vigilantes não para de crescer. O contingente de vigilância privada do país já é quase cinco vezes maior que todo o efetivo do Exército.\r\n<br>\r\nCrianças e idosos na praça. Cena típica de interior no meio do Rio de Janeiro. Mas por toda parte, há olhos atentos observando tudo. Primeiro, foram instaladas as cancelas. Depois vieram as guaritas, as grades e o serviço de vigias e vigilantes. E com tudo isso, segundo os moradores, veio a tranquilidade.\r\n<br>\r\nEm uma área com 40 prédios, onde vivem 13 mil pessoas, a sensação de segurança tem um preço e os moradores estão dispostos a pagar. O custo para cada prédio: R$ 7 mil. “É a solução que nós temos. Porque nós vamos ficar à mercê dos bandidos, dos assaltantes? Nós tivemos que recorrer a isso e não nos arrependemos, não”, diz Denise Corrêa, presidente da associação de moradores.\r\n<br>\r\nBom Dia Brasil: Como a senhora se sente tendo que pagar por segurança?<br>\r\nMirian Sander (vice-presidente da associação de moradores): Olha, a segurança em si que deveria ser a pública, eles não têm homens suficientes que possam garantir. Então, tivemos que apelar para segurança privada.\r\n<br>\r\nOs moradores contam hoje com 50 vigias e vigilantes 24 horas por dia. É um serviço cada vez mais requisitado nas grandes cidades por quem busca mais segurança, principalmente em condomínios.\r\n<br>\r\nNo estado do Rio, o número de vigilantes subiu de 86 mil para 91 mil desde 2013, quase o dobro do efetivo da Policia Militar. O crescimento foi registrado também em todo o país: já são 989 mil vigilantes, quase cinco vezes o contingente do Exército brasileiro.\r\n<br>\r\nO vigilante precisa passar por um curso com um mês de duração que inclui aulas de defesa pessoal e tiro. Esses cursos são fiscalizados pela Polícia Federal. Depois, ele é autorizado a usar arma de fogo.\r\n<br>\r\n“Quando ocorrer algum ilícito, ele tem o poder para intervir e fazer cessar esse ilícito e deter as pessoas as pessoas envolvidas”, explica Marcelo Daemon, delegado da Polícia Federal.\r\n<br>\r\nMas o serviço de vigilância só é permitido em áreas particulares, proibido em vias públicas.\r\n<br>\r\nO Sindicato das Empresas de Segurança Privada alerta: é preciso cuidado para não contratar empresas clandestinas, sem autorização da Polícia Federal. “O risco é responder por severas ações a nível de constrangimento ilegal, a nível de um profissional atuando inadequadamente”, afirma Manoel dos Anjos Almeida, vice-presidente do Sindicato das Empresas de Segurança Privada do Rio de Janeiro.\r\n<br>\r\nOs moradores de um condomínio também decidiram se unir para enfrentar a violência. Além de vigias, eles contrataram vigilantes armados, que fazem rondas constantes sobre duas rodas.\r\n<br>\r\nHoje, segurança é o maior gasto da associação de moradores: cada um paga R$ 1 mil por mês. Preço alto por um pouco mais de paz.\r\n<br>\r\n“É um custo que os moradores julgam necessário para dar essa sensação de segurança”, afirma um morador.', '1609883941.jpg', '2021-01-05'),
(3, 'STJ reconhece aposentadoria especial para vigilantes', 'A Primeira Seção do Superior Tribunal de Justiça (STJ) decidiu ontem (9) reconhecer que vigilantes, quer trabalhem armados ou não, têm direito à aposentadoria especial', 'A Primeira Seção do Superior Tribunal de Justiça (STJ) decidiu ontem (9)vreconhecer que vigilantes, quer trabalhem armados ou não, têm direito àvaposentadoria especial. <br>\r\nA questão foi decidida durante o julgamento de três processos que tratavam do reconhecimento da contagem diferenciada do tempo de serviço para solicitar o benefício no Instituto Nacional do Seguro Social (INSS).\r\nApesar do entendimento, a União pode recorrer da decisão. A discussão envolve o reconhecimento da periculosidade no exercício das atividades dos vigilantes. Até abril de 1995, era permitido o reconhecimento da periculosidade por meio de qualquer comprovação dos riscos da profissão. Porém, a partir da edição da Lei 9.032/1995 e do Decreto 2.172/1997, o enquadramento passou a ser conforme a comprovação de exposição a agentes nocivos. Dessa forma, os vigilantes não tiveram mais direito à aposentadoria especial e diversas ações foram protocoladas em todo o país em busca do reconhecimento da nocividade do trabalho.<br>\r\nPor unanimidade, o colegiado do STJ reconheceu o direito dos vigilantes à aposentadoria especial e definiu a seguinte tese, que poderá ser seguida em casos semelhantes:<br>\r\n“É admissível o reconhecimento da especialidade da atividade de vigilante, com ou sem arma de fogo, em data posterior a Lei 9.032/1995 e ao Decreto 2.172/1997, desde que haja comprovação da efetiva nocividade da atividade por qualquer meio de prova até 5 de março de 1997 (data do decreto) e, após essa data, mediante apresentação de laudo técnico ou elemento material equivalente para comprovar a permanente, não ocasional, nem intermitente, exposição a agente nocivo que coloque em risco a integridade física do segurado”.<br>\r\nAndré Richter - Repórter da Agência Brasil - Brasília<br>\r\nEdição: Aline Lea', '1609965341.jpg', '2021-01-05'),
(4, 'Projeto inclui direitos humanos nos cursos de formação de agentes de segurança ', 'Autor da proposta, Fabiano Contarato diz que é essencial engajar agentes de segurança na luta antirracista\r\n', 'Motivado pela morte de João Alberto Silveira Freitas, um homem negro espancado por dois seguranças de empresa contratada pela rede de supermercados Carrefour, o senador Fabiano Contarato (Rede-ES) apresentou um projeto de lei que determina a inclusão, em cursos de capacitação de agentes de segurança pública e privada, de conteúdos relacionados a direitos humanos e combate ao racismo, à violência de gênero, à homofobia e outras formas de discriminação.\r\n\r\nPara Contarato, “o assassinato de uma pessoa negra não é fato isolado, não é tragédia ocasional, não é fatalidade esporádica”. O senador observa que a violência “atingiu seu ápice”. Segundo ele, a proposta pretende reverter essa violência crescente que gera vítimas fatais de forças policiais e de agentes de segurança de empresas privadas.\r\n\r\n“É fundamental engajar agentes de segurança na luta antirracista. Incluir conteúdos relacionados aos direitos humanos e ao combate a preconceitos nos processos de formação e aperfeiçoamento desses agentes tem o potencial de revolucionar as práticas e rotinas, contribuindo para fazer deles atores de transformação, e não mais de reprodução do racismo estrutural da sociedade brasileira”, argumenta.\r\n\r\nDe acordo com o projeto (PL 5.245/2020), os cursos destinados à formação e ao aperfeiçoamento de agentes de segurança incluirão conteúdos relacionados aos direitos humanos, liberdades fundamentais e princípios democráticos. Também haverá conteúdos de combate ao racismo, à violência de gênero, ao preconceito por orientação sexual e identidade de gênero, à xenofobia, à intolerância religiosa e ao preconceito contra pessoas com necessidades especiais.\r\n\r\nFonte: Agência Senado', '1609884367.jpg', '2021-01-05'),
(5, 'Formação de vigilantes ainda é considerado insuficiente', 'Embora representem pouco mais da metade da força de segurança no País, os vigilantes têm uma formação que especialistas consideram curta e insuficiente. ', 'Embora representem pouco mais da metade da força de segurança no País, os vigilantes têm uma formação que especialistas consideram curta e insuficiente. Eles também defendem que é necessário haver maior fiscalização tanto por parte do poder público quanto das empresas que contratam esses serviços, para evitar casos de violência extrema, abuso e preconceito, como o que ocorreu em um Carrefour de Porto Alegre na quinta-feira passada. O debate sobre a segurança privada voltou a ganhar espaço após João Alberto Silveira Freitas, de 40 anos, ser espancado e morto por um vigilante e um policial militar temporário que fazia bico. O caso se soma a outros tantos ocorridos em estabelecimentos... ', '1609884533.jpg', '2021-01-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `seo`
--

CREATE TABLE `seo` (
  `id` int(10) UNSIGNED NOT NULL,
  `analytics` varchar(80) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `seo`
--

INSERT INTO `seo` (`id`, `analytics`, `description`, `keywords`) VALUES
(1, 'UA-60987813-1', 'Escola feirense de formação de  vigilantes, a EFV tem mais de 30 anos de experiencia no mercado de formac1ão de profissionais.', 'formacao de vigilantes, vigilantes na bahia, escola de vigilantes em sitio novo, segurança privada, segurança armada, reciclagem de vigilantes, curso de formacao de vigilantes, curso de vigilantes, curso de segurança de carro forte,\r\n');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Felipe Sergio', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Netto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'EFV Vigilantes', 'efv_esc@uol.com.br', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blocos`
--
ALTER TABLE `blocos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `galeriafotos`
--
ALTER TABLE `galeriafotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `galeriavideos`
--
ALTER TABLE `galeriavideos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `certificados`
--
ALTER TABLE `certificados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
