<?php

class AppConfig
{
    private static $instance;
    private $dataSource;

    private function __construct()
    {
        $this->init();
    }

    private function init()
    {
        switch (Config::$dataSource)
        {
            case 'mysql':
                $this->dataSource = new StorageMysql();
                break;
            case 'json':
                $this->dataSource = new StorageJson();
                break;
            default:
                $this->dataSource = new StorageMysql();
        }
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getDataSource()
    {
        return $this->dataSource;
    }
}
... e em algum lugar em seu código (por exemplo, em alguma classe de serviço):

$container->getItemsLoader(AppConfig::getInstance()->getDataSource()) // getItemsLoader need Object of specific data source class by dependency injection
  
?>
