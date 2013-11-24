<?php
/**
 * dataflow DSL
 */
namespace Martillo;

function is($key,$val)
{
  return function($params) use($key,$val) {
    return isset($params[$key])&&$params[$key]==$val;
  };
}

function exists($key)
{
  return function($params) use($key) {
    return isset($params[$key]);
  };
}
