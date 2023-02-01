<?php

namespace Down\commands;

use Down\Main;
use Down\player\Player;

use pocketmine\world\Level;
use pocketmine\utils\TextFormat as TE;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use pocketmine\permission\DefaultPermissions;

class Nick extends Command
{

	public function __construct(private Base $plugin)
	{
		parent::__construct('nick', TextFormat::GREEN . 'Change your name with ease!'.');
		$this->setPermission('nick.command.use');
		$this->setPermissionMessage(TextFormat::RED . 'INVALID! You do not have permission to run this command. '.');
	}

	public function execute(
