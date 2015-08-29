<?php

use Mockery as m;

class RealmsTest extends PHPUnit_Framework_TestCase
{
    protected $realmsApi = null;

    protected function setUp()
    {
        $api = m::mock('GameScan\WoW\WowApiRequest[get]', array(new GameScan\WoW\ApiConfiguration()))
            ->shouldReceive('get')->times(1)->andReturn($this->loadRealms())
            ->getMock()
        ;
        $api->setHost(new GameScan\WoW\HostInformation\EuHostInformation());
        $api->setLocale('fr_Fr');
        $this->realmsApi = new \GameScan\WoW\Entity\Realms($api);
    }


    public function testRealmsNumber()
    {
        $realms = $this->realmsApi->realms();
        $this->assertCount(266, $realms);
    }

    public function loadRealms()
    {
        return file_get_contents(__DIR__ .DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'fixtures' . DIRECTORY_SEPARATOR . "realms.json");
    }
}
