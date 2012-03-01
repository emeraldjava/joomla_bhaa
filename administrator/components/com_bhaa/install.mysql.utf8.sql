CREATE TABLE IF NOT EXISTS `#__bhaa_event` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `alias` varchar(100) NOT NULL default '',
  `checked_out` int(11) NOT NULL,
  `checked_out_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `#__bhaa_eventmeta` (
  `event` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `alias` varchar(100) NOT NULL default '',
  `checked_out` int(11) NOT NULL,
  `checked_out_time` datetime NOT NULL,
  PRIMARY KEY  (`event`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `#__bhaa_race` (
  `id` int(11) NOT NULL auto_increment,
  `event` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `alias` varchar(100) NOT NULL default '',
  `checked_out` int(11) NOT NULL,
  `checked_out_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `#__bhaa_runner` (
  `id` int(11) NOT NULL auto_increment,
  `surname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `gender` enum('M','W') NOT NULL,
  `standard` int(11) default NULL,
  `dateofbirth` date NOT NULL,
  `company` int(11) default NULL,
  `team` int(11) default NULL,
  `email` varchar(50) default NULL,
  `newsletter` varchar(50) default NULL,
  `phone` varchar(50) default NULL,
  `textalert` varchar(50) default NULL,
  `address1` varchar(50) default NULL,
  `address2` varchar(50) default NULL,
  `address3` varchar(50) default NULL,
  `status` enum('M','D','I') default NULL,
  `alias` varchar(100) NOT NULL default '',
  `checked_out` int(11) NOT NULL,
  `checked_out_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `#__bhaa_raceresult` (
  `race` int(11) NOT NULL,
  `runner` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `racetime` int(11) NOT NULL,
  `checked_out` int(11) NOT NULL,
  `checked_out_time` datetime NOT NULL,
  PRIMARY KEY  (`race`,`runner`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `#__bhaa_sector` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `alias` varchar(100) NOT NULL default '',
  `checked_out` int(11) NOT NULL,
  `checked_out_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `#__bhaa_company` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `alias` varchar(100) NOT NULL default '',
  `checked_out` int(11) NOT NULL,
  `checked_out_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `#__bhaa_team` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `alias` varchar(100) NOT NULL default '',
  `checked_out` int(11) NOT NULL,
  `checked_out_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
