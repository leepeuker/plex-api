test: test_phpstan test_psalm test_phpunit

test_phpunit:
	vendor/bin/phpunit -c ./phpunit.xml --testsuite unit

test_phpstan:
	vendor/bin/phpstan analyse src --level max

test_psalm:
	vendor/bin/psalm --show-info=false

test_psalm_with_info:
	vendor/bin/psalm --show-info=true