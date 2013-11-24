<?php
namespace Martillo;

class ProgramTest extends \PHPUnit_Framework_TestCase
{
  public function testNew()
  {
    $prog=new Program;
    $this->assertNotNull($prog);
  }

  public function testAddBrock()
  {
    $prog=new Program;
    $prog->addBlock(
      function($params)
      {
        return $params['a']==2;
      },
      'ok',
      true
    );

    $get=$prog->getPorgram();
    $this->assertNotNull($get);
    $this->assertEquals(1,count($get));
  }

  public function testDoBrock()
  {
    $prog=new Program;
    $prog->addBlock(
      function($params)
      {
        return $params['a']==2;
      },
      'ok',
      true
    );

    $blocks=$prog->getPorgram();
    $block=$blocks[0];
    $this->assertFalse($block['cond'](array('a'=>1)));
    $this->assertTrue($block['cond'](array('a'=>2)));
  }

}