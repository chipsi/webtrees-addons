<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEl;

/**
 * Class LocaleEl - Greek
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEl extends AbstractLocale implements LocaleInterface {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Ελληνικά';
	}

	/** {@inheritdoc} */
	public function endonymSortable() {
		return 'ΕΛΛΗΝΙΚΆ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageEl;
	}

	/** {@inheritdoc} */
	public function numberSymbols() {
		return array(
			self::GROUP   => self::DOT,
			self::DECIMAL => self::COMMA,
		);
	}
}
