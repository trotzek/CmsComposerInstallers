<?php
namespace Netresearch\Composer\Installer\Typo3\CoreInstaller;

/*                                                                        *
 * This script belongs to the Composer-TYPO3-Installer package            *
 * (c) 2014 Netresearch GmbH & Co. KG                                     *
 * This copyright notice MUST APPEAR in all copies of the script!         *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

class SymlinkException extends Exception {
	public function __construct($link, $target, $message = NULL) {
		$msg = sprintf('Could not create link from "%1$s" to "%2$s"', $link, $target);
		if ($message) {
			$msg .= ":\n" . $message;
		}
		parent::__construct($msg);
	}
}
?>