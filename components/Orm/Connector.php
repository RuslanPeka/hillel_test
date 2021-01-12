<?php

namespace Components\Orm;
use PDO;

class Connector
{
    protected $config;
    protected $configPath = [
        'hillel' => 'app/Config/configDB.php'
    ];

    public function __construct(string $dbName = 'hillel')
    {   
        if(array_key_exists($dbName, $this->configPath)) {
            $this->config = include $this->configPath[$dbName];
        } else {
            throw new Exception('DB Name not valid');
        }
    }

    public function connect()
    {
        if(empty($this->config['dbDriver'])) {
            throw new Exeption('Bad dbDriver');
        }

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

        $dns = $this->config['dbDriver'] . ':host=' . $this->config['dbHost'] . ';dbname=' . $this->config['dbName'];
        return new PDO($dns, $this->config['dbUser'], $this->config['dbUserPass']);
        
    }
}