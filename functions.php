<?php
    /**
     * Return home directory
     */
    function home_dir() {
        $output = '/';
        $host   = $_SERVER['HTTP_HOST'];

        if ($host == 'localhost:8888' || $host == 'grantnorris.co.uk') {
            $output = '/shrine';
        }

        return $output;
    }