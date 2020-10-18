<?php
if (!function_exists('activeSegment')) {
    function activeSegment($name, $segment = 2, $class = 'active')
    {
        return request()->segment($segment) == $name ? $class : '';
    }
}
if (!function_exists('status')) {
    function status($status)
    {
        if ($status == '1') {
            return $status = array(
                'class'=>'info',
                'status'=>'public',
            );
        } else {
            return $status = array(
                'class'=>'danger',
                'status'=>'Unpublic',
            );
        }
    }
}
