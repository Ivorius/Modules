<?php
/**
 * Class IConfigProvider
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 17.07.13
 */

namespace Flame\Modules\DI\Provider;


interface IConfigProvider
{

	/**
	 * Get array of configurations files
	 *
	 * @return array
	 */
	public function getConfigFiles();

}