<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-fire-modal-window
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'medienworx',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'medienworx\ModuleMwkBackToTop'           => 'system/modules/mwk-back-to-top/src/medienworx/modules/ModuleMwkBackToTop.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_mwk_back_to_top'      		     => 'system/modules/mwk-back-to-top/templates',
));