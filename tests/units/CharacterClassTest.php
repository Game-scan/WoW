<?php

use Mockery as m;

class CharacterClass extends PHPUnit_Framework_TestCase
{
    protected $classesApi = null;

    protected function setUp()
    {
        $api = m::mock('GameScan\WoW\WowApiRequest[get]', array(new GameScan\WoW\ApiConfiguration()))
            ->shouldReceive('get')->times(1)->andReturn($this->loadRealms())
            ->getMock()
        ;
        $api->setHost(new GameScan\WoW\HostInformation\EuHostInformation());
        $api->setLocale('fr_Fr');
        $this->classesApi = new \GameScan\WoW\Entity\CharacterClass($api);

    }

    public function testClassesCount()
    {
        $this->assertCount(11, $this->classesApi->getClassesName());
    }

    public function loadRealms()
    {
        return file_get_contents(__DIR__ .DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'fixtures' . DIRECTORY_SEPARATOR . "classes.json");
    }
}
