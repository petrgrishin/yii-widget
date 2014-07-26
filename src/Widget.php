<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Widget;


interface Widget {

    public function getView();

    public function setView($view);

    public function getName();

    public function setName($name);
}
