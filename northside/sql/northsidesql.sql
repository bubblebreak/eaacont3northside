
-- Table for stage

CREATE TABLE `stage` (
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `color` CHAR(10) NOT NULL,
    `size` VARCHAR(99) NOT NULL,
    `location` VARCHAR(99) NOT NULL);
  
-- Data input for stage

INSERT INTO `stage` (`color`, `size`, `location`) VALUES
('blue', 'large', 'north'),
('red', 'medium', 'east'),
('green', 'small', 'south'),
('yellow', 'medium', 'west');



-- Table for artist

CREATE TABLE `artist` (
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `name` VARCHAR(999) NOT NULL, 
    `genre` VARCHAR(99) NOT NULL,
    `members` INT(3) NOT NULL);
  
-- Data input for artist

INSERT INTO `artist` (`name`, `genre`, `members`) VALUES
('Flying Tambourine', 'punk', 8),
('Dancing Penguins', 'folk', 7),
('Mommy just died', 'acoustic', 4),
('Santas in lingeri', 'pop', 6),
('Blingdabling', 'electronic', 5);



CREATE TABLE `stageartist` (
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `artistid` INT(99) NOT NULL, 
    `stageid` INT(99) NOT NULL,
    `day` DATE NOT NULL,
    `hour` TIME NOT NULL);
  
-- Because of issues with the PHPmyAdmin reading the constraint, I had to do it in two steps, in stead of one. If this was running as smoothly as I hoped for I would have included:
-- CONSTRAINT fk_artistid FOREIGN KEY `artistid` REFERENCES `artist(id)`,
-- CONSTRAINT `fk_stageid` FOREIGN KEY `stageid` REFERENCES `stage(id)`);



--
-- Indeks for tabel `videogames`
--
ALTER TABLE `stageartist`
  ADD KEY `artistid` (`artistid`),
  ADD KEY `stageid` (`stageid`);

-- Data input for artist



