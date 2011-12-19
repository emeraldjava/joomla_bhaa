<?php
/**
* @version    $Id: view.html.php 89 2008-05-02 06:46:38Z julienv $ 
* @package    JoomlaTracks
* @copyright  Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license    GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

/**
 * transform the url passed in JRoute function for SEF display
 *
 * @param url $query
 * @return array
 */
function TracksBuildRoute(&$query)
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
        case 'project':
        case 'ranking':
        case 'teamranking':
            if(isset($query['p']))
            {
                $segments[] = $query['p'];
                unset( $query['p'] );
            }
            break;
        case 'roundresult':
            if(isset($query['pr']))
            {
                $segments[] = $query['pr'];
                unset( $query['pr'] );
            }
            break;
        case 'individual':
		    if(isset($query['i']))
		    {
		        $segments[] = $query['i'];
		        unset( $query['i'] );
		    }
		    break;
		case 'team':
            if(isset($query['t']))
            {
                $segments[] = $query['t'];
                unset( $query['t'] );
            }
            break;
        case 'round':
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
function TracksParseRoute($segments)
{
    $vars = array();
    switch($segments[0])
    {
        case 'project':
            $vars['view'] = 'project';
            $id = explode( ':', $segments[1] );
            $vars['p'] = (int) $id[0];
            break;
        case 'ranking':
            $vars['view'] = 'ranking';
            $id = explode( ':', $segments[1] );
            $vars['p'] = (int) $id[0];
            break;
        case 'teamranking':
            $vars['view'] = 'teamranking';
            $id = explode( ':', $segments[1] );
            $vars['p'] = (int) $id[0];
            break;
        case 'roundresult':
            $vars['view'] = 'roundresult';
            $id = explode( ':', $segments[1] );
            $vars['pr'] = (int) $id[0];
            break;
        case 'individual':
            $vars['view'] = 'individual';
            $id = explode( ':', $segments[1] );
            $vars['i'] = (int) $id[0];
            break;
        case 'team':
            $vars['view'] = 'team';
            $id = explode( ':', $segments[1] );
            $vars['t'] = (int) $id[0];
            break;
        case 'round':
            $vars['view'] = 'round';
            $id = explode( ':', $segments[1] );
            $vars['r'] = (int) $id[0];
            break;
        default:
            $vars['view'] = $segments[0];
    }
    return $vars;
}

?>