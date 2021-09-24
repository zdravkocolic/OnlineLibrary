-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2021 at 09:46 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_publisher` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_price` float DEFAULT NULL,
  `book_details` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_image`, `book_name`, `book_publisher`, `book_price`, `book_details`) VALUES
(3, 'damin gambit.jpg', 'Damin Gambit', 'Volter Tevis', 199.99, 'U njoj je ostala samo zamiÅ¡ljena Å¡ahovska tabla sa sloÅ¾enom i nereÅ¡enom pozicijom. Nije bilo zaista vaÅ¾no ko igra crnim figurama ni da li se stvarna tabla nalazi u Moskvi ili Njujorku, ili u podrumu sirotiÅ¡ta. Ova verna slika u njenoj glavi bila je njeno pravo kraljevstvo.\r\nKada je sa osam godina zavrÅ¡ila u sirotiÅ¡tu, Äinilo se da je Bet Harmon predodreÄ‘ena za sudbinu sivu i bezliÄnu poput odeÄ‡e koju je nosila. Sve dok ne odigra prvu partiju Å¡aha. Njen genijalni talenat odmah je oÄigledan â€“ dok igra, Äula joj se izoÅ¡travaju, jasnije razmiÅ¡lja, i prvi put oseÄ‡a da ima kontrolu nad svojim Å¾ivotom. Bet postaje sve bolja, a glamurozni i uzbudljivi turniri pruÅ¾aju joj nadu da je Äeka drugaÄija buduÄ‡nost na tabli sa Å¡ezdeset Äetiri polja u crno-belom svetu. Ali taj svet zamrÅ¡en je kao i njeni potezi, i iako deluje mirno i uglaÄ‘eno, krije vulkane strasti i opasnosti, i u njemu su dozvoljene najpodmuklije spletke.\r\nUlozi postaju sve veÄ‡i i dolazi trenutak da se suoÄi sa najboljim igraÄem na svetu. Da li Ä‡e iz te partije izaÄ‡i kao pobednik, ili Ä‡e zauvek ostati neugledno siroÄe koje je protraÄ‡ilo Å¾ivot?'),
(2, 'ostrvoPelikana.jpg', 'OSTRVO PELIKANA', 'Miodrag MajiÄ‡', 199.99, 'Posle romana Deca zla, koji je za godinu i po dana proÄitalo skoro trideset hiljada ljudi, Miodrag MajiÄ‡ se ponovo latio pera i podelio je sa nama priÄu koja Ä‡e nas joÅ¡ jednom navesti da se zagledamo u stvarnost Å¡irom otvorenih oÄiju i zapitamo se da li je moguÄ‡e saÄuvati sebe u druÅ¡tvu u kojem je sudbina pojedinca beznaÄajna poput zrnca peska koje vetar raznosi prenoseÄ‡i ga iz jednog godiÅ¡njeg doba u drugo.\r\n\r\nPriÄa o AjÅ¡i i Gabrielu moÅ¾e postati priÄa svakoga od nas, ali ta priÄa se veÄ‡ sada tiÄe svih nas i upravo zato Ä‡ete ovu knjigu proÄitatu u dahu, a siluete njenih junaka ukotviÄ‡e se duboko u vama, pa se nemojte iznenaditi kad ih budete prepoznali u masi bezimenih i nepoznatih ljudi na ulicama ovog grada, ali i bilo kog drugog grada na svetu.\r\n\r\nDa li ste zaista spremni da saznate kako je biti Äovek koji se viÅ¡e niÄega ne plaÅ¡i i kojem je svejedno da li Ä‡e posle ovog Å¾ivota postati drvo, kamen ili ptica?'),
(4, 'zamkaZaSnove.jpg', 'ZAMKA ZA SNOVE', 'Stiven King', 199.99, 'Nekada davno, u Deriju, opsednutom gradu, Äetiri deÄaka su uradila jednu veoma hrabru stvar. U svakom sluÄaju â€“ dobru stvar, moÅ¾da Äak i izvanrednu. NeÅ¡to Å¡to ih je promenilo na naÄin koji jedva da Ä‡e ikada razumeti.\r\n\r\nPosle dvadeset i pet godina, ti deÄaci su postali muÅ¡karci s odvojenim Å¾ivotima i problemima. Ali, veze meÄ‘u njima nisu prekinute. Svake godine, tokom sezone lova, ovi momci se ponovo sastaju u Å¡umama Mejna. Ove godine je na njihov logor naleteo izbezumljeni stranac, koji je mumlao neÅ¡to nerazumljivo o svetlima na nebu. Njegovo buncanje se pokazalo uznemirujuÄ‡e istinitim. Posle kraÄ‡eg vremena, ovi ljudi Ä‡e se upustiti u uÅ¾asavajuÄ‡u borbu sa biÄ‡em sa drugog sveta. Njihova jedina Å¡ansa za opstanak krije se u njihovoj zajedniÄkoj proÅ¡losti - i u zamci za snove.\r\n\r\nOvaj roman Stivena Kinga je prvenstveno priÄa o tome kako se muÅ¡karci seÄ‡aju i kako pronalaze hrabrost u sebi. Zamka za snove je roman zaprepaÅ¡Ä‡ujuÄ‡eg opsega â€“ King se nikada ranije nije toliko otvoreno nadmetao sa srcem tame.'),
(5, 'Benzin.jpg', 'BENZIN', 'Dragan StojanoviÄ‡', 288.99, 'Mesto i vreme deÅ¡avanje radnje, Beograd 1993. godine. Dve paralelne priÄe koje povezuje jedna Å¾ena, Lepa, tip Eve, Äije Äari fasciniraju dva meÄ‘usobno veoma razliÄita junaka....'),
(6, 'ToranjPraskozorja.jpg', 'TORANJ PRASKOZORJA', 'Sara DÅ¾. Mas', 299.99, 'Å esta knjiga najpopularnijeg tinejdÅ¾ serijala po oceni Amazona.\r\n\r\nâ€žDirljiva priÄa o teÅ¡koj borbi za oporavak i iskupljenje.â€œ Kirkus Reviews\r\n\r\nKejol Vestfal je sebe uvek video kao nepokolebljivog, odanog, snaÅ¾nog kapetana Kraljevske garde, ali sve se to promenilo kada se stakleni zamak sruÅ¡io, kada su njegovi ljudi iskasapljeni i kada ga je kralj Adarlana poÅ¡tedeo smrti, ali mu je polomio telo. Njegova poslednja i jedina nada u oporavak u rukama je legendarnih vidarki koje Å¾ive u Tore Cesmeu u gradu Antici â€“ prestonici moÄ‡nog carstva na JuÅ¾nom kontinentu.\r\n\r\nDok se rat nadvija nad Dorijanu i Elin, sve je izvesnije da Ä‡e njihov opstanak zavisiti od toga hoÄ‡e li Kejol i Nesrin ubediti vladare juÅ¾nog carstva da stupe u savez.\r\n\r\nAli ono Å¡to Ä‡e njih dvoje otkriti u Antici ne samo da Ä‡e promeniti njihove sudbine veÄ‡ Ä‡e biti presudno za spas Erileje.\r\n\r\nâ€žPoletnost i sveÅ¾ina priÄe Äine Toranj praskozorja veoma uzbudljivim romanom.â€œ Publishers Weekly\r\n\r\nâ€žU ovom nastavku Sara DÅ½. Mas sa mnogo dara i veÅ¡tine Å¡ire istraÅ¾uje svet Staklenog prestola. Napredni kaganat, multikulturno carstvo koje je zasnovano na naÅ¡em znanju o drevnoj Mongoliji, saÄinjava popriÅ¡te Tornja praskozorja.â€œ Kirkus Reviews'),
(7, 'ZivotiZaIznajmljivanje.jpg', 'Å½IVOTI ZA IZNAJMLJIVANJE', 'DuÅ¡an Miklja', 159.99, 'Naslov Å½ivoti za iznajmljivanje jeste metafora neslobode. Ona oslikava sudbine potlaÄenih i neduÅ¾nih, Å¾ednih Å¾ivota i gladnih slobode. PiÅ¡uÄ‡i o ocu koji je 1941.godine bio u zarobljeniÅ¡tvu, a potom u nemaÄkom logoru i na Golom otoku, DuÅ¡an Miklja ispripovedao je priÄu o snazi ljudskog duha.\r\n\r\nOvo je istinita priÄa o deÄaku koji nikada nije prestao da\r\nÄeka svog oca. I kada je proputovao svet stigavÅ¡i do najudaljenijih taÄaka na zemaljskoj kugli, nastavio je da\r\ntraÅ¾i deliÄ‡e slagalice koji su nedostajali kako bi oÄeva\r\nslika bila celovita. MeÄ‘utim, nakon Å¡to je sve delove stavio na njihovo mesto, na toj slici nije video samo oca, veÄ‡ i jednu porodicu, jedno detinjstvo, prizemnu kuÄ‡u na DorÄ‡olu, neumorne majÄine ruke i Å¾iÅ¡ku cigarete meÄ‘u oÄevim prstima. Godine su prolazile i odnele su u zaborav sve osim svetlosti cigarete koja je ispunila Äak i najguÅ¡Ä‡i mrak, i tako se zauvek preselila u deÄakove oÄi.'),
(8, 'ElizinaTajna.jpg', 'ELIZINA TAJNA - AuÅ¡vic: plaÄ‡ena ljubav', 'Dominik V.Retinger', 149.99, 'Godine 1943. SS je osnovao bordele za zasluÅ¾ne logoraÅ¡e. Dva takva bordela nalazila su se u okviru kompleksa logora AuÅ¡vic-Birkenau i imala su pogrdan naziv komando Puf. LogoraÅ¡ice koje su tu dovoÄ‘ene Äesto nisu znale kakva Ä‡e im biti sudbina, samo im je obeÄ‡avano da Ä‡e moÅ¾da lakÅ¡e uspeti da preÅ¾ive. Ali nije bilo tako. Ovo je priÄa o jednoj mladoj Å¾eni, njenoj borbi za opstanak i morbidnoj opsesivnoj ljubavi esesovskog oficira. Zasnovana na istorijskim Äinjenicama, ovo je potresna priÄa o preÅ¾ivelima koja Ä‡e izazvati mnogo opreÄnih emocija.\r\n\r\nâ€ž...Elizina tajna je neverovatna priÄa. Napisana nepristrasno, puna zapleta, nabijena emocijama koje vam ne dozvoljavaju da zaspite. Ne obasipa podacima, ne Å¡okira brojevima. Prikazuje tragediju pojedinca bespomoÄ‡nog pred ogromnim zlom... Retinger u ovom romanu pokazuje koliko je u situaciji ekstremne opasnosti znaÄajna uloga nagona. Kako se vrednosti gube, Å¾ivot se svodi na osnovne radnje. Da biste imali pravo da ocenjujete postupke Å¾ena iz komanda Puf, morali biste prvo i sami da doÅ¾ivete njihovu sudbinu. To je jednostavna istina koja nikada ne sme biti zaboravljena... I, na kraju, Elizina tajna je poravnanje sa oseÄ‡anjem krivice. Esesovci su takoÄ‘e imali majke, supruge, pa i decu. Neki od njihovih bliÅ¾njih prihvatili su i oprostili zloÄine ubica iz AuÅ¡vica... Retinger u svom romanu postavlja pitanje kako Å¾iveti sa saznanjem da su naÅ¡i najmiliji uÄestvovali u genocidu. Ne oÄekujte laka reÅ¡enja i jednostavne odgovore. Oni jednostavno ne postoje...â€œ\r\nâ€“ Adriana Mihalevska'),
(9, 'decaZla.jpg', 'DECA ZLA', 'Miodrag MajiÄ‡', 159.99, 'U srediÅ¡tu romana Deca zla nalazi se dramatiÄno ubistvo, a potraga za poÄiniocem biÄ‡e samo okidaÄ za niz drugih dogaÄ‘aja koji Ä‡e otkriti da je reÄ o zloÄinu strasti, osvete, opomene i simbolike.\r\n\r\nKako pronaÄ‡i krivca u svetu u kom je istina izobliÄena, a proÅ¡lost junaka utkana u njihovu sadaÅ¡njost neraskidivim nitima zla? Nikola BobiÄ‡, beogradski advokat, pokuÅ¡aÄ‡e da pronaÄ‘e odgovor na to pitanje, ni ne sluteÄ‡i da Ä‡e ga odgovor zauvek promeniti.\r\n\r\nOva priÄa tiÄe se svih nas, jer Ä‡emo u njoj pronaÄ‡i obrise naÅ¡e druÅ¡tvene stvarnosti, ali, Å¡to je joÅ¡ vaÅ¾nije, pronaÄ‡i Ä‡emo izgubljeno zrno nade â€“ Äak i u druÅ¡tvenom sistemu duboko ogrezlom u korupciju ima mesta za heroje.');

-- --------------------------------------------------------

--
-- Table structure for table `narudzbine`
--

DROP TABLE IF EXISTS `narudzbine`;
CREATE TABLE IF NOT EXISTS `narudzbine` (
  `id_narudzbine` int(12) NOT NULL AUTO_INCREMENT,
  `naziv_knjige` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresa` varchar(70) CHARACTER SET utf8mb4 NOT NULL,
  `telefon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_narudzbine`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `narudzbine`
--

INSERT INTO `narudzbine` (`id_narudzbine`, `naziv_knjige`, `email`, `ime`, `prezime`, `adresa`, `telefon`) VALUES
(25, 'Damin Gambit', 'Zdravkocola98@gmail.com', 'Zdravko', 'ÄŒoliÄ‡', 'Potocanje bb Sevojno', '0638367839'),
(24, 'Benzin', 'Zdravkocola98@gmail.com', 'Zdravko', 'Colic', 'Potocanje bb Sevojno', '0638367839'),
(23, 'Damin Gambit', 'Zdravkocola98@gmail.com', 'Zdravko', 'Colic', 'Potocanje bb Sevojno', '0638367839'),
(22, 'Damin Gambit', 'Zdravkocola98@gmail.com', 'Zdravko', 'Colic', 'Potocanje bb Sevojno', '0638367839'),
(20, 'Damin Gambit', 'Zdravkocola98@gmail.com', 'Zdravko', 'Colic', 'Potocanje bb Sevojno', '0638367839'),
(18, 'Deca zla', 'Zdravkocola98@gmail.com', 'Zdravko', 'Colic', 'Potocanje bb Sevojno', '0638367839'),
(26, 'Damin Gambit', 'Zdravkocola98@gmail.com', 'Zdravko', 'ÄŒoliÄ‡', 'PotoÄanje bb Sevojno', '0638367839'),
(27, 'TORANJ PRASKOZORJA', 'zdrajscolic@gmail.com', 'Zdravko', 'Colic', 'PotoÄanje bb Sevojno', '0638367839'),
(28, 'TORANJ PRASKOZORJA', 'zdrajscolic@gmail.com', 'Zdravko', 'Colic', 'PotoÄanje bb Sevojno', '0638367839'),
(29, 'TORANJ PRASKOZORJA', 'zdrajscolic@gmail.com', 'Zdravko', 'Colic', 'PotoÄanje bb Sevojno', '0638367839'),
(30, 'TORANJ PRASKOZORJA', 'Zdravkocola98@gmail.com', 'Zdravko', 'ÄŒoliÄ‡', 'PotoÄanje bb Sevojno', '0638367839');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `registration_date` date NOT NULL,
  `isAdmin` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `isAdmin`) VALUES
(14, 'Hiram', 'Sanford', 'qixu@mailinator.com', '$2y$10$2SWXzM2Bd8FpymtwxVBFFOIMxYfOh0e6owUGG.qHZiM5Ktr1Gv1ri', '2021-06-03', 0),
(13, 'Zdrave', 'Colic', 'zdrajscolic@gmail.com', '$2y$10$4Lvcs4RzxMZJS9Nm4jFbKuR7JeZ4ms2s4Iw1ngimkZxM1UyfOeyIC', '2021-09-23', 1),
(17, 'Marko', 'Markovic', 'mare@gmail.com', '$2y$10$C53xl8LbEI5rwJkQPpmrG.vkpRs1HLBO8mlPgnaEVR8DUQGDB5ma6', '2021-06-14', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
