<?php


namespace Services;


class ApiService
{


    /**
     * ApiService constructor.
     */
    public function  __construct()
    {
        $this->endpoint = env("USERS_MS").'/api';
    }
}
