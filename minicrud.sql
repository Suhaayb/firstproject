-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 21:17
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minicrud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `Gerecht` varchar(25) NOT NULL,
  `Omschrijving` text NOT NULL,
  `Prijs` int(11) NOT NULL,
  `Afbeelding` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `menu`
--

INSERT INTO `menu` (`ID`, `Gerecht`, `Omschrijving`, `Prijs`, `Afbeelding`) VALUES
(1, 'Neapolitan pizza', 'Today there are three official variants of Neapolitan Pizza: Pizza Marinara: Features tomatoes, garlic, oregano, and extra virgin olive oil. Pizza Margherita: Features tomatoes, sliced mozzarella, basil, and extra virgin olive oil. Pizza Margherita extra: Features tomatoes, mozzarella from Campania, basil, and extra virgin olive oil.', 5, ''),
(2, 'Chicago Pizza', 'Chicago Pizza Traditional Toppings:\r\n        Generally, the toppings for Chicago pizza are ground beef, \r\n        sausage, pepperoni, onion, mushrooms, and green peppers, placed underneath the tomato sauce. \r\n        Some locations will finish off their pizzas with a sprinkle of Parmesan cheese across the tomato sauce.', 4, ''),
(3, 'New York-Style Pizza', 'New York-style pizza usually features tomato sauce and mozzarella cheese. Unlike its thin crust counterpart, the Neapolitan, New York-style pizzas can handle a wide range of additional toppings, from pepperoni and sausage to mushroom and anchovies. While this style of pizza can have virtually any topping added to it, it\'s common to find pizza lovers topping New York pizza with condiments, like oregano, red pepper flakes, Parmesan cheese, and garlic powder.', 3, ''),
(4, 'Sicilian Pizza', 'Sicilian pizzas are often topped with bits of tomato, onion, anchovies, and herbs.', 3, ''),
(5, 'Greek Pizza', 'Greek pizza is usually heavier on the sauce than the cheese. The sauce typically has a tangy tomato paste with a strong oregano flavor. It is often only topped with cheese, which is usually a mix of mozzarella and cheddar or provolone. It may feature a variety of non-Greek or Greek toppings, such as feta cheese, black olives, and red onion.\r\n\r\n', 5, ''),
(6, 'California Pizza', 'When it comes to California pizza, there\'s no such thing as traditional toppings. This lack of specificity allows you to get inventive. You can include anything from chicken and artichokes to goat cheese and egg.', 3, ''),
(7, 'Detroit pizza', 'Detroit pizza traditionally features pepperoni, brick cheese (usually Wisconsin brick cheese), and tomato sauce. Other typical toppings include mushrooms and olives.', 4, ''),
(8, 'St. Louis pizza', 'St. Louis pizza features Provel cheese and a sweeter tomato sauce with a hefty dosage of oregano. Because of its firm crust, St. Louis-style pizza can support several toppings of your choice.', 3, ''),
(9, 'Hawaiian Pizza', 'Hawaiian pizza is the most underrated pizza on the planet. Combining pineapple, cheese, and ham, Hawaiian pizza is sweet, salty, and cheesy all in 1 bite. It’s just the BEST pizza variety! We’re using my homemade pizza crust and adding bacon on top. ', 4, '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
