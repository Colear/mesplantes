CREATE TABLE IF NOT EXISTS `#__jrdn_plantes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `greeting` VARCHAR(25) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
 
INSERT INTO `#__jrdn_plantes` (`greeting`) VALUES
        ('DB: Bonjour la plante !'),
        ('DB:Au revoir la plante !');