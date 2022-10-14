<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultCachedMpeg4Gif
 * @description Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers. By default, this animated MPEG-4 file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 *
 * @method string getType() Type of the result, must be mpeg4_gif
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getMpeg4FileId() A valid file identifier for the MPEG4 file
 * @method string getTitle() Optional. Title for the result
 * @method string getCaption() Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the video animation
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isMpeg4FileId()
 * @method bool isTitle()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setMpeg4FileId()
 * @method $this setTitle()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetMpeg4FileId()
 * @method $this unsetTitle()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 *
 * @property string $type Type of the result, must be mpeg4_gif
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $mpeg4_file_id A valid file identifier for the MPEG4 file
 * @property string $title Optional. Title for the result
 * @property string $caption Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the video animation
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultcachedmpeg4gif 
 */
class InlineQueryResultCachedMpeg4Gif extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'type' => 'string',
		'id' => 'string',
		'mpeg4_file_id' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
		'caption_entities' => 'MessageEntity[]',
		'reply_markup' => 'InlineKeyboardMarkup',
		'input_message_content' => 'InputMessageContent',
	];
}