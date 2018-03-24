<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:19
 */

namespace designPattern\Structural\DataMapper;


class UserMapper
{
    protected $adapter;

    public function __construct(DBAL $dbLayer)
    {
        $this->adapter = $dbLayer;
    }

    public function save(User $user)
    {
        $data = [
            'userid' => $user->getUserId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
        ];

        if (null === ($id = $user->getUserId())) {
            unset($data['userid']);
            $this->adapter->insert($data);

            return true;
        } else {
            $this->adapter->update($data, ['userid = ?' => $id]);

            return true;
        }
    }

    public function findById($id)
    {
        $result = $this->adapter->find($id);

        if (0 == count($result)) {
           throw \InvalidArgumentException("User #$ud not found");
        }

        $row = $result->current();

        return $this->mapObject($row);
    }

    public function findAll()
    {
        $resultSet = $this->adapter->findAll();
        $entries   = array();

        foreach ($resultSet as $row) {
            $entries[] = $this->mapObject($row);
        }

        return $entries;
    }

    /**
     * 映射表记录到对象
     *
     * @param array $row
     *
     * @return User
     */
    protected function mapObject(array $row)
    {
        $entry = new User();
        $entry->setUserID($row['userid']);
        $entry->setUsername($row['username']);
        $entry->setEmail($row['email']);

        return $entry;
    }

}
