<?php
// This file is part of the cleanprofile module for Moodle - http://moodle.org/
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
 * cleanprofiles plugin event handler definition.
 *
 * @package    local_cleanprofiles
 * @copyright  2013 onwards Denis Rebaud {@link https://denis.rebaud.fr}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$observers = array(

    array(
        'eventname' => 'core\event\user_created',
        'callback' => '\local_cleanprofiles\observer::user_created'
    ),

    array(
        'eventname' => 'core\event\user_updated',
        'callback' => '\local_cleanprofiles\observer::user_updated'
    )
);

// End of file.
