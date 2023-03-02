<?php
namespace Jeely\Tools;


class MessageHandler {

	public $update;

	protected const PARAMETER_REGEX = '/\{((?:(?!\d+,?\d+?)\w)+?)\}/miu';

	public function __construct(\Jeely\TL\Update $update) {
		$this->update = $update;
	}



	private function call(callable $callback, array $matchs) {
		$params = $this->loadMatch($matchs);
		$callback(...$params);
	}


	private function loadMatch(array $match) {
		$params = array();
		foreach ($match as $key => $value) {
			if (is_string($key)) {
				$params[$key] = $value[0];
			}
		}
		return $params;
	}


	public function onCommand(string $command, callable $callback) {
		$command = str_replace('/', '\/', "/{$command}");
		$pattern = '/^'.preg_replace(self::PARAMETER_REGEX, '(?<$1>.*)', $command).' ?$/miu';

		if ($this->update->message->isText() && preg_match_all($pattern, $this->update->message->text, $matchs)) {
			$this->call($callback, $matchs);
		}
	}


	public function onText(string $pattern, callable $callback): void
	{
		$pattern = '/^'.preg_replace(self::PARAMETER_REGEX, '(?<$1>.*)', $pattern).' ?$/miu';
		if ($this->update->message->isText() && preg_match_all($pattern, $this->update->message->text, $matchs)) {
			$this->call($callback, $matchs);
		}
	}


	function onMatch(string $pattern, $input, callable $callback): void
	{
		if (preg_match($pattern, $input, $matches)) {
			$callback($matches);
		}
	}


	public function onCallback(string $pattern, callable $callback): void
	{
		$pattern = '/^'.preg_replace(self::PARAMETER_REGEX, '(?<$1>.*)', $pattern).' ?$/miu';
		if (!empty($this->update->CallbackQuery->getMessage()) && preg_match_all($pattern, $this->update->CallbackQuery->getMessage(), $matchs)) {
			$this->call($callback, $matchs);
		}
	}

}
