<?php
h2o::addTag('wp_do_action');
class wp_do_action_tag {
    private $_action = null;

    public function __construct($argstring, $parser, $position = 0) {
        $this->_action = stripcslashes(substr($argstring, 1, -1));
    }

    public function render($context, $stream) {
        if ($this->_action) {

            ob_start();

            do_action( $this->_action );
            $output = ob_get_contents();

            ob_end_clean();

            $stream->write($output);
        }
    }
} 