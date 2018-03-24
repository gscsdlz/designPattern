<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:16
 */

namespace designPattern\Structural\DataMapper;

class User
{
    protected $userId;

    protected $username;

    protected $email;

    public function __construct($id = null, $username = null, $email = null)
    {
        $this->username = $username;
        $this->userId = $id;
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param null $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param null $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

}