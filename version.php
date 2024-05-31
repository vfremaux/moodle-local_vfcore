<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details.
 *
 * @package     local_vfcore
 * @category    local
 * @author      Valery Fremaux <valery.fremaux@gmail.com>
 * @copyright   2014 onwards Valery Fremaux (https://www.activeprolearn.com)
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version  = 2024053100;   // The (date) version of this plugin.
$plugin->requires = 2020060900;   // Requires this Moodle version.
$plugin->component = 'local_vfcore';
$plugin->release = '3.9.0 (Build 2024053100)';   // Release.
$plugin->maturity = MATURITY_STABLE;
$plugin->supported = [39, 311];

// Non moodle attributes.
$plugin->codeincrement = '3.9.0002';
$plugin->privacy = 'dualrelease';
