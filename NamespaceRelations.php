<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "This is the NamespaceRelations extension. Please see the README file for installation instructions.\n";
	exit( 1 );
}

// Primary stuff
$dir = __DIR__;
$wgAutoloadClasses['NamespaceRelationsHooks'] = $dir . '/NamespaceRelations.hooks.php';
$wgAutoloadClasses['NamespaceRelations'] = $dir . '/NamespaceRelations_body.php';

// Internationalization
$wgExtensionMessagesFiles['NamespaceRelations'] = $dir . '/NamespaceRelations.i18n.php';

// Attaching to hooks
$wgHooks['SkinTemplateNavigation'][] = 'NamespaceRelationsHooks::onSkinTemplateNavigation';

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'NamespaceRelations',
	'author'         => array( 'Pavel Selitskas' ),
	'url'            => 'https://www.mediawiki.org/wiki/Extension:NamespaceRelations',
	'descriptionmsg' => 'nsrels-desc',
	'version'        => '0.1',
);

// global variables
/**
 * Define extra namespaces and how they relate to the basic set of namespaces.
 */
$wgNamespaceRelations = array();