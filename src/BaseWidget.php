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
     * @throws \Exception
     * @return \PetrGrishin\View\View
     */
    public function getView() {
        if (empty($this->view)) {
            throw new \Exception('View is not set');
        }
        return $this->view;
    }

    /**
     * @param \PetrGrishin\View\View $view
     * @return static
     */
    public function setView($view) {
        $this->view = $view;
        return $this;
    }

    /**
     * @throws \Exception
     * @return string
     */
    public function getName() {
        if (empty($this->name)) {
            throw new \Exception('Name is not set');
        }
        return $this->name;
    }

    /**
     * @param string $name
     * @return static
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
}
 