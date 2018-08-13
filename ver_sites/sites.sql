-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql202.epizy.com
-- Tempo de Geração: 10/08/2018 às 21:01:14
-- Versão do Servidor: 5.6.35-81.0
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `rfgd_19849246_marlon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `site` varchar(40) DEFAULT NULL,
  `endereco` mediumtext,
  `assunto` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=170 ;

--
-- Extraindo dados da tabela `sites`
--

INSERT INTO `sites` (`id`, `site`, `endereco`, `assunto`) VALUES
(3, 'Fórmula do primeiro emprego: 3 passos s', 'http://devsamurai.com.br/formula-do-primeiro-emprego-3-passos-simples-para-trabalhar-como-programador-mesmo-se-voce-nao-tem-experiencia-nenhuma/', 'Outros'),
(11, 'Emulador Online', 'http://emulator.online/', 'Lazer'),
(14, 'freecodecamp', 'https://www.freecodecamp.org/challenges/learn-how-freecodecamp-works', 'Programação'),
(15, 'feed de leitura', 'https://github.com/Mendrone/Feed-De-Leitura/blob/master/README.md', 'Programação'),
(16, 'desenhos!', 'https://www.dailymotion.com/video/x2eci6p', 'Lazer'),
(19, 'Programação - Novidades!', 'https://www.tecmundo.com.br/programacao', 'Programação'),
(20, 'Programação - Tableless', 'https://tableless.com.br/', 'Programação'),
(26, 'Código limpo, ler', 'https://tableless.com.br/codigo-limpo-escreva-seu-codigo-hoje-sem-esquecer-da-manutencao-de-amanha/', 'Programação'),
(31, 'Sistemas: 10 coisas indispensáveis', 'https://focuslojas.com.br/2014/06/10-funcionalidades-que-um-software-de-loja-precisa-ter/', 'Programação'),
(36, 'Manual do Homem Moderno', 'https://manualdohomemmoderno.com.br/video/comportamento', 'Filosofia'),
(43, 'Psicologia Explica', 'http://www.psicologiaexplica.com.br/', 'Filosofia'),
(44, 'Contatos sociais - ler', 'http://www.psicologiaexplica.com.br/habilidades-sociais-parte-1-voce-sabe-se-comunicar/', 'Filosofia'),
(49, 'Aqui - Cadastro Básico', 'https://www.youtube.com/watch?v=yuiqxXVYzbE', 'Programação'),
(53, 'Assistir - Videos de Prog', 'https://www.youtube.com/user/bonieky/videos', 'Programação'),
(54, 'SHEMALE', 'https://www.xvideos.com/video19264835/pretty_ladyboy_shemale_anal_quickie_with_the_photographer', NULL),
(59, 'SHEMALE big cock', 'https://www.xvideos.com/video26068581/small_tits_ladyboy_with_a_huge_cock_fucked_in_the_ass', NULL),
(69, 'Relacionando tabelas!!!!', 'http://blog.thiagobelem.net/relacionamento-de-tabelas-no-mysql', 'Programação'),
(70, 'Crás - Ver', 'https://www.youtube.com/watch?v=LO910klwyCs', 'Outros'),
(71, 'Exibindo dados - DataGridView', 'https://www.youtube.com/watch?v=SWKPJ9lix54', 'Programação'),
(72, 'BD em C#: Método Simples!', 'https://www.youtube.com/watch?v=0VFVFaBlc4Q&list=PLSsil-rBcZTt0sRz3xWfHI2-5glUHqTQl', 'Programação'),
(73, 'Visual Studio 2012 LEVE', 'http://www.malavida.com/en/soft/visual-studio-2012/download', 'Programação'),
(163, 'Ã¡Ã©Ã­Ã³Ã³Ãº', '', 'programaÃ§Ã£o'),
(75, 'SQL - 10 instruções', 'https://www.devmedia.com.br/10-instrucoes-sql-para-manipulacao-de-dados/4832?utm_source=facebook.com&utm_medium=post&utm_campaign=Artigos+-+Envolvimento&utm_content=10+Instru%C3%A7%C3%B5es+SQL+para+manipula%C3%A7%C3%A3o+de+dados', 'Programação'),
(77, '13 coisas para ser um programador de suc', 'https://becode.com.br/conhecimentos-essenciais-programador/', 'Programação'),
(79, 'PHP Tècnicas', 'https://imasters.com.br/desenvolvimento/solid-com-php/?trace=1519021197&source=single', 'Programação'),
(81, 'gerar relatorios pdf em php', 'http://www.fpdf.org', 'Programação'),
(83, 'Autodesk - AUTOCAD', 'https://www.autodesk.com/education/free-software/autocad', 'Outros'),
(84, 'Segurança no sistema web', 'https://canaltech.com.br/software/Blinde-sua-aplicacao-web-PHP-com-estas-15-dicas-de-seguranca/', 'Programação'),
(85, 'Upload de img PHP', 'https://php.eduardokraus.com/upload-de-imagens-com-php', 'Programação'),
(91, 'Login PHP', 'https://www.wikitechy.com/portuguese-forum/qual-melhor-maneira-de-criar-um-sistema-de-login-com-php-2/', 'Programação'),
(101, 'Curso de NodeJs - Aula 9', 'https://jornadadodev.com.br/cursos/curso-de-nodejs/aula-09-mongodb-introducao', 'programação'),
(104, 'Quadrinhos Eróticos - Gurcan Gursel', 'http://zizki.com/gurcan-gursel', 'lazer'),
(106, 'Quadrinhos Eróticos - Gurcan Gursel 2', 'https://br.pinterest.com/search/pins/?q=Gurcan%20Gursel%20cartoon&rs=guide&term_meta[]=Gurcan%7Ctyped&term_meta[]=Gursel%7Ctyped&add_refine=cartoon%7Cguide%7Cword%7C0', 'lazer'),
(107, 'Prevenindo SQL Injection', 'https://websitebeaver.com/prepared-statements-in-php-mysqli-to-prevent-sql-injection', 'programação'),
(108, 'Código SQL para exportar tabelas', 'http://www.dicas-l.com.br/arquivo/exportacao_de_dados_de_tabelas_mysql_em_formato_texto_ou_csv.php#.WpQ12iXwbIU', 'programação'),
(109, 'Verificando HTML', 'https://www.devmedia.com.br/sera-que-o-meu-html-esta-pronto/39485?utm_source=facebook.com&utm_medium=cpc&utm_campaign=DevCast+-+Tr%C3%A1fego&utm_content=DevCast+39485', 'programação'),
(110, 'Etapas na criação de um site', 'https://gw2d.com.br/artigos/7-etapas-da-criacao-de-um-site', 'programação'),
(111, 'Documentação de código', 'http://www.linhadecodigo.com.br/artigo/1494/aprendendo-a-documentar-o-seu-codigo.aspx', 'programação'),
(112, 'PDO - ótima aula', 'https://websitebeaver.com/php-pdo-prepared-statements-to-prevent-sql-injection', 'programação'),
(117, 'Arch Enemy clip', 'https://www.youtube.com/watch?v=7GXIqR7P5ZQ', 'lazer'),
(121, 'Paraíso - EXPLORAR', 'http://www.hentai-foundry.com/', 'lazer'),
(123, 'Série - Silicon Valley', 'http://www.tuaserie.com/serie/assistir-silicon-valley/', 'lazer'),
(124, 'Armando Huerta - Mulheres incríveis!', 'http://armandohuertastore.com/', 'lazer'),
(125, 'Curso de Laravel', 'https://www.especializati.com.br/tutorial/curso-de-laravel-53-instalando', 'programação'),
(126, 'Ducktales', 'https://www.animesonline.co/episode/ducktales-1x8/', 'lazer'),
(127, 'Curso de NodeJs', 'https://www.schoolofnet.com/curso-iniciando-com-nodejs/579', 'programação'),
(128, 'Forum', 'https://www.clubedohardware.com.br/forums/forum/16-programa%C3%A7%C3%A3o-web/', 'programação'),
(130, 'The IT Crowd', 'http://popcornfilmes.net/Novo/All/series/the-it-crowd.html', 'lazer'),
(131, 'mPDF', 'http://www.devwilliam.com.br/php/gerar-pdf-com-php-e-a-biblioteca-mpdf', 'programação'),
(132, 'Desenhos porn Carnigor', 'http://carnigor.com/', 'lazer'),
(133, 'Senha em pastas web', 'https://wiki.locaweb.com.br/pt-br/Proteger_diret%C3%B3rios_com_senha_-_Painel_cPanel', 'programação'),
(134, 'Ícones', 'https://www.iconfinder.com/', 'programação'),
(135, 'Webcomics', 'https://papodehomem.com.br/webcomics-lista-definitiva-melhores/', 'lazer'),
(136, 'Filo Bedo - Pinup', 'http://cfilobedo.blogspot.com.br/?zx=27a75d9104b637c9', 'lazer'),
(137, 'Elias Silveira Ilustrador', 'https://www.facebook.com/eliassilveirailustrador/', 'lazer'),
(138, 'HTML - Paleta de cores modernas', 'https://flatuicolors.com/', 'programação'),
(139, 'Pica-Quero!!!!', 'https://www.animesonlinetk.info/170546', 'lazer'),
(141, 'Fontes para CSS', 'https://fonts.google.com/', 'programação'),
(143, 'Felipe Kimio - Pinup', 'https://kimisz.tumblr.com/', 'lazer'),
(151, 'CURSOS GRÁTIS WEB!!!!', 'https://jornadadodev.com.br/cursos', 'programação'),
(152, 'Silicon Valley - Backup', 'https://assistirminhaserie.com/2017/11/18/silicon-valley/', 'lazer'),
(153, 'Desenhos clássicos', 'http://hipertela.net/tv-online1/tom-e-jerry.php', 'lazer'),
(154, 'Curso de alemão', 'https://www.loecsen.com/pt/curso-alemao', 'outros'),
(155, 'Curso de Nodejs - aula 9', 'https://jornadadodev.com.br/cursos/curso-de-nodejs/aula-09-executando-uma-funcao-callback', 'programação'),
(156, 'shemale asian TOP', 'https://www.xvideos.com/video4492820/soapy_shemales_thai_ladyboy_massage', 'lazer'),
(157, 'The IT Crowd', 'http://s2br.com/assistir-the-it-crowd-online/', 'programação'),
(158, 'Como criar um sistema financeiro', 'https://www.dicionariofinanceiro.com/fluxo-de-caixa/', 'programação'),
(165, 'Bunny Bound - Desenhos erÃ³ticos bizarro', 'http://bunny-bound.com/comic/', 'lazer'),
(166, 'Shemale BIG cock', 'https://www.xvideos.com/video26068581/small_tits_ladyboy_with_a_huge_cock_fucked_in_the_ass', 'programaÃ§Ã£o'),
(167, 'Shemale BIG cock 2', 'https://www.xvideos.com/video19264835/pretty_ladyboy_shemale_anal_quickie_with_the_photographer', 'programaÃ§Ã£o'),
(168, 'Shemale BIG cock', 'https://www.xvideos.com/video19264835/pretty_ladyboy_shemale_anal_quickie_with_the_photographer', 'lazer'),
(169, 'Shemale BIG cock 2', 'https://www.xvideos.com/video26068581/small_tits_ladyboy_with_a_huge_cock_fucked_in_the_ass', 'lazer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
