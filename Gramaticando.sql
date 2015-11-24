-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2015 às 22:53
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
CREATE DATABASE IF NOT EXISTS `gramaticando` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `gramaticando`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `item1`, `item2`, `item3`, `item4`, `id_quest`, `err1`, `err2`, `err3`, `err4`) VALUES
(1, 'aquí, abajo, ahora', 'arriba, cerca, bien', 'delante, dentro, derecha', 'demasiado, todo, allí', 1, 'Os dois primeiros são locativos, mas o terceiro é de tempo.', 'Os dois primeiros são locativos, mas o terceiro é de modo', 'Item correto', 'Os dois primeiros são advérbios de quantidade e o terceiro é de lugar'),
(2, 'Conociendo la mala noticia, nervioso y habló con impaciencia.', 'Mañana el coro cantar afinadamente en la presentación.', 'Durante el interrogatorio, el sospechoso se puso muy tranquila.', 'Hoy no va a ir a la escuela.', 2, 'Há apenas um advérbio "impacientemente".', 'Há apenas um advérbio "afinadamente", advérbio de modo.', 'Item correto', 'Não há advérbios.'),
(3, 'Unidad que significa acción o procedimiento y puede expresar la forma, tiempo, persona y número', 'Modificación de la expresión del verbo denota una condición de lugar, tiempo, modo, la intensidad, la condición, entre otras, y juega, sintácticamente, la función adverbial diputado.', 'Clase responsable de definir o calificar el sustantivo en forma, tiempo y lugar Palabra.', 'Clase designar los nombres de objetos, se puede dividir en específico y común.', 3, 'Nãoo significa ação isso é função do verbo, e não expressa pessoa ou número.', 'Item correto', 'Esta é função do adjetivo.', 'Esta é a função dos substantivos. '),
(4, 'El sufrido tiempo no ha pasado muy rápido, infelizmente.', 'El tiempo pasó suficientemente majestuosa.', 'Realmente, el tiempo pasa demasiado rápido.', 'Sí, ha pasado el tiempo corto.', 4, 'Apenas um advérbio, infelizmente de modo.', 'Apenas um advérbio, bastante de intensidade.', 'Item correto', 'Apenas um advérbio, sim de confirmação.'),
(5, 'adverbios de tiempo, lugar, modo, intensidad y afirmación.', 'adverbios de modo, tiempo, intensidad, afirmación y negación.', 'Los adverbios de duda, tiempo, lugar, modo y intensidad.', 'adverbios de tiempo, lugar, modo, la afirmación y duda.', 5, 'Item correto', 'A ordem está errada e não há advérbio de negação.', 'A ordem está errada e não há advérbios de dúvida e intensidade.', 'A ordem está certa mas não há advérbios de afirmação e dúvida.'),
(6, 'en cima', 'cima', 'encima', 'emcima', 6, 'Significa no topo.', 'Significa topo.', 'Item correto', 'Nãoo existe esse vocábulo no espanhol.'),
(7, 'Posiblemente voy a viajar a Sao Paulo.', 'María era aproximadamente de unos 15 años.', 'Las tareas se realizaron concurrentemente.', 'Los resultados llegaron demasiadamiente tarde.', 7, 'Possivelmente advérbio de dúvida.', 'Aproximadamente advérbio de aproximação.', 'Item correto', 'Demasiadamente é advérbio de intensidade.'),
(8, 'Allí', 'Ali', 'Alli', 'Alí', 8, 'Item correto', 'Não existe esse vocábulo no espanhol.', 'Não existe esse vocábulo no espanhol.', 'Não existe esse vocábulo no espanhol.'),
(9, 'Demasiado', 'Alredor', 'Lellos', 'Lejos', 9, 'É um advérbio de intensidade, mas não se encaixa na frase.', 'É um advérbio de lugar', 'Não existe esse vocábulo no espanhol.', 'Item correto'),
(10, 'Pedro se siente muy mal.', 'Su hija siempre la llama los domingos.', 'Nunca se acuesta antes de medianoche.', 'michelly tomó el helado hoy.', 10, 'Item correto', 'Há um advérbio de tempo.', 'Há um advérbio de tempo.', 'Há um advérbio de tempo.'),
(11, '¿Quieres ver una película?', 'No rompió el vaso adrede.', 'Tienes que llegar temprano a la cita.', 'aquí es muy caliente.', 11, 'Não há advérbios.', 'Item correto', 'Há um advérbio de tempo.', 'Há um advérbio de intensidade.'),
(12, 'incluso', 'sin embargo', 'aún', 'no obstante', 12, 'A tradução é mesmo', 'A tradução é no entanto.', 'Item correto', 'A tradução é não obstante.'),
(13, 'La vista se pierde en el horizonte', 'Es seguro ir a caminar, paso a paso.', 'un hombre que vivía en las montañas.', 'la deliciosa sensación de dignidad y libertad.', 13, 'No horizonte, advÃ©rbio de lugar.', 'Passo a passo, advÃ©rbio de modo.', 'Nas montanhas, advÃ©rbio de lugar.', 'Item correto'),
(14, 'Se quedá muy tranquilo.', 'Mañana, no vamos a ir al cine.', 'El dáa de ayer muchacho cantó desafinando.', 'Pací­ficamente, se ha celebrado hoy, el juego.', 14, 'Item correto', 'Há dois advérbios amanhã de tempo e não de negação.', 'Há dois advérbios, ontem de tempo e desafinadamente de modo.', 'HÃ¡ dois advÃ©rbios, pacificamente de modo e hoje de tempo.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `quests`
--

INSERT INTO `quests` (`id`, `quest`, `dica`, `itemcorect`) VALUES
(1, 'Los artículos a continuación, que contiene sólo los adverbios locativos:', 'Relacionado a posição, espaço.', 3),
(2, 'Hay dos advérbios todas las alternativas, excepto en:', 'São advérbios de tempo e intensidade.', 3),
(3, 'Se entiende por advérbio:', 'Pode ser classificado em vários tipos.', 2),
(4, 'Compruebe la alternativa que se añadieron sólo adverbios a la frase: ". Ha passado el tiempo":', 'O item b tem apenas um advérbio.', 3),
(5, 'Nota las palabras: I. hoy. II. Aquí­. III. Rápidamente. IV. Suficiente. V. Seguramente. Se clasifican, respectivamente, como:', 'Há um advérbio de afirmación.', 1),
(6, 'Complete la oración: La ropa sucia está __________ de la lavadora.\n', 'É diferente do português.', 3),
(7, 'La opción donde hay un adverbio expresar instancia de tiempo es:', 'Demasiado é um advérbio de intensidade.', 3),
(8, 'Complete la oración: La bola se ha desplazado hasta _______.', 'Se fala ají.', 1),
(9, 'Complete la oración: Mario se marchó ________ de la ciudad.', 'É um advérbio de intensidade.', 4),
(10, 'Selecione a frase que contenha o Advérbio de Modo.', 'Outro advérbio presente é de tempo.', 1),
(11, 'Selecione a frase que contenha o Advérbio de Modo.', 'O primeiro item não contém advérbio.', 2),
(12, 'El advérbio todaví­a puede ser substituido por:', 'Tem a mesma tradução.', 3),
(13, 'Compruebe la sentencia que no tiene adverbial.', 'Uma locução adverbial ocorre quando duas,três ou mais palavras exercem função de advérbio e substantivo.', 4),
(14, 'En todas las alternativas que hay dos adverbios, excepto en:', 'Apenas um advérbio.', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `pontuacao`) VALUES
(1, 'Dhonata', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
