<?php
/**
 * transform the url passed in JRoute function for SEF display
 *
 * @param url $query
 * @return array
 */
function BhaaBuildRoute(&$query)
{
	print_r($query);
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
    print_r($segments);
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
    print_r($segments);
    switch($segments[0])
    {
        case 'event':
            $vars['view'] = 'event';
            $id = explode( ':', $segments[1] );
            $vars['t'] = $id[1];
            break;
        case 'runner':
            $vars['view'] = 'runner';
            $id = explode( ':', $segments[1] );
            $vars['r'] = (int) $id[1];
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
    print_r($vars);
    return $vars;
}
?>