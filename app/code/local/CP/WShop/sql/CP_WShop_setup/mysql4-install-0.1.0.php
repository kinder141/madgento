<?php
/**
 * Created by PhpStorm.
 * User: volko
 * Date: 27.09.2018
 * Time: 10:23
 */
die('cp wshop module setup');
//echo 'Running This Upgrade: ';
$installer = $this;
$installer->startSetup();
$installer->run("CREATE TABLE mg_cp_wshop_entities (
        `news_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `title` VARCHAR(255) NOT NULL,
        `content` TEXT NOT NULL,
        `created` DATETIME,

        PRIMARY KEY (`news_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->endSetup();