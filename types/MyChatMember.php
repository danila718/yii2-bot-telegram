<?php
namespace aki\telegram\types;

use yii\base\Component;

/**
 * @author Akbar Joudi <akbar.joody@gmail.com>
 * This object contains information about one member of a chat.
 */
class MyChatMember extends Component
{
    private $_chat;

    private $_from;

    public $date;

    private $_old_chat_member;

    private $_new_chat_member;

    /**
     *
     */
    public function getChat()
    {
        return $this->_chat;
    }

    /**
     *
     */
    public function setChat($value)
    {
        $this->_chat = new Chat($value);
    }

    /**
     *
     */
    public function getFrom()
    {
        return $this->_from;
    }

    /**
     *
     */
    public function setFrom($value)
    {
        $this->_from = new From($value);
    }

    /**
     *
     */
    public function getOld_chat_member()
    {
        return $this->_old_chat_member;
    }

    /**
     *
     */
    public function setOld_chat_member($value)
    {
        $this->_old_chat_member = new ChatMember($value);
    }

    /**
     *
     */
    public function getNew_chat_member()
    {
        return $this->_new_chat_member;
    }

    /**
     *
     */
    public function setNew_chat_member($value)
    {
        $this->_new_chat_member = new ChatMember($value);
    }
}