-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_form_field`
-- 

CREATE TABLE `tl_form_field` (
  `formee_width` smallint(2) unsigned NOT NULL default '12',
  `formee_clear` char(1) NOT NULL default '',
  `formee_align` varchar(5) NOT NULL default 'left',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
