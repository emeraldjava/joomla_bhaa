<?php
/**
 * transform the url passed in JRoute function for SEF display
 *
 * @param url $query
 * @return array
 */
function BhaaBuildRoute(&$query)
{
    $view = '';
    $segments = array();
    if(isset($query['view']))
    {
        $segments[] = $query['view'];
        $view = $query['view'];
        unset( $query['view'] );
    }
    switch ( $view )
    {
        case 'event':
            if(isset($query['t']))
            {
                $segments[] = $query['t'];
                unset( $query['t'] );
            }
            break;
        case 'runner':
            if(isset($query['r']))
            {
                $segments[] = $query['r'];
                unset( $query['r'] );
            }
            break;

    }
    return $segments;
}

/**
 * interprets url segments as set in the TracksBuildRoute function 
 *
 * @param array $segments
 * @return array
 */
function BhaaParseRoute($segments)
{
    $vars = array();
    switch($segments[0])
    {
        case 'event':
            $vars['view'] = 'event';
            $id = explode( ':', $segments[1] );
            $vars['t'] = (string) $id[0];
            break;
        case 'runner':
            $vars['view'] = 'runner';
            $id = explode( ':', $segments[1] );
            $vars['r'] = (int) $id[0];
            break;
//         case 'teamranking':
//             $vars['view'] = 'teamranking';
//             $id = explode( ':', $segments[1] );
//             $vars['p'] = (int) $id[0];
//             break;
//         case 'roundresult':
//             $vars['view'] = 'roundresult';
//             $id = explode( ':', $segments[1] );
//             $vars['pr'] = (int) $id[0];
//             break;
//         case 'individual':
//             $vars['view'] = 'individual';
//             $id = explode( ':', $segments[1] );
//             $vars['i'] = (int) $id[0];
//             break;
//         case 'team':
//             $vars['view'] = 'team';
//             $id = explode( ':', $segments[1] );
//             $vars['t'] = (int) $id[0];
//             break;
//         case 'round':
//             $vars['view'] = 'round';
//             $id = explode( ':', $segments[1] );
//             $vars['r'] = (int) $id[0];
//             break;
        default:
            $vars['view'] = $segments[0];
    }
    return $vars;
}

// class BhaaHelperRoute
// {
// 	/**
// 	* return links to a team player
// 	* @param int projectid
// 	* @param int teamid
// 	* @param int personid
// 	* @return url
// 	*/
// 	function getPlayerRoute( $projectid, $teamid, $personid, $layout=null )
// 	{
// 		$params = array(	"option" => "com_joomleague",
// 						"view" => "player",
// 						"p" => $projectid,
// 						"tid" => $teamid,
// 						"pid" => $personid );
	
// 		if ( ! is_null( $layout ) ) {
// 			$params["layout"] = $layout;
// 		}
	
// 		$query = JoomleagueHelperRoute::buildQuery( $params );
// 		$link = JRoute::_( "index.php?" . $query, false );
	
// 		return $link;
// 	}
// }
?>