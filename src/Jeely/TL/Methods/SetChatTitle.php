<?php

namespace Jeely\TL\Methods;


/**
 * @class SetChatTitle
 * @description Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property string $title New chat title, 1-255 characters
 *
 * @see https://api.telegram.org/bots/api#setchattitle
 */
class SetChatTitle extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var string $title New chat title, 1-255 characters
     */
    public string $title;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}