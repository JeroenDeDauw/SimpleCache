<?php

namespace SimpleCache\Tests\Phpunit\Cache;

use SimpleCache\Cache\SimpleInMemoryCache;

/**
 * @covers SimpleCache\Cache\SimpleInMemoryCache
 *
 * @file
 * @ingroup SimpleCache
 * @group SimpleCache
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class SimpleInMemoryCacheTest extends \PHPUnit_Framework_TestCase {

	public function testCanConstruct() {
		$cache = new SimpleInMemoryCache();

		$this->assertTrue( true );
	}

}
