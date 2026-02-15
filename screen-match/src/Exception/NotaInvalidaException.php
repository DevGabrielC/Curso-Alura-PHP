<?php

namespace ScreenMatch\Exception;
class NotaInvalidaException extends \InvalidArgumentException {
    public function __construct() {
        parent::__construct("A nota não pode ser negativa e maior que 10.");
    }
}