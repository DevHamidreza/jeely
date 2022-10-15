<?php

namespace Jeely\TL\Methods;


/**
 * @class SetChatDescription
 * @description Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property string $description New chat description, 0-255 characters
 *
 * @see https://api.telegram.org/bots/api#setchatdescription
 */
class SetChatDescription extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}