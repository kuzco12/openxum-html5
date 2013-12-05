<?php
/**
 *  This file is part of OpenXum project.
 *
 *  OpenXum is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This Web application is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with OpenXum.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright     Copyright (c) Eric Ramat
 * @link          http://github.com/openxum-team/openxum-html5
 * @package       app.Model
 * @license       http://www.gnu.org/licenses/ GPLv3 License
 */

App::uses('AuthComponent', 'Controller/Component');

class Game extends AppModel
{
    public $name = 'Game';
    public $validate = array(
        'mode' => array(
            'valid' => array(
                'rule' => array('inList', array('regular', 'blitz')),
                'message' => 'Merci de rentrer un mode valide',
                'allowEmpty' => false
            )
        ),
        'type' => array(
            'valid' => array(
                'rule' => array('inList', array('realtime', 'delayed', 'ia')),
                'message' => 'Merci de rentrer un type valide',
                'allowEmpty' => false
            )
        ),
        'state' => array(
            'valid' => array(
                'rule' => array('inList', array('ongoing', 'pending', 'finished')),
                'message' => 'Merci de rentrer un état valide',
                'allowEmpty' => false
            )
        )
    );
}