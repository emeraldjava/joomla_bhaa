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
  `name` varchar(40) NOT NULL,
  `standard` varchar(40) NOT NULL,
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
  PRIMARY KEY  (`id`)
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
