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
	}
	
	function getResults()
	{
		$tag = JRequest::getString('t','garda2012');
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
//		$query->select('id,name,tag');
		// From the hello table
	//	$query->from('#__bhaa_event')->order('id')->limit(20);
		//return $query;
		

		$query = sprintf('SELECT rr.race,rr.runner,rr.position,r.surname,r.firstname FROM #__bhaa_raceresult rr 
			JOIN #__bhaa_runner r on rr.runner=r.id 
			JOIN #__bhaa_race race on race.id=rr.race 
			JOIN #__bhaa_event e on e.id=race.event			
			WHERE e.tag="%s" ORDER by rr.race, rr.position',$tag);
		$db->setQuery( $query );
		$x = $db->loadAssocList();
		return $x;
	}
}
?>