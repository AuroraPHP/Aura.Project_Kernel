<?php
/**
 * 
 * This file is part of Aura for PHP.
 * 
 * Require or include this file in bootstrap code to get access to `$base`,
 * `$loader`, and `$di`.
 * 
 * @package Aura.Project_Kernel
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
use Aura\Project_Kernel\ProjectContainer;

// the project base directory relative to
// {$base}/vendor/aura/project-kernel/scripts/kernel.php
$base = dirname(dirname(dirname(dirname(__DIR__))));

// set up the autoloader
$loader = require "$base/vendor/autoload.php";

// load environment modifications
require "{$base}/config/_env.php";

// create the project container
$di = ProjectContainer::factory($base, $loader, $_ENV, null);
