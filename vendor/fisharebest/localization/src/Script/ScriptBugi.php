<?php namespace Fisharebest\Localization;

/**
 * Class ScriptBugi - Representation of the Buginese script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBugi extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Bugi';
	}

	/** {@inheritdoc} */
	public function number() {
		return '367';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Buginese';
	}
}