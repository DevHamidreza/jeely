<?php

namespace Jeely\TL\Methods;


use Jeely\TL\Types\ChatAdministratorRights;

/**
 * @class SetMyDefaultAdministratorRights
 * @description Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are are free to modify the list before adding the bot. Returns True on success.
 *
 * @property ChatAdministratorRights $rights A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
 * @property bool $for_channels Pass True to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
 * 
 * @see https://api.telegram.org/bots/api#setmydefaultadministratorrights
 */
class SetMyDefaultAdministratorRights  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'bool';

	/**
 	* @var ?bool $for_channels Pass True to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
 	*/
	public ?bool $for_channels = null;

	/**
 	* @var mixed $rights A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
 	*/
	public mixed $rights = null;

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return bool
	 */
	public function __invoke()
	{
		return $this->call();
	}
}