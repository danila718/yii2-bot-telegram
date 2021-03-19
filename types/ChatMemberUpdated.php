<?php
namespace aki\telegram\types;

use yii\base\Component;

/**
 * @author Daniil Simonyan <danila718@gmail.com>
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated extends Component
{
    private $_chat;

    private $_from;

    public $date;

    private $_old_chat_member;

    private $_new_chat_member;

    private $_invite_link;

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

    /**
     *
     */
    public function getInvite_link()
    {
        return $this->_invite_link;
    }

    /**
     *
     */
    public function setInvite_link($value)
    {
        $this->_invite_link = new ChatInviteLink($value);
    }
}