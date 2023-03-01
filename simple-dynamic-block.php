<?php
/**
 * Plugin Name:       Simple Dynamic Block
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       simple-dynamic-block
 *
 * @package           create-block
 */

function render_callback($attributes)
{
	$title = $attributes['title'];
	$author = $attributes['author'];
	$summary = $attributes['summary'];

	return <<<HTML
      <div class="book__wrapper">
        <h3 class="book__title">$title</h3>
        <p class="book__author">$author</p>
        <p class="book__summary">$summary</p>
      </div>
HTML;
}

function simple_dynamic_block()
{
	register_block_type(__DIR__ . '/build', [
		'attributes' => [
			'title' => ['type' => 'string', 'default' => ''],
			'author' => ['type' => 'string', 'default' => ''],
			'summary' => ['type' => 'string', 'default' => '']
		],
		'render_callback' => 'render_callback'
	]);

}

add_action('init', 'simple_dynamic_block');
