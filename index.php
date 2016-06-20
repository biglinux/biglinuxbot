<?php

require 'includes/Telegram.php';
require 'includes/Config.php';
require 'includes/Utils.php';

use KaianaBot\Telegram;

$telegram = new Telegram(API_TOKEN);

$telegram->cmd('<<:any>>', function ($message) use ($telegram){

	//if(startsWith($message, BOT_NAME)){
		//if(strlen($message) > 200){
			$telegram->sendMessage("teste", $telegram->getChatId());
		//}
	//}

});

$telegram->singleRun();
//$telegram->run();
