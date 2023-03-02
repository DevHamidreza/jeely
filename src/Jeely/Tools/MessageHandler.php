<?php
namespace Jeely\Tools;

use Jeely\TL\Type\Message;

class MessageHandler extends Message {

   public function onCommand(string $command, callable $callback): void{
	$pattern = '/^\/' . preg_quote($command, '/') . '\b/i';
	if ($this->isMessage() && preg_match($pattern, $this->message->text)) {
		$callback();
	} 
    }

    public function onText(callable $callback): void {
        // implementation of onText function
    }

    
}
