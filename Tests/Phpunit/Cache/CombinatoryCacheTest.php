<?php

namespace SimpleCache\Tests\Phpunit\Cache;

use SimpleCache\Cache\CombinatoryCache;

/**
 * @covers SimpleCache\Cache\CombinatoryCache
 *
 * @file
 * @ingroup SimpleCache
 * @group SimpleCache
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class CombinatoryCacheTest extends \PHPUnit_Framework_TestCase {

	public function testHasWithOneCache() {
		$containedCache = $this->getMock( 'SimpleCache\Cache\Cache' );

		$containedCache
			->expects( $this->exactly( 2 ) )
			->method( 'has' )
			->will( $this->returnValue( true ) );

		$cache = new CombinatoryCache( array( $containedCache ) );

		$this->assertTrue( $cache->has( 'foo' ) );
		$this->assertTrue( $cache->has( 'bar' ) );
	}

}
