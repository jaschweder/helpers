<?php

/**
 * Get a defined enviorment key value
 * @example env('FOO', 'BAR');
 */
if(!function_exists('env')){
    function env($key, $default=null){
        $value = getenv($key);
        if($value === false){
            return $default;
        }
        return $value;
    }
}

/**
 * Dump and die
 * @example dd($foo);
 */
if(!function_exists('dd')){
    function dd() {
        $args = func_get_args();
        foreach($args as $arg) {
            var_dump($arg);
        }
        if(env('JASCHWEDER_DEBUG')){
          return;
        }
        exit(0);
    }
}

/**
 * Print and die
 * @example dp($foo);
 */
if(!function_exists('dp')){
    function dp($die = true) {
        $args = func_get_args();
        foreach($args as $arg) {
            print_r($arg);
        }
        if(env('JASCHWEDER_DEBUG')){
          return;
        }
        exit(0);
    }
}
