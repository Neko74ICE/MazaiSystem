<?php

namespace MazaiCrafty\MazaiSystem;

# Base
use pocketmine\plugin\PluginBase;

# Player
use pocketmine\Player;

# Server
use pocketmine\Server;

# Event
use MazaiSystem\MazaiCrafty\MazaiSystem\event\Event;

# Command
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;

# Provider

# Task

# Utils

# Etc

class MainClass extends PluginBase implements Listener
{
	public function onLoad()
	{
	}

	public function onEnable()
	{
	    $Server = Server::getInstance();

		$Server->getPluginManager()->registerEvents($this, $this);
		$Server->getLogger()->info(TextFormat::GREEN "Successfully enabled");

		date_default_timezone_set('Asia/Tokyo');
		echo date('Y/m/d G:i:s');
	}
}