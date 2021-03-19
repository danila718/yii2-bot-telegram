<?php
namespace aki\telegram\types;

use yii\base\Component;

/**
 * @author Daniil Simonyan <danila718@gmail.com>
 * Represents an invite link for a chat.
 */
class ChatInviteLink extends Component
{
    public $invite_link;

    private $_creator;

    public $is_primary;

    public $is_revoked;

    public $expire_date;

    public $member_limit;

    /**
     *
     */
    public function getCreator()
    {
        return $this->_creator;
    }

    /**
     *
     */
    public function setCreator($value)
    {
        $this->_creator = new User($value);
    }
}