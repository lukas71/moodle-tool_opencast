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
 * Services for the Opencast API.
 *
 * @package tool_opencast
 * @copyright 2018 Tobias Reischmann <tobias.reischmann@wi.uni-muenster.de>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$functions = array(
    'tool_opencast_get_courses_for_learner' => array(
        'classname' => 'tool_opencast_external',
        'methodname' => 'get_courses_for_learner',
        'classpath'   => 'admin/tool/opencast/external.php',
        'description' => 'Service to query the courses in which a user has the capability of a learner',
        'type' => 'read',
        'capabilities' => 'tool/opencast:externalapi',
    ),
    'tool_opencast_get_courses_for_instructor' => array(
        'classname' => 'tool_opencast_external',
        'methodname' => 'get_courses_for_instructor',
        'classpath'   => 'admin/tool/opencast/external.php',
        'description' => 'Service to query the courses in which a user has the capability of a instructor',
        'type' => 'read',
        'capabilities' => 'tool/opencast:externalapi',
    ),
);