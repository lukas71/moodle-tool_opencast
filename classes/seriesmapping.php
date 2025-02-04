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
 * Persistable of seriesmapping
 *
 * @package    tool_opencast
 * @copyright  2018 Tobias Reischmann WWU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_opencast;

use tool_opencast\local\settings_api;

defined('MOODLE_INTERNAL') || die;

/**
 * Persistable of seriesmapping
 *
 * @package    tool_opencast
 * @copyright  2018 Tobias Reischmann WWU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class seriesmapping extends \core\persistent
{

    /** Table name for the persistent. */
    const TABLE = 'tool_opencast_series';

    /**
     * Return the definition of the properties of this model.
     *
     * @return array
     */
    protected static function define_properties() {

        return array(
            'id' => array(
                'type' => PARAM_INT,
            ),
            'courseid' => array(
                'type' => PARAM_INT,
            ),
            'series' => array(
                'type' => PARAM_ALPHANUMEXT,
            ),
            'ocinstanceid' => array(
                'type' => PARAM_INT,
                'default' => function () {
                    return settings_api::get_default_ocinstance()->id;
                }
            ),
            'isdefault' => array(
                'type' => PARAM_BOOL,
            ),
        );
    }

    /**
     * Retrieves a database record of the tool_opencast_series table.
     * @param array $filters
     * @param false $skipdefault
     * @return false|seriesmapping
     */
    public static function get_record($filters = array(), $skipdefault = false) {
        // TODO later deprecate skipdefault and remove this compatibility stuff.
        // Keep it compatible with old versions.
        if (!$skipdefault && !array_key_exists('isdefault', $filters)) {
            $filters['isdefault'] = '1';
        }

        return parent::get_record($filters);
    }
}
