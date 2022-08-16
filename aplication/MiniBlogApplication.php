<?php

class MiniBlogApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    public function registerRoutes()
    {
        return array(
            '/account' => array('controller' => 'account', 'action' => 'index'),
            'account/:action' => array('controller' => 'account'),
        );
    }

    protected function configure()
    {
        $this->db_manager->connect('master', array(
            'dsn' => 'mysql:dbname=online_bbs;host=a2b867c99eb7',
            'user' => 'root',
            'password' => 'root',
        ));
    }
}