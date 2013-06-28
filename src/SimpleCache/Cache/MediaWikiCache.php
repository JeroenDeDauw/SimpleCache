<?php

namespace SimpleCache\Cache;

use BagOStuff;

/**
 * Adapter around MediaWikis BagOStuff.
 *
 * @file
 * @since 0.1
 * @ingroup SimpleCache
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MediaWikiCache implements Cache {

	protected $mediaWikiCache;

	public function __construct( BagOStuff $mediaWikiCache ) {
		$this->mediaWikiCache = $mediaWikiCache;
	}

	public function get( $key ) {
		return $this->mediaWikiCache->get( $key );
	}

	public function has( $key ) {
		return $this->get( $key ) !== false;
	}

	public function set( $key, $value ) {
		$this->mediaWikiCache->set( $key, $value );
	}

}
