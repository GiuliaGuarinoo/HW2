-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Lug 12, 2023 alle 11:06
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DB_HW2`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `books`
--

CREATE TABLE `books` (
  `id_book` varchar(45) NOT NULL,
  `isbn` varchar(14) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `lang` varchar(45) NOT NULL,
  `cover` varchar(400) NOT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELAZIONI PER TABELLA `books`:
--

--
-- Dump dei dati per la tabella `books`
--

INSERT INTO `books` (`id_book`, `isbn`, `title`, `author`, `lang`, `cover`, `status`) VALUES
('64ad35c5268a9', '9780233985176', 'Eden', 'Stanislaw Lem', 'Italiano', 'http://books.google.com/books/content?id=V2B1AAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL),
('64ad36636a16d', '9788883910678', 'Totò Sapore e la storia della pizza', 'Anonimo', 'Italiano', 'http://books.google.com/books/content?id=HtI3AAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL),
('64ad37310ec9e', '9798386754518', 'Il manuale degli scacchi', 'Paul King', 'Italiano', 'images/libri.png', 'GG'),
('64ad38197fcce', '9788834739686', 'Maze Runner', 'James Dashner', 'Italiano', 'http://books.google.com/books/content?id=6kpSzQEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 'ruredzen'),
('64ad3f90ce0ef', '9788804646846', 'Le Cronache Di Narnia', 'C.S. Lewis', 'Italiano', 'http://books.google.com/books/content?id=F2iOoAEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL),
('64ad427c5f001', '9788804716709', 'Hunger Games - Il Canto Della Rivolta', 'Suzanne Collins', 'ITA', 'http://books.google.com/books/content?id=MAvEygEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL),
('64ad565189542', '9788807902901', 'Ventimila leghe sotto i mari', 'Verne', 'Italiano', 'http://books.google.com/books/content?id=nkkCtAEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL),
('64ad578ae05c1', '9788834731024', '2001 Odissea nello spazio', 'Clarke', 'Italiano', 'http://books.google.com/books/content?id=jBsOkAEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL),
('64ae65498d0aa', '9788852240805', 'La carica dei 101', 'Disney', 'Italiano', 'http://books.google.com/books/content?id=6W55zwEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL),
('64ae668393d8e', '9788855050135', 'In cucina con Harry Potter', 'Dinah Bucholz', 'Italiano', 'http://books.google.com/books/content?id=MKWnywEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 'Fagiolin');

-- --------------------------------------------------------

--
-- Struttura della tabella `provincie`
--

CREATE TABLE `provincie` (
  `Nome` varchar(40) NOT NULL,
  `Sigla` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELAZIONI PER TABELLA `provincie`:
--

--
-- Dump dei dati per la tabella `provincie`
--

INSERT INTO `provincie` (`Nome`, `Sigla`) VALUES
('Agrigento', 'AG'),
('Alessandria', 'AL'),
('Ancona', 'AN'),
('Aosta', 'AO'),
('Arezzo', 'AR'),
('Ascoli Piceno', 'AP'),
('Asti', 'AT'),
('Avellino', 'AV'),
('Bari', 'BA'),
('Barletta-Andria-Trani', 'BT'),
('Belluno', 'BL'),
('Benevento', 'BN'),
('Bergamo', 'BG'),
('Biella', 'BI'),
('Bologna', 'BO'),
('Bolzano', 'BZ'),
('Brescia', 'BS'),
('Brindisi', 'BR'),
('Cagliari', 'CA'),
('Caltanissetta', 'CL'),
('Campobasso', 'CB'),
('Carbonia-Iglesias', 'CI'),
('Caserta', 'CE'),
('Catania', 'CT'),
('Catanzaro', 'CZ'),
('Chieti', 'CH'),
('Como', 'CO'),
('Cosenza', 'CS'),
('Cremona', 'CR'),
('Crotone', 'KR'),
('Cuneo', 'CN'),
('Enna', 'EN'),
('Fermo', 'FM'),
('Ferrara', 'FE'),
('Firenze', 'FI'),
('Foggia', 'FG'),
('Forl�-Cesena', 'FC'),
('Frosinone', 'FR'),
('Genova', 'GE'),
('Gorizia', 'GO'),
('Grosseto', 'GR'),
('Imperia', 'IM'),
('Isernia', 'IS'),
('L\'Aquila', 'AQ'),
('La Spezia', 'SP'),
('Latina', 'LT'),
('Lecce', 'LE'),
('Lecco', 'LC'),
('Livorno', 'LI'),
('Lodi', 'LO'),
('Lucca', 'LU'),
('Macerata', 'MC'),
('Mantova', 'MN'),
('Massa-Carrara', 'MS'),
('Matera', 'MT'),
('Medio Campidano', 'VS'),
('Messina', 'ME'),
('Milano', 'MI'),
('Modena', 'MO'),
('Monza e della Brianza', 'MB'),
('Napoli', 'NA'),
('Novara', 'NO'),
('Nuoro', 'NU'),
('Ogliastra', 'OG'),
('Olbia-Tempio', 'OT'),
('Oristano', 'OR'),
('Padova', 'PD'),
('Palermo', 'PA'),
('Parma', 'PR'),
('Pavia', 'PV'),
('Perugia', 'PG'),
('Pesaro e Urbino', 'PU'),
('Pescara', 'PE'),
('Piacenza', 'PC'),
('Pisa', 'PI'),
('Pistoia', 'PT'),
('Pordenone', 'PN'),
('Potenza', 'PZ'),
('Prato', 'PO'),
('Ragusa', 'RG'),
('Ravenna', 'RA'),
('Reggio Calabria', 'RC'),
('Reggio Emilia', 'RE'),
('Rieti', 'RI'),
('Rimini', 'RN'),
('Roma', 'RM'),
('Rovigo', 'RO'),
('Salerno', 'SA'),
('Sassari', 'SS'),
('Savona', 'SV'),
('Siena', 'SI'),
('Siracusa', 'SR'),
('Sondrio', 'SO'),
('Taranto', 'TA'),
('Teramo', 'TE'),
('Terni', 'TR'),
('Torino', 'TO'),
('Trapani', 'TP'),
('Trento', 'TN'),
('Treviso', 'TV'),
('Trieste', 'TS'),
('Udine', 'UD'),
('Varese', 'VA'),
('Venezia', 'VE'),
('Verbano-Cusio-Ossola', 'VB'),
('Vercelli', 'VC'),
('Verona', 'VR'),
('Vibo Valentia', 'VV'),
('Vicenza', 'VI'),
('Viterbo', 'VT');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `username` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cognome` varchar(35) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELAZIONI PER TABELLA `users`:
--

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`username`, `email`, `nome`, `cognome`, `password`) VALUES
('AIRAM', 'airam@utente.it', 'Maria', 'La Terra', '$2y$10$L0LGTeRxJ0RoyYoEIazbferGjw/kwumMETUHlxogwz2IjOZhyADPO'),
('DoppiaG', 'doppiag@utente.it', 'Giulia', 'Guarino', '$2y$10$uGpqVlBgngvP5Yhs1QE9xel2QfpDHXaofi4Zpkz2AZZL/Ndvr0rQy'),
('Fagiolin', 'fagiolin@utente.it', 'Enrica', 'Guarino', '$2y$10$HKKVI7P3vdKERnvouYAxEO1aChOB9KJwq8Ke.0iQYvPBIbfAMrX.2'),
('GG', 'gg@utente.it', 'Giovanni', 'Cassarino', '$2y$10$tKhVLfTgUcPHKeHBIyJLvOYPG8Nc61OdeQcOqgHAepz5Pa28dfU7i'),
('Pina', 'pina@utente.it', 'Giuliana', 'Distefano', '$2y$10$Jt9F.fAgdBCGB4pzLs15j.jHxKUtWBITpswtT9FtHlzzC7jnp9vu2'),
('ruredzen', 'peppegac@live.com', 'Giuseppe', 'Dibartolo', '$2y$10$NT5T5TV4Xl83FBpWhq8Itur2Y0EohQSMbViyNHGeGzJgPoGyRByvC');

-- --------------------------------------------------------

--
-- Struttura della tabella `uses`
--

CREATE TABLE `uses` (
  `id_uses` int(11) NOT NULL,
  `id_book` varchar(45) NOT NULL,
  `username` varchar(40) NOT NULL,
  `place` varchar(90) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `when_release_found` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type_book` tinyint(1) NOT NULL COMMENT '1 = libro trovato\r\n0 = libro lasciato\r\n2 = libro rilasciato'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELAZIONI PER TABELLA `uses`:
--   `id_book`
--       `books` -> `id_book`
--   `username`
--       `users` -> `username`
--

--
-- Dump dei dati per la tabella `uses`
--

INSERT INTO `uses` (`id_uses`, `id_book`, `username`, `place`, `provincia`, `when_release_found`, `type_book`) VALUES
(83, '64ad35c5268a9', 'DoppiaG', 'Centro Commerciale Culturale', 'Ragusa', '2023-05-11 10:58:13', 0),
(84, '64ad36636a16d', 'DoppiaG', 'Centro Commerciale Culturale', 'Ragusa', '2023-07-11 11:00:52', 0),
(85, '64ad37310ec9e', 'DoppiaG', 'Parco Madre Teresa di Calclutta', 'Catania', '2023-07-01 11:04:17', 0),
(86, '64ad38197fcce', 'Fagiolin', 'Piazza Castello', 'Torino', '2023-07-08 11:08:10', 0),
(87, '64ad3f90ce0ef', 'Fagiolin', 'Parco del Valentino', 'Torino', '2023-07-11 11:40:01', 0),
(88, '64ad37310ec9e', 'ruredzen', NULL, NULL, '2023-07-10 11:49:08', 1),
(89, '64ad427c5f001', 'ruredzen', 'Parco del Valentino', 'Torino', '2023-07-11 11:52:29', 0),
(90, '64ad38197fcce', 'ruredzen', NULL, NULL, '2023-07-11 11:53:15', 1),
(91, '64ad37310ec9e', 'ruredzen', 'Area BookCrossing Reggia di Venaria', 'Torino', '2023-07-11 11:55:15', 2),
(92, '64ad565189542', 'GG', 'Marina Di Ragusa - p.zza duca', 'Ragusa', '2023-07-11 13:17:32', 0),
(93, '64ad578ae05c1', 'GG', 'Villa Comunale Area book crossing', 'Palermo', '2023-07-11 13:22:19', 0),
(94, '64ad35c5268a9', 'GG', NULL, NULL, '2023-07-11 13:23:58', 1),
(95, '64ae65498d0aa', 'Fagiolin', 'Genova Centro Area Bookcrossing', 'Genova', '2023-07-12 08:33:47', 0),
(96, '64ad36636a16d', 'Fagiolin', NULL, NULL, '2023-07-12 08:34:48', 1),
(97, '64ad36636a16d', 'Fagiolin', 'Parco Madre Teresa di Calclutta', 'Catania', '2023-07-12 08:35:40', 2),
(98, '64ae668393d8e', 'AIRAM', 'Marina di Ragusa - P.zza malta', 'Ragusa', '2023-07-12 08:38:28', 0),
(99, '64ae668393d8e', 'Fagiolin', NULL, NULL, '2023-07-12 08:38:56', 1),
(100, '64ad37310ec9e', 'GG', NULL, NULL, '2023-07-12 08:45:20', 1),
(101, '64ad35c5268a9', 'GG', 'Valle dei templi', 'Agrigento', '2023-07-12 08:45:58', 2);

--
-- Trigger `uses`
--
DELIMITER $$
CREATE TRIGGER `UPDATE_BOOKS` AFTER INSERT ON `uses` FOR EACH ROW BEGIN
	IF NEW.type_book = 1
    THEN
    	UPDATE books b
        SET b.status = NEW.username
        WHERE b.id_book = NEW.id_book;
     END IF;
     
     IF (NEW.type_book = 0 OR NEW.type_book = 2)
     THEN
     	UPDATE books b
        SET b.status = NULL
        WHERE b.id_book = NEW.id_book;
      END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struttura della tabella `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELAZIONI PER TABELLA `zones`:
--   `provincia`
--       `provincie` -> `Nome`
--

--
-- Dump dei dati per la tabella `zones`
--

INSERT INTO `zones` (`id`, `provincia`, `nome`) VALUES
(14, 'Agrigento', 'Valle dei templi'),
(6, 'Catania', 'Parco Madre Teresa di Calclutta'),
(12, 'Genova', 'Genova Centro Area Bookcrossing'),
(11, 'Palermo', 'Villa Comunale Area book crossing'),
(5, 'Ragusa', 'Centro Commerciale Culturale'),
(10, 'Ragusa', 'Marina Di Ragusa - p.zza duca'),
(13, 'Ragusa', 'Marina di Ragusa - P.zza malta'),
(9, 'Torino', 'Area BookCrossing Reggia di Venaria'),
(8, 'Torino', 'Parco del Valentino'),
(7, 'Torino', 'Piazza Castello');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- Indici per le tabelle `provincie`
--
ALTER TABLE `provincie`
  ADD PRIMARY KEY (`Sigla`),
  ADD UNIQUE KEY `Nome` (`Nome`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indici per le tabelle `uses`
--
ALTER TABLE `uses`
  ADD PRIMARY KEY (`id_uses`),
  ADD KEY `uses_ibfk_1` (`id_book`),
  ADD KEY `uses_ibfk_2` (`username`);

--
-- Indici per le tabelle `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provincia` (`provincia`,`nome`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `uses`
--
ALTER TABLE `uses`
  MODIFY `id_uses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT per la tabella `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `uses`
--
ALTER TABLE `uses`
  ADD CONSTRAINT `uses_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `uses_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Limiti per la tabella `zones`
--
ALTER TABLE `zones`
  ADD CONSTRAINT `zones_ibfk_1` FOREIGN KEY (`provincia`) REFERENCES `provincie` (`Nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
