<?php namespace Orchestra\Testbench\Tests;

class DatabaseFixtureTest extends \Orchestra\Testbench\TestCase {

	/**
	 * Setup the test environment.
	 */
	public function setUp()
	{
		parent::setUp();

		$this->app['artisan']->call('migrate', array(
			'--path' => '../../tests/migrations', 
			'--database' => 'testbench',
		));
	}

	/**
	 * Define environment setup.
	 * 
	 * @param  Illuminate\Foundation\Application    $app
	 * @return void
	 */
	protected function getEnvironmentSetUp($app)
	{
		$app['config']->set('database.default', 'testbench');
		$app['config']->set('database.connections.testbench', array(
			'driver'   => 'sqlite',
			'database' => ':memory:',
			'prefix'   => '',
		));
	}

	/**
	 * Test running migration.
	 *
	 * @test
	 */
	public function testRunningMigration()
	{
		$users = \DB::table('users')->where('id', '=', 1)->first();

		$this->assertEquals('hello@orchestraplatform.com', $users->email);
		$this->assertTrue(\Hash::check('123', $users->password));

	}
	
}
