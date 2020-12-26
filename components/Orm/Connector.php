<?php

namespace Components\Orm\Connector;

class Connector
{
    protected $config;
    protected $configPath = [
        'hillel' => 'app/Config/configDB.php'
    ];

    public function __counstruct(string $dbName = 'test')
    {
        if(array_key_exists($dbName, $this->configPath)) {
            $this->config = require_once $this->configPath[$dbName];
        } else {
            throw new Exception('DB Name not valid');
        }
    }

    public function connect()
    {
        if(empty($this->config['dbName'])) {
            throw new Exeption('Bad dbName');
        }

        if(empty($this->config['dbHost'])) {
            throw new Exeption('Bad dbHost');
        }

        if(empty($this->config['dbUser'])) {
            throw new Exeption('Bad dbUser');
        }

        if(empty($this->config['dbUserPass'])) {
            throw new Exeption('Bad dbUserPass');
        }

        if(empty($this->config['dbDriver'])) {
            throw new Exeption('Bad dbDriver');
        }

        $dns = $this->config['dbDriver'] . ':' . $this->config['dbHost'] . '=' . $this->config['dbName'];

        return new PDO($dns, $this->config['dbUser'], $this->config['dbPass']);
    }
}