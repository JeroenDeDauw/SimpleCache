<?php

namespace SimpleCache\Cache;

use InvalidArgumentException;

/**
 * Allows combining multiple caches.
 *
 * @file
 * @since 0.1
 * @ingroup SimpleCache
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class CombinatoryCache implements Cache {

	/**
	 * @var Cache[]
	 */
	protected $caches;

	public function __construct( array $caches ) {
		$this->assertCachesListIsValid( $caches );

		$this->caches = $caches;
	}

	protected function assertCachesListIsValid( array $caches ) {
		$this->assertNotEmpty( $caches );
		$this->assertAreCaches( $caches );
	}

	protected function assertNotEmpty( $caches ) {
		if ( empty( $caches ) ) {
			throw new InvalidArgumentException( 'The caches list needs to contain at least one cache' );
		}
	}

	protected function assertAreCaches( $caches ) {
		foreach ( $caches as $cache ) {
			if ( !is_object( $cache ) || !( $cache instanceof Cache ) ) {
				throw new InvalidArgumentException( 'The cache list can only contain instances of Cache' );
			}
		}
	}

	public function get( $key ) {
		// TODO
	}

	public function has( $key ) {
		foreach ( $this->caches as $cache ) {
			if ( $cache->has( $key ) ) {
				return true;
			}
		}

		return false;
	}

	public function set( $key, $value ) {
		foreach ( $this->caches as $cache ) {
			$cache->set( $key, $value );
		}
	}

}
