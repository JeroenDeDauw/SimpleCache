<?php


/**
 * This documentation group collects source code files belonging to the SimpleCache library.
 *
 * @defgroup SimpleCache SimpleCache
 */

if ( defined( 'SimpleCache_VERSION' ) ) {
	// Do not initialize more then once.
	return;
}

define( 'SimpleCache_VERSION', '0.1' );

// @codeCoverageIgnoreStart
spl_autoload_register( function ( $className ) {
	$className = ltrim( $className, '\\' );
	$fileName = '';
	$namespace = '';

	if ( $lastNsPos = strripos( $className, '\\') ) {
		$namespace = substr( $className, 0, $lastNsPos );
		$className = substr( $className, $lastNsPos + 1 );
		$fileName  = str_replace( '\\', '/', $namespace ) . '/';
	}

	$fileName .= str_replace( '_', '/', $className ) . '.php';

	$namespaceSegments = explode( '\\', $namespace );

	if ( $namespaceSegments[0] === 'SimpleCache' ) {
		if ( count( $namespaceSegments ) === 1 || $namespaceSegments[1] !== 'Tests' ) {
			require_once __DIR__ . '/src/' . $fileName;
		}
	}
} );
// @codeCoverageIgnoreEnd

if ( defined( 'MEDIAWIKI' ) ) {
	$GLOBALS['wgExtensionMessagesFiles']['SimpleCache'] = __DIR__ . '/SimpleCache.i18n.php';

	$GLOBALS['wgExtensionCredits']['other'][] = array(
		'path' => __FILE__,
		'name' => 'SimpleCache',
		'version' => SimpleCache_VERSION,
		'author' => array(
			'[https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
		),
		'url' => 'https://github.com/JeroenDeDauw/SimpleCache',
		'descriptionmsg' => 'simplecache-desc'
	);
}
