<?php namespace Baun\Interfaces;

interface Theme {

	/**
	 * @param string $themes_path path to the themes folder
	 */
	public function __construct($themes_path);

	/**
	 * Add another path to look for templates
	 *
	 * @param string $path
	 */
	public function addPath($path);

	/**
	 * Add a global variable (available in all templates)
	 *
	 * @param string $name name of the variable
	 * @param mixed $value
	 */
	public function addGlobal($name, $value);

	/**
	 * Render the given template
	 *
	 * @param string $template name of the template
	 * @param array $data optional data for the template
	 */
	public function render($template, $data = []);

	/**
	 * Add a custom function/variable to the template engine
	 *
	 * @param string $name name of the function/variable
	 * @param array $data optional data to pass to the function/variable
	 */
	public function custom($name, $data);

}