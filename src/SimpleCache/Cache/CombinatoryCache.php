<?php

namespace SimpleCache\Cache;

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
		$this->assertAreCaches( $caches );

		$this->caches = $caches;
	}

	protected function assertAreCaches( $caches ) {
		// TODO
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
		// TODO
	}

}
