<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.modelitem');

//require_once( 'bhaa.php' );

class BhaaModelEvent extends JModelItem
{
	protected $event;
	
	function getEvent()
	{
		if (!isset($this->event)) {
			$id = JRequest::getInt('id');
			$table = $this->getTable('Event', 'BhaaTable');
			$this->event = $table->load($id);
		}
		return $this->event;
// 		$tag = JRequest::getString('t');
// 		$query = sprintf('SELECT rr.race,rr.runner,rr.position,r.surname,r.firstname FROM raceresult rr 
// 			JOIN runner r on rr.runner=r.id 
// 			JOIN race race on race.id=rr.race 
// 			JOIN event e on e.id=race.event			
// 			WHERE e.tag="%s" ORDER by rr.race, rr.position',$tag);
// 		$this->getDB()->setQuery( $query );
// 		$x = $this->getDB()->loadAssocList();
// 		return $x;
	}
}
?>