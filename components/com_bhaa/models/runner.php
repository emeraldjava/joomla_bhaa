<?php
/**
* @version    $Id: base.php 54 2008-04-22 14:50:30Z julienv $ 
* @package    JoomlaTracks
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

require_once( 'bhaa.php' );

/**
 * Joomla Tracks Component Front page Model
 *
 * @package		Tracks
 * @since 0.1
 */
class BhaaModelRunner extends BhaaModel
{
	function getRunner()
	{
		$id = JRequest::getInt('id',0);
		$query = sprintf('SELECT id,firstname,surname,standard,address1,address2,address3,email from runner where id = %d;',$id);
		$this->getDB()->setQuery( $query );
		$x = $this->getDB()->loadAssoc();
		return $x;
	}
	
	function getResults()
	{
		$id = JRequest::getInt('id',0);
		$query = sprintf('SELECT e.name,e.tag,e.date,rr.race,rr.runner,rr.position,rr.standard,rr.postracestandard FROM raceresult rr 
JOIN runner r on rr.runner=r.id
JOIN race race on race.id=rr.race
JOIN event e on e.id=race.event  
WHERE r.id = %d ORDER by e.date DESC;',$id);
		//echo $query;
		$this->getDB()->setQuery( $query );
		$x = $this->getDB()->loadAssocList();
		return $x;
	}
}
?>