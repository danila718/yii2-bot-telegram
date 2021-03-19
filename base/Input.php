<?php
namespace aki\telegram\base;

use aki\telegram\types\CallbackQuery;
use aki\telegram\types\Chat;
use aki\telegram\types\From;
use aki\telegram\types\Message;
use aki\telegram\types\MyChatMember;

/**
 * 
 */
class Input extends Type
{

    public $update_id;

    private $_message;

    private $_edited_message;

    private $_callback_query;

    private $_from;

    private $_chat;

    private $_my_chat_member;

    public function init()
    {
        parent::init();

        // ... initialization after configuration is applied
    }

    public function getMessage()
    {
        return $this->_message;
    }

    public function setMessage($value)
    {
        $this->_message = new Message($value);
    }

    public function getEdited_message()
    {
	    return $this->_edited_message;
    }

    public function setEdited_message($value): void
    {
	    $this->_edited_message = $value;
    }

    public function getCallback_query()
    {
        return $this->_callback_query;
    }

    public function setCallback_query($value)
    {
        $this->_callback_query = new CallbackQuery($value);
    }

    public function getFrom()
    {
        return $this->_from;
    }

    public function setFrom($value)
    {
        $this->_from = new From($value);
    }

    public function getChat()
    {
        return $this->_chat;
    }

    public function setChat($value)
    {
        $this->_chat = new Chat($value);
    }

    public function getMy_chat_member()
    {
        return $this->_my_chat_member;
    }

    public function setMy_chat_member($value)
    {
        $this->_my_chat_member = new MyChatMember($value);
    }
}
