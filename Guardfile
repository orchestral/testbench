guard :phpunit, :all_on_start => false, :tests_path => 'tests/', :cli => '--colors -c build/phpunit.xml' do
	# Run any test in app/tests upon save.
	watch(%r{^.+Test\.php$})

	# When a file is edited, try to run its associated test.
	watch(%r{^src/(.+)/(.+)\.php$}) { |m| "tests/#{m[2]}Test.php"}
end
