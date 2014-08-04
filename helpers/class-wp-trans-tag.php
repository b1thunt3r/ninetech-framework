<?php
h2o::addTag('wp_trans');
class WP_Trans_Tag extends H2o_Node
{
    private $_text = null;

    public function __construct($argstring, $parser, $position = 0) {
        $this->_text = stripcslashes(substr($argstring, 1, -1));
    }

    public function render($context, $stream) {
        if ($this->_text) {
            $text = _( $this->_text );
            $stream->write($text);
        }
    }
} 