<?php
namespace Tripnity\Util;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author sylvain
 */
class Db {
  //put your code here
  
  public function getConnection($string){
        
    if ('hello' === $string) {
      return 'say: Hello WORLD';
    }
    
    return 'say: '.$string;
  }
}
