<?php
namespace App\Tests;

use Illuminate\Foundation\Testing\TestCase as LaravelTestCase;

class TestCase extends LaravelTestCase {

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../../bootstrap/start.php';
	}

}
