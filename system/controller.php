<?php 
declare(strict_types = 1);

namespace System;

class Controller {
	
	/**
	 * Displays HTML Document
	 *
	 * @param string $page filename
	 * @param array|object $data The data to pass to the document
	 * @return void
	 */
	public function view(string $page, array|object $data = NULL, mixed $output = NULL)
	{
		if (!file_exists('views/'.$page.'.php')) {
			
			return require 'views/error/error_1.php';
			exit();

		} else {

			return require 'views/'.$page.'.php';
		} 
	}

	public function include(string $page, array|object $data = NULL, mixed $output = NULL)
	{
		if (file_exists($page.'.php')) {
			
			return require $page.'.php';
		
		} else {

			return require 'views/error/error_1.php';
			exit();
		} 
	}


	/**
	 * Displays HTML Document
	 *
	 * @param string $page filename
	 * @param array|object $data The data to pass to the document
	 * @return void
	 */
	public function load(string $file, array|object $data = NULL)
	{
		if (!file_exists('views/'.$file.'.php')) {
			
			return require 'views/error/error_1.php';
			exit();

		} else {

			return require 'views/document/page.php';
		}
	}

	/**
	 * Checking filename if exist in controllers
	 *
	 * @param string $filename Actual - filename
	 * @return void
	 */
	public function AppRun(string $filename)
	{
		if (!file_exists('controllers/'.$filename.'.php')) {    
    
			Self::Error($filename);
			exit();
		}

		$class  = 'Controllers\\'.$filename;
		$object = new $class();
		$this->runClass($object, $class, $filename);
	}

	/**
	 * Checks class, method if exist - it runs them
	 *
	 * @param object $object       The object-instance
	 * @param string $classname    The Class
	 * @param string|null $method  The Method
	 * @param array|string $params The Parameters
	 * @return void
	 */
	public function runClass(object $object = NULL, string $classname, ?string $method, array|string $params = NULL)
	{
		if (!class_exists($classname)) {
				
			$ERROR = 2;
			return require 'views/error/error_2.php';

		} elseif (!method_exists($classname, $method)) {
					
			$ERROR = 3;
			return require 'views/error/error_2.php';

		} elseif(!empty($params) || $params !== NULL) {

			// re-indexing values
			$values = array_values($params);

			$object->$method($values);

		} else  {

			$object->$method();
		}
	}

	public static function Error(string $page = NULL)
	{
		return require 'views/error/error_1.php';
	}

	public function redirect(string $page)
	{
		header("location:index.php?page=$page");
	}

	public function login_redirect($page, $user)
	{
		session_start();
		$_SESSION['user'] = $user;
		header("location:index.php?page=$page");
	}

}