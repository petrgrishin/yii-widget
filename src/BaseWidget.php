<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Widget;


use CWidget;

abstract class BaseWidget extends CWidget implements Widget {
    private $view;
    private $name;

    public static function className() {
        return get_called_class();
    }

    /**
     * @return \PetrGrishin\View\View
     */
    public function getView() {
        return $this->view;
    }

    /**
     * @param \PetrGrishin\View\View $view
     * @return $this
     */
    public function setView($view) {
        $this->view = $view;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
}
 