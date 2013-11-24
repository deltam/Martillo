<?php
/**
 * dataflow DSL
 */
namespace Martillo;

class Program
{
  /**
   */
  private $program=array();

  /**
   * ロジックのブロックを1つ追加する
   *
   * @param Closure $condition 実行条件
   * @param string  $key 書き換える値のキー
   * @param mixed   $value 書き換える値
   */
  public function addBlock($condition,$key,$value)
  {
    $this->program[]=array(
      'cond'=>$condition,
      'key'=>$key,
      'val'=>$value,
    );
  }

  /**
   * @return array 
   */
  public function getPorgram()
  {
    return $this->program;
  }
}