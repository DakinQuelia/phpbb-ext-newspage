<?php
/**
*
* @package migration
* @copyright (c) 2012 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
*
*/

namespace nickvergessen\newspage\migrations\v10x;

class release_1_0_3 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['newspage_mod_version'], '1.0.3', '>=');
	}

	static public function depends_on()
	{
		return array('\nickvergessen\newspage\migrations\v10x\release_1_0_2');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('news_attach_show', 1)),
			array('config.add', array('news_cat_show', 1)),
			array('config.add', array('news_archive_per_year', 1)),

			array('config.update', array('newspage_mod_version', '1.0.3')),
		);
	}
}
