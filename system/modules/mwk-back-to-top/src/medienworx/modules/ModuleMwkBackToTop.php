<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-fire-modal-window
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */

namespace medienworx;

class ModuleMwkBackToTop extends \Module {

	/**
	 * @var string
	 */
	protected $strTemplate ='mod_mwk_back_to_top';

	protected function compile() {

		$jsSelector = 'mwk' . $this->id . '2';

		// generate css for background color
		$style = 'style="';

		if ($this->mwk_back_to_top_bgcolor) {
			$bgColor = deserialize($this->mwk_back_to_top_bgcolor, true);
			$style .= 'background-color:' . $this->compileColor($bgColor).';';
		}
		$style .= '"';
		if ($style == 'style="background-color:#;"') {
			$style = '';
		}

		$this->Template->jsSelector = $jsSelector;
		$this->Template->backToOffset = $this->mwk_back_to_top_offset;
		$this->Template->backToOffsetOpacity = $this->mwk_back_to_top_offset_opacity;
		$this->Template->backToScrollDuration = $this->mwk_back_to_top_scroll_duration;
		$this->Template->backToTopButtonSize = $this->mwk_back_to_top_size;
		$this->Template->backToTopButtonRight = $this->mwk_back_to_top_right;
		$this->Template->backToTopButtonBottom = $this->mwk_back_to_top_bottom;
		$this->Template->backToTopButtonRadius = $this->mwk_back_to_top_radius;
		$this->Template->styleMod = $style;


		// load css and javascript
		if(TL_MODE == 'FE')
		{
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-back-to-top/assets/jquery/1.11.2/jquery.min.js');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-back-to-top/assets/js/modernizr.js');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-back-to-top/assets/css/mwk-backtotop.css');
		}
	}

	/**
	 * Compile a color value and return a hex or rgba color
	 * @param mixed
	 * @param boolean
	 * @param array
	 * @return string
	 */
	protected function compileColor($color, $blnWriteToFile=false, $vars=array())
	{
		if (!is_array($color))
		{
			return '#' . $this->shortenHexColor($color);
		}
		elseif (!isset($color[1]) || empty($color[1]))
		{
			return '#' . $this->shortenHexColor($color[0]);
		}
		else
		{
			return 'rgba(' . implode(',', $this->convertHexColor($color[0], $blnWriteToFile, $vars)) . ','. ($color[1] / 100) .')';
		}
	}


	/**
	 * Try to shorten a hex color
	 * @param string
	 * @return string
	 */
	protected function shortenHexColor($color)
	{
		if ($color[0] == $color[1] && $color[2] == $color[3] && $color[4] == $color[5])
		{
			return $color[0] . $color[2] . $color[4];
		}

		return $color;
	}


	/**
	 * Convert hex colors to rgb
	 * @param string
	 * @param boolean
	 * @param array
	 * @return array
	 * @see http://de3.php.net/manual/de/function.hexdec.php#99478
	 */
	protected function convertHexColor($color, $blnWriteToFile=false, $vars=array())
	{
		// Support global variables
		if (strncmp($color, '$', 1) === 0)
		{
			if (!$blnWriteToFile)
			{
				return array($color);
			}
			else
			{
				$color = str_replace(array_keys($vars), array_values($vars), $color);
			}
		}

		$rgb = array();

		// Try to convert using bitwise operation
		if (strlen($color) == 6)
		{
			$dec = hexdec($color);
			$rgb['red'] = 0xFF & ($dec >> 0x10);
			$rgb['green'] = 0xFF & ($dec >> 0x8);
			$rgb['blue'] = 0xFF & $dec;
		}

		// Shorthand notation
		elseif (strlen($color) == 3)
		{
			$rgb['red'] = hexdec(str_repeat(substr($color, 0, 1), 2));
			$rgb['green'] = hexdec(str_repeat(substr($color, 1, 1), 2));
			$rgb['blue'] = hexdec(str_repeat(substr($color, 2, 1), 2));
		}

		return $rgb;
	}
}