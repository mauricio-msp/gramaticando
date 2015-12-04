-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2015 às 01:13
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gramaticando`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE IF NOT EXISTS `itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item1` varchar(255) NOT NULL,
  `item2` varchar(255) NOT NULL,
  `item3` varchar(255) NOT NULL,
  `item4` varchar(255) NOT NULL,
  `id_quest` int(11) NOT NULL,
  `err1` varchar(255) NOT NULL,
  `err2` varchar(255) NOT NULL,
  `err3` varchar(255) NOT NULL,
  `err4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `item1`, `item2`, `item3`, `item4`, `id_quest`, `err1`, `err2`, `err3`, `err4`) VALUES
(1, 'aquÃ­, abajo, ahora ', 'arriba, cerca, bien ', 'delante, dentro, derecha	 ', 'demasiado, todo, allÃ­', 1, 'Os dois primeiros sÃ£o locativos, mas o terceiro Ã© de tempo.', 'Os dois primeiros sÃ£o locativos, mas o terceiro Ã© de modo.', 'Item correto', 'Os dois primeiros sÃ£o advÃ©rbios de quantidade e o terceiro Ã© de lugar'),
(2, 'Conociendo la mala noticia, nervioso y hablÃ³ con impaciencia. ', 'MaÃ±ana el coro cantar afinadamente en la presentaciÃ³n. ', 'Durante el interrogatorio, el sospechoso se puso muy tranquila.', 'Hoy no va a ir a la escuela. ', 2, 'HÃ¡ apenas um advÃ©rbio "impacientemente", advÃ©rbio de modo.', 'HÃ¡ apenas um advÃ©rbio "afinadamente", advÃ©rbio de modo.', 'Item correto', 'HÃ¡ apenas um advÃ©rbio â€œhojeâ€, advÃ©rbio de modo.'),
(3, 'Unidad que significa acciÃ³n o procedimiento y puede expresar la forma, tiempo, persona y nÃºmero.', 'ModificaciÃ³n de la expresiÃ³n del verbo denota una condiciÃ³n de lugar, tiempo, modo, la intensidad, la condiciÃ³n, entre otras, y juega, sintÃ¡cticamente, la funciÃ³n adverbial diputado.', 'Clase designar los nombres de objetos, se puede dividir em propio y comÃºn. ', 'Palabra que da caracterÃ­sticas al sustantivo.', 3, 'NÃ£o significa aÃ§Ã£o isso Ã© funÃ§Ã£o do verbo, e nÃ£o expressa pessoa ou nÃºmero.', 'Item correto', 'Esta Ã© a funÃ§Ã£o dos substantivos.', 'Esta Ã© funÃ§Ã£o do adjetivo.'),
(4, 'adverbios de tiempo, lugar, modo, intensidad y afirmaciÃ³n.', 'adverbios de modo, tiempo, intensidad, afirmaciÃ³n y negaciÃ³n.', 'Los adverbios de duda, tiempo, lugar, modo y intensidad.', 'adverbios de tiempo, lugar, modo, la afirmaciÃ³n y duda.(', 4, 'Item correto', 'A ordem estÃ¡ errada e nÃ£o hÃ¡ advÃ©rbio de negaÃ§Ã£o.', 'A ordem estÃ¡ errada e nÃ£o hÃ¡ advÃ©rbios de dÃºvida e intensidade.', 'A ordem estÃ¡ certa mas nÃ£o hÃ¡ advÃ©rbios de afirmaÃ§Ã£o e dÃºvida.'),
(5, 'en cima', 'cima', 'encima', 'emcima', 5, 'Significa no topo.', 'Significa topo.', 'Item correto', 'NÃ£o existe esse vocÃ¡bulo no espanhol.'),
(6, 'AllÃ­', 'Ali', 'Alli', 'AlÃ­', 6, 'Item correto', 'NÃ£o existe esse vocÃ¡bulo no espanhol.', 'NÃ£o existe esse vocÃ¡bulo no espanhol.', 'NÃ£o existe esse vocÃ¡bulo no espanhol.'),
(7, 'Demasiado', 'Alredor', 'Lellos', 'Lejos', 7, 'Ã‰ um advÃ©rbio de intensidade, mas nÃ£o se encaixa na frase.', 'Ã‰ um advÃ©rbio de lugar.', 'NÃ£o existe esse vocÃ¡bulo no espanhol.', 'Item correto'),
(8, 'Pedro se siente muy mal.', 'Su hija siempre la llama los domingos.', 'Nunca se acuesta antes de medianoche.', 'Michelly tomÃ³ el helado hoy.', 8, 'Item correto', 'HÃ¡ um advÃ©rbio de tempo.', 'HÃ¡ um advÃ©rbio de tempo.', 'HÃ¡ um advÃ©rbio de tempo.'),
(9, 'Â¿Quieres ver una pelÃ­cula? No, gracias.', 'No rompiÃ³ el vaso adrede.', 'Tienes que llegar temprano a la cita.', 'AquÃ­ es muy caliente.', 9, 'NÃ£o hÃ¡ advÃ©rbios.', 'Item correto', 'HÃ¡ um advÃ©rbio de tempo.', 'HÃ¡ um advÃ©rbio de intensidade.'),
(10, 'incluso', 'sin embargo', 'aÃºn', 'no obstante', 10, 'A traduÃ§Ã£o Ã© mesmo.', 'A traduÃ§Ã£o Ã© no entanto.', 'Item correto', 'A traduÃ§Ã£o Ã© nÃ£o obstante.'),
(11, 'Se quedÃ¡ muy tranquilo.', 'MaÃ±ana, no vamos a ir al cine.', 'El dÃ¡a de ayer muchacho cantÃ³ desafinando.', 'PacÃ­Â­ficamente, se ha celebrado hoy, el juego.', 11, 'Item correto', 'HÃ¡ dois advÃ©rbios amanhÃ£ de tempo e nÃ£o de negaÃ§Ã£o.', ' HÃ¡ dois advÃ©rbios, ontem de tempo e desafinadamente de modo.', 'HÃ¡ dois advÃ©rbios, pacificamente de modo e hoje de tempo.'),
(12, 'La vista se pierde en el horizonte', 'Es seguro ir a caminar, paso a paso.', 'Un hombre que vivÃ­a en las montaÃ±as.', 'La deliciosa sensaciÃ³n de dignidad y libertad.', 12, 'No horizonte, advÃ©rbio de lugar.', 'Passo a passo, advÃ©rbio de modo.', 'Nas montanhas, advÃ©rbio de lugar.', 'Item correto'),
(13, 'Posiblemente voy a viajar a Sao Paulo.', 'MarÃ­a era aproximadamente de unos 15 aÃ±os.', 'Las tareas se realizaron concurrentemente.', 'Los resultados llegaron demasiadamiente tarde.', 13, 'Possivelmente advÃ©rbio de dÃºvida.', 'Aproximadamente advÃ©rbio de aproximaÃ§Ã£o.', 'Item correto', 'Demasiadamente Ã© advÃ©rbio de intensidade.'),
(14, 'El sufrido tiempo no ha pasado muy rÃ¡pido, infelizmente.', 'El tiempo pasÃ³ suficientemente majestuosa.', 'Realmente, el tiempo pasa demasiado rÃ¡pido.', 'SÃ­, ha pasado el tiempo corto.', 14, 'Apenas um advÃ©rbio, infelizmente de modo.', 'Apenas um advÃ©rbio, bastante de intensidade.', 'Item correto', 'Apenas um advÃ©rbio, curto de modo.'),
(15, 'Los soldados lucharon estoicamente a la muerte.', 'Impuestos sugiriÃ³ irÃ³nicamente que los candidatos serÃ¡n sometidos a otra prueba.', 'Posiblemente habrÃ¡ una nueva oportunidad.', 'En el momento de la discusiÃ³n, algunos invitados se fueron sutilmente sin decir adiÃ³s.', 15, 'Estoicamente, advÃ©rbio de modo.', 'Ironicamente, advÃ©rbio de modo.', 'Item correto', 'Sutilmente, advÃ©rbio de modo.'),
(16, '"Y AHORA requiere tambiÃ©n era"', '"ESA NOCHE despertado"', '"No eran TODAVÃA locutores males"', '"...ya que los hombres aÃºn NO habÃ­an llegado..."', 16, 'Nele hÃ¡ um advÃ©rbio de tempo.', 'Nele hÃ¡ uma locuÃ§Ã£o adverbial, esta noite.', 'Nele hÃ¡ um advÃ©rbio, ainda de tempo.', 'Item correto'),
(17, 'No quiero.', 'AllÃ­ es el material.', 'Todo estÃ¡ correcto.', 'Tal vez Ã©l habla.', 17, 'NÃ£o, advÃ©rbio de negaÃ§Ã£o.', 'Ali, advÃ©rbio de lugar.', 'Item correto', 'Talvez, advÃ©rbio de dÃºvida.'),
(18, 'Ella realmente se perdiÃ³.', 'Ella habla bien.', 'Antiguamente era mundo mÃ¡s pacÃ­fico.', 'Yo estaba muy cansado.', 18, 'Realmente Ã© um, advÃ©rbio de afirmaÃ§Ã£o.', 'Item correto.', 'Antigamente Ã© um advÃ©rbio de tempo.', 'Muito Ã© um advÃ©rbio de intensidade.'),
(19, 'Modo - Intensidad - Intensidad', 'Modo - Tiempo - intensidad.', 'Tiempo - Tiempo - Modo', 'Objetivo - modo - Intensidad', 19, 'A segunda expressÃ£o Ã© de tempo.', 'Item correto.', 'A primeira expressÃ£o Ã© de modo e a terceira Ã© de intensidade.', 'A primeira expressÃ£o Ã© de modo e a segunda Ã© de tempo.'),
(20, 'De traz', 'DetrÃ¡s', 'AtrÃ¡s', 'TrÃ¡s', 20, 'NÃ£o existe esse vocÃ¡bulo no espanhol.', 'Item correto.', 'Significa de volta.', 'Significa atrÃ¡s, se encaixa na frase, mas nÃ£o Ã© a melhor opÃ§Ã£o.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quests`
--

DROP TABLE IF EXISTS `quests`;
CREATE TABLE IF NOT EXISTS `quests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quest` varchar(255) NOT NULL,
  `dica` varchar(255) NOT NULL,
  `itemcorect` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `quests`
--

INSERT INTO `quests` (`id`, `quest`, `dica`, `itemcorect`) VALUES
(1, 'Los artÃ­culos a continuaciÃ³n, que contiene sÃ³lo los adverbios locativos:', 'En relacion con el espacio posicion.', 3),
(2, 'Hay dos advÃ©rbios todas las alternativas, excepto en:', 'Son los adverbios de tiempo y la intensidad.', 3),
(3, 'Se entiende por advÃ©rbio:', 'Se puede clasificar en varios tipos.', 2),
(4, 'Nota las palabras: I. hoy. II. AquÃ­Â­. III. RÃ¡pidamente. IV. Suficiente. V. Seguramente. Se clasifican, respectivamente, como:', 'Hay un adverbio Afirmacion.', 1),
(5, 'Complete la oraciÃ³n: La ropa sucia estÃ¡ __________ de la lavadora.', 'Es diferente del portugues', 3),
(6, 'Complete la oraciÃ³n: La bola se ha desplazado hasta _______.', 'Se habla adi.', 1),
(7, 'Complete la oraciÃ³n: Mario se marchÃ³ ________ de la ciudad.', 'Es un adverbio de intensidad.', 4),
(8, 'Selecione a frase que contenha o AdvÃ©rbio de Modo.', 'otro adverbio que es los articulos es el tiempo.', 1),
(9, 'Selecione a frase que contenha o AdvÃ©rbio de Modo.', 'El primer elemento contiene ningun adverbio.', 2),
(10, 'El advÃ©rbio todavÃ­a puede ser substituido por:', 'Tiene la misma traduccion.', 3),
(11, 'En todas las alternativas que hay dos adverbios, excepto en:', 'El cuarto punto tiene dos adverbios.', 1),
(12, 'Compruebe la sentencia que no tiene una locuciÃ³n adverbial.', 'La locuciÃ³n adverbial se produce cuando dos, tres o mÃ¡s palabras ejercen la funciÃ³n de adverbio y sustantivo.', 4),
(13, 'La opciÃ³n donde hay un adverbio expresar instancia de tiempo es:', 'Demasiado es un adverbio intensidad.', 3),
(14, 'Compruebe la alternativa que se aÃ±adieron sÃ³lo adverbios a la frase: ". Ha passado el tiempo":', 'El artÃ­culo b tiene solamente un adverbio.', 3),
(15, 'Los adverbios en "mente" de las alternativas siguientes para describir la misma condiciÃ³n, excepto en:', 'El artÃ­culo correcto es un adverbio duda', 3),
(16, 'Todas las expresiones en mayÃºsculas abajo asumen la vez condiciÃ³n de tiempo excepto:', 'Los ejemplos de adverbios de tiempo: hoy, ayer, ahora.', 4),
(17, 'SÃ³lo no hay adverbio en:', 'Palabra invariante que funciona como un modificador de un verbo', 3),
(18, 'CuÃ¡l de los siguientes tiene un adverbio de modo?', 'Ellos son los que nos dicen cÃ³mo sucediÃ³ algo, que pasÃ³, sucediÃ³.', 2),
(19, 'Las expresiones con tanto celo, siempre y muy, dan sentido a:', 'La Ãºltima expresiÃ³n es la intensidad.', 2),
(20, 'Complete la frase: ________ de ese edificio estÃ¡ el mercado.', 'La primera palabra no existe en espaÃ±ol.', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_quest` int(11) NOT NULL,
  `item_select` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `pontuacao` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
