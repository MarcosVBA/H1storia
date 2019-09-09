-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2018 at 10:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6266042_h1storia`
--
CREATE DATABASE IF NOT EXISTS `id6266042_h1storia` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6266042_h1storia`;

-- --------------------------------------------------------

--
-- Table structure for table `Alternativas`
--

CREATE TABLE `Alternativas` (
  `alternativaID` int(4) NOT NULL,
  `exeID` int(4) NOT NULL,
  `descAlternativa` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `respostaAlternativa` int(1) NOT NULL,
  `imgAlternativa` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Alternativas`
--

INSERT INTO `Alternativas` (`alternativaID`, `exeID`, `descAlternativa`, `respostaAlternativa`, `imgAlternativa`) VALUES
(1, 1, 'Em Ajaccio, na Ilha de Córsega.', 1, NULL),
(2, 1, 'Na Guiana Francesa.', 0, NULL),
(3, 1, 'No Congo africano, antigo Zaire.', 0, NULL),
(4, 1, 'Em Senegal.', 0, NULL),
(5, 2, 'Ocorreu em 1820', 0, NULL),
(6, 2, 'Ocorreu em 1799', 1, NULL),
(7, 2, 'Ocorreu em 1780', 0, NULL),
(9, 2, 'Ocorreu em 1250', 0, NULL),
(10, 2, 'Ocorreu em 1790', 0, NULL),
(11, 3, 'O estabelecimento do catolicismo cristão e romano como religião de Estado', 0, NULL),
(12, 3, 'A descentralização das atividades econômicas, o que permitia que as economias locais prosperassem sem o pagamento de impostos', 0, NULL),
(13, 3, 'A adoção do Código Civil, que garantia a liberdade individual, a igualdade perante a lei e o direito à propriedade privada', 1, NULL),
(14, 3, 'O estímulo, por parte das leis francesas, à criação de sindicatos de trabalhadores, livres da influência do Estado', 0, NULL),
(15, 3, 'A estatização de toda a propriedade agrícola, comercial e industrial nas regiões dominadas pelo exército napoleônico', 0, NULL),
(16, 4, 'Após o bloqueio continental, em todos os Estados submetidos à dominação napoleônica, os operários e os camponeses, beneficiados pela prosperidade econômica, atuaram na defesa de Napoleão contra o nacionalismo das elites locais', 0, NULL),
(17, 4, 'A Inglaterra, procurando manter-se longe dos problemas do continente, isolou-se e não interveio nos conflitos desencadeados pelos anseios de Napoleão de construir um Império', 0, NULL),
(18, 4, 'A Espanha, vinculada à França pela dinastia dos Bourbon desde o século XVIII, não reagiu à dominação francesa. Em nome do respeito às suas tradições e ao seu nacionalismo, a Espanha aceitou a soberania estrangeira imposta por Napoleão', 0, NULL),
(19, 4, 'Em 1812, Napoleão estabeleceu sólida aliança com o Papa, provocando a adesão generalizada dos católicos. Temporariamente, os surtos nacionalistas foram controlados, o que o levou a garantir suas progressivas vitórias na Rússia', 0, NULL),
(20, 4, 'Herdeira da Filosofia das Luzes, a ideia de nação, tal como difundida na França, fundou-se sobre uma concepção universalista do homem e de seus direitos naturais. Essa concepção, porém, pressupunha o princípio do direito dos povos de dispor sobre si mesmos', 1, NULL),
(26, 8, 'A Independência dos Estados Unidos. Com a atenção da Inglaterra voltada para as batalhas com a marinha napoleônica, os colonos americanos declararam sua independência, vencendo rapidamente os ingleses', 0, NULL),
(27, 8, 'A formação da Santa Aliança, um pacto militar entre Áustria, Prússia, Inglaterra e Rússia que evitou a eclosão de movimentos revolucionários na Europa e impediu a independência das colônias espanholas e inglesas na América', 0, NULL),
(28, 8, 'A Independência do Brasil. Com a ocupação de Portugal pelas tropas napoleônicas, houve um enfraquecimento da monarquia portuguesa que culminou com as lutas pela independência e o rompimento de D. Pedro I com Portugal', 0, NULL),
(29, 8, 'A Independência das colônias espanholas. Em 1808 a Espanha foi ocupada pelas tropas napoleônicas ao mesmo tempo em que se difundiam os ideais liberais da Revolução Francesa que inspirou as lutas pela independência', 1, NULL),
(30, 8, 'O Congresso de Viena. A França de Napoleão assinou um pacto com a Áustria, Inglaterra e Rússia cujo objetivo maior era estabelecer uma trégua e reorganizar todo o mapa europeu', 0, NULL),
(31, 9, 'defesa do liberalismo e auxílio aos movimentos socialistas na Europa', 0, NULL),
(32, 9, 'restabelecimento das fronteiras anteriores a  1789 e isolamento da França do cenário político europeu', 0, NULL),
(33, 9, 'valorização das aristocracias em toda a Europa continental e ascensão dos girondinos no governo da França a partir de 1815', 0, NULL),
(34, 9, 'reentronização das casas reais destituídas pelos exércitos napoleônicos e criação de um pacto político de equilíbrio entre as potências europeias', 1, NULL),
(35, 9, 'apoio aos movimentos republicanos e concentração de poderes na coroa britânica, permitindo a esta a utilização da sua marinha de guerra como instrumento contra-revolucionário', 0, NULL),
(36, 10, 'O estabelecimento do catolicismo cristão e romano como religião de estado', 0, NULL),
(37, 10, 'A descentralização das atividades econômicas, o que permitia que as economias locais prosperassem sem o pagamento de impostos', 0, NULL),
(38, 10, 'A adoção do Código Civil que garantia a liberdade individual, a igualdade perante a lei e o direito à propriedade privada', 1, NULL),
(39, 10, 'O estímulo, por parte das leis francesas, à criação de sindicatos de trabalhadores, livres da influência do Estado', 0, NULL),
(40, 10, 'A estatização de toda a propriedade agrícola, comercial e industrial nas regiões dominadas pelo exército napoleônico', 0, NULL),
(41, 11, 'tornou-se a mais importante referência da vitória do liberalismo na Europa, na medida em que defendia a legitimidade de todas as dinastias que aceitavam a limitação dos seus poderes por meio de cartas constitucionais', 0, NULL),
(42, 11, 'países como a Inglaterra, Portugal e a Espanha, os mais prejudicados com o expansionismo napoleônico, defendiam que a França deveria tornar-se republicana, com o intuito de evitar novos surtos revolucionários', 0, NULL),
(43, 11, 'foi orientado, entre outros, pelo princípio da legitimidade - que determinava a volta ao poder das antigas dinastias reinantes no período pré-revolucionário, além do recebimento de volta dos territórios que possuíam em 1789', 0, NULL),
(44, 11, 'criou, a partir da sugestão do representante da Prússia, um organismo multinacional, a Santa Aliança, que detinha a tarefa de incentivar regimes absolutistas a se modernizarem com o objetivo de sufocar as lutas populares', 0, NULL),
(45, 11, 'presidido pelo chanceler austríaco Metternich, mas controlado pelo chanceler francês Talleyrand, decidiu-se por uma solução conciliatória após o caos napoleônico: haveria a restauração das dinastias, mas não a volta das antigas fronteiras', 1, NULL),
(46, 12, 'Com a queda da Bastilha, símbolo do autoritarismo real, os deputados da Assembleia Constituinte, aproveitando o momento político, proclamaram a República, pondo um termo final ao Antigo Regime', 0, NULL),
(47, 12, 'Em meio ao caos provocado pela fuga do Rei e pela derrocada da Monarquia, iniciou-se, em Paris, a criação de uma sociedade baseada nos ideais socialistas, a Comuna de Paris', 0, NULL),
(48, 12, 'O período conhecido como o Grande Terror foi protagonizado pelo jacobino Robespierre, que posteriormente foi derrubado por Napoleão, um general que se destacara por sua trajetória vitoriosa', 0, NULL),
(49, 12, 'Durante um curto período de tempo, após a queda de Bastilha, a França vivenciou uma Monarquia Constitucional, mas, na prática, o Rei ainda mantinha a mesma autoridade de antes', 0, NULL),
(50, 12, 'O golpe de 18 Brumário representou a queda do Diretório, regime que se pretendia representante dos interesses burgueses, mas que era inepto a governar', 1, NULL),
(51, 13, 'O impedimento do retorno do uso de títulos de nobreza, reivindicado pelos seus generais e pela burguesia francesa que desejava tornar-se a nova elite do país', 0, NULL),
(52, 13, 'A criação do Código Civil, inspirado no direito romano e nas leis do período revolucionário, que, na sua essência, vigora até hoje na França', 1, NULL),
(53, 13, 'A abolição da escravidão nas colônias francesas, reafirmando o princípio da liberdade presente na Declaração dos Direitos do Homem e do Cidadão', 0, NULL),
(54, 13, 'A realização de uma reforma agrária, prometida, mas não efetivada, pelos jacobinos, o que garantiu a popularidade de Napoleão entre os camponeses', 0, NULL),
(55, 13, 'A criação da Constituição Civil do Clero, que proibiu toda forma de culto religioso no território francês', 0, NULL),
(61, 15, 'o rompimento entre a Igreja Católica Romana e o novo Estado Revolucionário Francês', 0, NULL),
(62, 15, 'que Napoleão estava assumindo todas as responsabilidades do Poder Moderador na França', 0, NULL),
(63, 15, 'que Napoleão, símbolo máximo da força da burguesia, considerava-se mais importante que a tradição da Igreja', 1, NULL),
(64, 15, 'a criação de uma religião de Estado, tendo como figura central o Imperador, a exemplo do Anglicanismo inglês', 0, NULL),
(74, 30, 'Somente as afirmativas III e IV estão corretas.', 0, NULL),
(75, 30, 'Somente as afirmativas I e II estão corretas.', 0, NULL),
(76, 30, 'Somente as afirmativas II e III estão corretas.', 0, NULL),
(77, 30, 'Somente as afirmativas I , II e IV estão corretas.', 0, NULL),
(78, 30, 'Todas as afirmativas estão corretas.', 1, NULL),
(79, 31, 'a OTAN visava a apaziguar os conflitos relacionados à divisão da cidade de Berlim, bem como a proteger os países sob sua influência econômica das ameaças de invasão externa e de conflitos militares.', 0, NULL),
(80, 31, 'ambos desenvolveram políticas que incentivaram a chamada corrida armamentista, que, durante o período da Guerra Fria, colocou o Planeta sob a ameaça de uma guerra nuclear.', 1, NULL),
(81, 31, 'ambos foram estabelecidos, simultaneamente, para defender os interesses dos países que disputavam, após a Segunda Guerra, uma reordenação dos espaços europeu e americano.', 0, NULL),
(82, 31, 'os países signatários do Pacto de Varsóvia se aliaram e, para defender seus interesses financeiros, formaram um bloco econômico, a fim de competir com a Alemanha, a Inglaterra e os Estados Unidos.', 0, NULL),
(83, 32, 'a crise do colonialismo, a ascensão do nacionalismo e do totalitarismo.', 1, NULL),
(84, 32, 'o enfraquecimento do império britânico, a Grande Depressão e a corrida nuclear.', 0, NULL),
(85, 32, 'o declínio britânico, o fracasso da Liga das Nações e a Revolução Cubana.', 0, NULL),
(86, 32, 'a corrida armamentista, o terceiro-mundismo e o expansionismo soviético', 0, NULL),
(87, 32, 'a Revolução Bolchevique, o imperialismo e a unificação da Alemanha.', 0, NULL),
(88, 33, 'Com o ataque a Pearl Harbor, os Estados Unidos declararam guerra ao Japão, à Alemanha e à Itália, assumindo em pouco tempo a liderança dos países ocidentais do bloco Aliado, tanto na Europa como no sudeste asiático.', 0, NULL),
(89, 33, 'A resistência soviética, principalmente na batalha de Stalingrado, enfraqueceu a capacidade militar alemã, pois aproximadamente um quarto das suas forças de guerra foram perdidas nessa batalha.', 0, NULL),
(90, 33, 'O nacional-socialismo, ou nazismo, fundamentou-se em uma doutrina cuidadosamente veiculada pelo regime dirigido por Adolf Hitler, utilizando-se de técnicas sofisticadas de propaganda política, sem nunca romper com à ordem legal republicana herdada da década de 1920 e com a importância da manutenção dos direitos individuais sobre os interesses coletivos.', 1, NULL),
(91, 33, 'O desembarque das forças aliadas na Normandia, após o dia D, favoreceu o desfecho da guerra, porque o exército alemão enfraquecido teve que se dividir no combate em duas frentes.', 0, NULL),
(92, 33, 'O primeiro ato da Segunda Guerra Mundial ocorreu no dia 1º de setembro com o ataque militar alemão à Polônia. Três dias após o início da invasão germânica, a França e a Inglaterra declararam guerra à Alemanha.', 0, NULL),
(93, 34, 'ocupação da região do Reno, desmilitarizada pelo Tratado de Versalhes.', 0, NULL),
(94, 34, 'anexação do corredor polonês, restabelecendo a relação com a Prússia.', 0, NULL),
(95, 34, 'repúdio total às imposições do Tratado de Versalhes.', 0, NULL),
(96, 34, 'ascensão de Hitler ao poder.\r\n\r\n', 0, NULL),
(97, 34, 'marchar sobre a Áustria, a sua anexação e a concretização da ideia do pangermanismo (reunificação das etnias alemãs).', 1, NULL),
(98, 35, 'russos tomam a iniciativa de anexar o território dos Estados bálticos.', 0, NULL),
(99, 35, 'alemães invadem a região mediterrânica da Ásia.', 0, NULL),
(100, 35, 'japoneses atacam a base americana de Pearl Habor.', 1, NULL),
(101, 35, 'franceses, por determinação de Petain, ocupam o sudeste da Ásia.', 0, NULL),
(102, 35, 'chineses cedem a maior parte do seu território às tropas do Eixo.', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Exercicios`
--

CREATE TABLE `Exercicios` (
  `exeID` int(4) NOT NULL,
  `perguntaExe` varchar(5500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `materiaID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Exercicios`
--

INSERT INTO `Exercicios` (`exeID`, `perguntaExe`, `materiaID`) VALUES
(1, 'Napoleão Bonaparte, apesar de ter se tornado imperador da França em 1804, não tinha nascido propriamente em território continental francês, mas em uma das províncias do antigo Estado absolutista da França. Onde nasceu Napoleão?', 3),
(2, 'Em que ano ocorreu o golpe de 18 de brumário?', 3),
(3, '(PUC-Rio) Como general, cônsul e, depois, imperador, Napoleão Bonaparte transformou a França de um país sitiado numa potência expansionista com influência em todo o continente europeu. No entanto, a expansão francesa com seus ideais burgueses encontrou muitas resistências, principalmente entre as nações dominadas por setores aristocráticos.\r\n\r\nAssinale a opção que identifica corretamente uma ação implementada pelo governo napoleônico.', 3),
(4, '(UFRGS) Por volta de 1811, o Império napoleônico atingiu o seu apogeu. Direta ou indiretamente, Napoleão dominou mais da metade do continente europeu. Tal conjuntura, no entanto, reforçou os sentimentos nacionalistas da população dessas regiões. A ideia de nação, inspirada nas próprias concepções francesas, passou a ser uma arma desses nacionalistas contra Napoleão.', 3),
(8, '(Ibmecsp 2009)  A expansão napoleônica no século XIX influenciou decisivamente vários acontecimentos históricos no período. Dentre esses acontecimentos podemos destacar:', 3),
(9, '(Ufc 2008)  Entre 1792 e 1815, a Europa esteve em guerra quase permanente. No final, os exércitos napoleônicos foram derrotados. Em seguida, as potências vencedoras, Rússia, Prússia, Grã-Bretanha e Áustria, conjuntamente com a França, reuniram-se no Congresso de Viena, que teve como consequência política a formação da Santa Aliança. A partir do comentário acima, marque a alternativa que contenha duas decisões geopolíticas aprovadas pelo citado Congresso:', 3),
(10, '(Puc-rio 2008)  Como general, cônsul e, depois, imperador, Napoleão Bonaparte transformou a França de um país sitiado numa potência expansionista com influência em todo o continente europeu. No entanto, a expansão francesa com seus ideais burgueses encontrou muitas resistências principalmente entre as nações dominadas por setores aristocráticos.\r\nAssinale a opção que identifica corretamente uma ação implementada pelo governo napoleônico\r\n', 3),
(11, '(Fgv 2008)  Os soberanos do Antigo Regime venceram Napoleão, em que eles viam o herdeiro da Revolução, e a escolha de Viena para a realização do Congresso, para a sede dos representantes de todos os Estados europeus, é simbólica, pois Viena era uma das únicas cidades que não haviam sido sacudidas pela Revolução e a dinastia dos Habsburgos era o símbolo da ordem tradicional, da Contra-Reforma, do Antigo Regime.\r\n Acerca do Congresso de Viena (1815), é correto afirmar que', 3),
(12, '(Ufrgs 2007)  Após a Revolução de 1789, a França viveu um período de grande instabilidade, marcado pelo radicalismo e pela constante ameaça externa.\r\nAssinale a alternativa correta em relação a esse período', 3),
(13, '(Ufc 2006)  Assinale a alternativa que apresenta, corretamente, uma realização de Napoleão Bonaparte, que representou uma consolidação das ideias da Revolução Francesa', 3),
(15, '(Ueg 2012)  Em 1804, Napoleão Bonaparte recebeu o título de Imperador, mediante um plebiscito. Durante sua cerimônia de coroação, ele retirou do Papa a coroa e colocou-a em sua cabeça com as próprias mãos. Esse gesto ousado representou', 3),
(30, '(PUC-RIO 2007)<br>\r\nA Segunda Guerra Mundial, que se estendeu de 1939 a 1945, se diferenciou de todas as guerras ocorridas em tempos passados, configurando um novo tipo de conflito: uma guerra total.<br>\r\n\r\nCorroboram tal afirmativa o fato de aquele conflito ter:<br>\r\n\r\nI - envolvido um número nunca visto de países e continentes.<br>\r\n\r\nII - promovido uma mobilização total de recursos humanos e materiais.<br>\r\n\r\nIII – aumentado o apelo ao trabalho feminino nos países aliados.<br>\r\n\r\nIV - acelerado o crescimento tecnológico que vinha se desenvolvendo desde o final da Primeira Guerra Mundial.', 4),
(31, 'Os anos posteriores à Segunda Guerra Mundial foram tensos entre as grandes potências mundiais. Considerando-se a Organização do Tratado do Atlântico Norte (OTAN) e o Pacto de Varsóvia, criados nesse período, é CORRETO afirmar que:', 4),
(32, 'A primeira metade do século XX foi marcada por conflitos e processos que a inscreveram como um dos mais violentos períodos da história humana. Entre os principais fatores que estiveram na origem dos conflitos ocorridos durante a primeira metade do século XX estão:', 4),
(33, 'Sobre a Segunda Guerra Mundial é INCORRETO afirmar que:', 4),
(34, '(Fundação Lusíadas – SP) Realizar o “Anchluss” era um velho sonho dos nazistas. E isso começou a ser conseguido por Hitler em março de 1938. A expressão entre aspas e a data são suficientes para elucidar o sonho nazista de:', 4),
(35, '(Fac. Med. Ribeirão Preto-SP) A Segunda Grande Guerra (1939-1945), a partir de 7 de dezembro de 1941, adquire um caráter mundial quando os:', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Itens`
--

CREATE TABLE `Itens` (
  `imgItem` blob NOT NULL,
  `descItem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nomeItem` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `itemID` int(3) NOT NULL,
  `tipoItemID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ItensUsuario`
--

CREATE TABLE `ItensUsuario` (
  `itemID` int(3) NOT NULL,
  `usuarioID` int(9) NOT NULL,
  `itemAtivo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Materias`
--

CREATE TABLE `Materias` (
  `materiaID` int(3) NOT NULL,
  `nomeMateria` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descMateria` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `imgMateira` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Materias`
--

INSERT INTO `Materias` (`materiaID`, `nomeMateria`, `descMateria`, `imgMateira`) VALUES
(3, 'Napoleão', 'Napoleão foi um dos maiores generais e lideres políticos da Historia, ', NULL),
(4, 'Segunda Guerra Mundial', 'Aprenda Sobre a maior guerra que a humanidade já viu, A Segunda Guerra', NULL),
(5, 'Guerra Civil Espanhola', 'Aprenda sobre a revolta contra o facismo na espanha e quem foi general', NULL),
(6, 'Primeira Guerra Mundial', 'O inicio da decada que seria lembrado por guerras sangrentas, a Primei', NULL),
(7, 'TEST', 'Test de matérias', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `MateriaUsuario`
--

CREATE TABLE `MateriaUsuario` (
  `materiaID` int(3) NOT NULL,
  `usuarioID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Noticia`
--

CREATE TABLE `Noticia` (
  `noticiaID` int(5) NOT NULL,
  `nomeNoticia` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descNoticia` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TipoItens`
--

CREATE TABLE `TipoItens` (
  `tipoItemID` int(4) NOT NULL,
  `nomeTipoItem` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descTipoItem` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `usuarioID` int(9) NOT NULL,
  `nomeUsuario` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `senhaUsuario` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `emailUsuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adminUsuario` int(1) NOT NULL,
  `pontosEx` int(9) NOT NULL,
  `levelUsuario` int(2) NOT NULL,
  `pontosRanking` int(4) NOT NULL,
  `dinheiroUsuario` int(9) NOT NULL,
  `ultimaDataLogada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`usuarioID`, `nomeUsuario`, `senhaUsuario`, `emailUsuario`, `adminUsuario`, `pontosEx`, `levelUsuario`, `pontosRanking`, `dinheiroUsuario`, `ultimaDataLogada`) VALUES
(40, 'Marcos', 'acf8cbff68d6d564ea92eab6ce07cfaf', 'm.vinicius123abc@gmail.com', 1, 10, 7, 1200, 510, '2018-11-26 21:39:24'),
(43, 'Savio Julian Teixeira', '23340b64a766c41cdb79b31cd15ab94f', 'Kiritojulian0@gmail.com', 1, 20, 5, 1100, 80, '2018-11-26 21:55:22'),
(51, 'julio', 'e10adc3949ba59abbe56e057f20f883e', 'julioclima@hotmail.com.br', 1, 125, 4, 350, 350, '2018-11-25 23:05:45'),
(52, 'icaro', 'e10adc3949ba59abbe56e057f20f883e', 'icarofernando@gmail.com', 1, 50, 1, 50, 50, '2018-11-23 21:55:08'),
(55, 'herculano', '72eb59f023637c8e9c5e3f7315182177', 'herculanofilho95g@gmail.com', 1, 0, 1, 0, 0, '2018-10-05 01:25:15'),
(57, 'icaro antonio', 'e10adc3949ba59abbe56e057f20f883e', 'icarofernandoantonio@gmail.com', 0, 0, 1, 0, 0, '2018-10-05 21:28:16'),
(62, 'morfetinhus', '25f9e794323b453885f5181f1b624d0b', 'morfetinhus0@gmail.com', 0, 0, 1, 0, 0, '2018-10-11 01:34:28'),
(64, 'Convidado', 'e10adc3949ba59abbe56e057f20f883e', 'test@test.com', 1, 0, 1, 0, 0, '2018-10-18 00:58:07'),
(65, 'vick', '1d5c6705edf37683721dfed9753c700d', 'viktoriacristina38@gmail.com', 0, 0, 1, 0, 0, '2018-10-18 22:18:06'),
(66, 'Giovanna 0 bala ', 'da29069a669198d98494911cd0d6eda5', 'guarientogiovanna15@gmail.com', 0, 0, 1, 0, 0, '2018-10-18 22:48:19'),
(68, 'fernas', 'e10adc3949ba59abbe56e057f20f883e', 'fernandosp@gmail.com', 0, 30, 1, 30, 30, '2018-10-19 00:05:39'),
(84, 'gomes', '72eb59f023637c8e9c5e3f7315182177', 'herculanofilho95g@gmail.cm', 0, 0, 1, 0, 0, '2018-10-23 01:40:56'),
(90, 'João Henrique R. M. de Be', '17738eaa191e26c1096c8d73e81bd0e5', 'superclash335@gmail.com', 0, 155, 8, 1280, 1280, '2018-11-26 22:02:53'),
(91, 'lu', '16eae045e31078b4e6d2578323c43521', 'santosdematoslucivania@gmail.com', 0, 0, 1, 0, 0, '2018-11-23 22:42:41'),
(92, 'Pmm', '841ec112e50e5f5d5021740e2c42e3dc', 'paulammarangon@gmail.com', 0, 30, 1, 30, 30, '2018-11-23 23:39:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Alternativas`
--
ALTER TABLE `Alternativas`
  ADD PRIMARY KEY (`alternativaID`,`exeID`),
  ADD KEY `exeID` (`exeID`);

--
-- Indexes for table `Exercicios`
--
ALTER TABLE `Exercicios`
  ADD PRIMARY KEY (`exeID`,`materiaID`),
  ADD KEY `materiaID` (`materiaID`);

--
-- Indexes for table `Itens`
--
ALTER TABLE `Itens`
  ADD PRIMARY KEY (`itemID`,`tipoItemID`),
  ADD KEY `tipoItemID` (`tipoItemID`);

--
-- Indexes for table `ItensUsuario`
--
ALTER TABLE `ItensUsuario`
  ADD PRIMARY KEY (`itemID`,`usuarioID`),
  ADD KEY `usuarioID` (`usuarioID`);

--
-- Indexes for table `Materias`
--
ALTER TABLE `Materias`
  ADD PRIMARY KEY (`materiaID`);

--
-- Indexes for table `MateriaUsuario`
--
ALTER TABLE `MateriaUsuario`
  ADD PRIMARY KEY (`materiaID`,`usuarioID`),
  ADD KEY `usuarioID` (`usuarioID`);

--
-- Indexes for table `Noticia`
--
ALTER TABLE `Noticia`
  ADD PRIMARY KEY (`noticiaID`);

--
-- Indexes for table `TipoItens`
--
ALTER TABLE `TipoItens`
  ADD PRIMARY KEY (`tipoItemID`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`usuarioID`,`emailUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Alternativas`
--
ALTER TABLE `Alternativas`
  MODIFY `alternativaID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `Exercicios`
--
ALTER TABLE `Exercicios`
  MODIFY `exeID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `Itens`
--
ALTER TABLE `Itens`
  MODIFY `itemID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Materias`
--
ALTER TABLE `Materias`
  MODIFY `materiaID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Noticia`
--
ALTER TABLE `Noticia`
  MODIFY `noticiaID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TipoItens`
--
ALTER TABLE `TipoItens`
  MODIFY `tipoItemID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `usuarioID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Alternativas`
--
ALTER TABLE `Alternativas`
  ADD CONSTRAINT `Alternativas_ibfk_1` FOREIGN KEY (`exeID`) REFERENCES `Exercicios` (`exeID`);

--
-- Constraints for table `Exercicios`
--
ALTER TABLE `Exercicios`
  ADD CONSTRAINT `Exercicios_ibfk_1` FOREIGN KEY (`materiaID`) REFERENCES `Materias` (`materiaID`);

--
-- Constraints for table `ItensUsuario`
--
ALTER TABLE `ItensUsuario`
  ADD CONSTRAINT `ItensUsuario_ibfk_1` FOREIGN KEY (`usuarioID`) REFERENCES `Usuario` (`usuarioID`),
  ADD CONSTRAINT `ItensUsuario_ibfk_2` FOREIGN KEY (`itemID`) REFERENCES `Itens` (`itemID`);

--
-- Constraints for table `MateriaUsuario`
--
ALTER TABLE `MateriaUsuario`
  ADD CONSTRAINT `MateriaUsuario_ibfk_1` FOREIGN KEY (`usuarioID`) REFERENCES `Usuario` (`usuarioID`),
  ADD CONSTRAINT `MateriaUsuario_ibfk_2` FOREIGN KEY (`materiaID`) REFERENCES `Materias` (`materiaID`);

--
-- Constraints for table `TipoItens`
--
ALTER TABLE `TipoItens`
  ADD CONSTRAINT `TipoItens_ibfk_1` FOREIGN KEY (`tipoItemID`) REFERENCES `Itens` (`tipoItemID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
