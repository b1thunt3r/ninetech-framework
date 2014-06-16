<?php

/**
 * Class NF_Widget
 */
abstract class NF_Widget extends WP_Widget {
	public $widget_id;
	public $widget_name;
	public $widget_description;
	public $widget_cssclass;
	public $widget_settings;

	public function __construct() {
		$ops = array(
			'classname'   => $this->widget_cssclass,
			'description' => $this->widget_description
		);

		parent::__construct( $this->widget_id, $this->widget_name, $ops );
	}

	/**
	 * @param $template
	 * @param $model
	 */
	protected function renderWidget( $template, $model ) {
		$h2o = new h2o( $template );
		echo $h2o->render( $model );
	}

	/**
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	/**
	 * @param array $args
	 * @param array $instance
	 *
	 * @throws Exception
	 */
	public function widget( $args, $instance ) {
		throw new Exception(__CLASS__."\\".__METHOD__." is not implemented.");
	}
}