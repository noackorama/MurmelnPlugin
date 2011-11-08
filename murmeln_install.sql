-- 
-- Tabellenstruktur für Tabelle `murmeln_highscore`
-- 

CREATE TABLE IF NOT EXISTS `murmeln_highscore` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `score` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;