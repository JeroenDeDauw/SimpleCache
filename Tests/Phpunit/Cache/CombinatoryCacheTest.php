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

	/**
	 * @dataProvider invalidConstructorArgumentProvider
	 */
	public function testCannotConstructWithNonCaches( $invalidCachesList ) {
		$this->setExpectedException( 'InvalidArgumentException' );

		new CombinatoryCache( $invalidCachesList );
	}

	public function invalidConstructorArgumentProvider() {
		$argLists = array();

		$containedCache = $this->getMock( 'SimpleCache\Cache\Cache' );

		$argLists[] = array( array() );
		$argLists[] = array( array( null ) );
		$argLists[] = array( array( $containedCache, 42 ) );
		$argLists[] = array( array( $containedCache, new \stdClass(), $containedCache ) );

		return $argLists;
	}

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

	public function testSetWithOneCache() {
		$containedCache = $this->getMock( 'SimpleCache\Cache\Cache' );

		$containedCache
			->expects( $this->exactly( 2 ) )
			->method( 'set' )
			->with(
				$this->equalTo( 'hax' ),
				$this->equalTo( 1337 )
			);

		$cache = new CombinatoryCache( array( $containedCache ) );

		$cache->set( 'hax', 1337 );
		$cache->set( 'hax', 1337 );
	}

}
