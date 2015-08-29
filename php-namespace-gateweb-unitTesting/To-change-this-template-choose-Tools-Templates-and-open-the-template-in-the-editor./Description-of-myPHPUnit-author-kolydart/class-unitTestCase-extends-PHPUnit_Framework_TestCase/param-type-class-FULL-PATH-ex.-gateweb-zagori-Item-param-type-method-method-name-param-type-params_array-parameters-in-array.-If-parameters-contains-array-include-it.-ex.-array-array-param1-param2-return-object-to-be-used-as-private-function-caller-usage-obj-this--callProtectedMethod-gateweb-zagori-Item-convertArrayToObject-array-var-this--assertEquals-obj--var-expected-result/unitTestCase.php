<?php
namespace gateweb\unitTesting;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myPHPUnit
 *
 * @author kolydart
 */
class unitTestCase extends \PHPUnit_Framework_TestCase {

	/**
	 *
	 * @param <type> $class FULL PATH (ex. '\gateweb\zagori\Item')
	 * @param <type> $method method name
	 * @param <type> $params_array parameters in array. If parameters contains array, include it. ex. array(array('param1','param2'))
	 * @return object to be used as private function caller
	 * @usage {
	 * 	$obj = $this->callProtectedMethod('\gateweb\zagori\Item', 'convertArrayToObject', array($var));
		$this->assertEquals($obj->var, 'expected result');
	 * }
	 */
	protected function callProtectedMethod($class, $method, $params_array) {
		$class_handler = new \ReflectionClass($class);
		$method_handler = $class_handler->getMethod($method);
		$method_handler->setAccessible(true);
		return $method_handler->invokeArgs(new $class(), $params_array);
		}

}
?>
