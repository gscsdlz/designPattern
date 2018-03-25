<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 9:47
 */

namespace designPattern\Structural\Facade;


class DataBase
{

    private $selectParameters;
    private $table;
    private $wherePararmeters;

    public function select(...$args)
    {
        foreach ($args as $arg)
            $this->selectParameters[] = $arg;

        return $this;
    }

    public function from($table)
    {
        $this->table = $table;
        return $this;
    }

    public function where($args)
    {
        foreach ($args as $arg)
            $this->wherePararmeters[] = $arg;
        return $this;
    }

    public function get()
    {
        $sql = "SELECT ";
        if (count($this->selectParameters) == 0) {
            $sql .= "* ";
        } else {
            $sql .= $this->selectParameters[0];
            for($i = 1; $i < count($this->selectParameters); $i++) {
                $sql .= ', '. $this->selectParameters[$i];
            }
        }
        $sql .= " FROM " . $this->table;

        if (count($this->wherePararmeters) == 0) {
           $sql .= " WHERE 1";
        } else {
            if (count($this->wherePararmeters[0]) == 2) {
                $sql .= " WHERE ". $this->wherePararmeters[0][0] . " = " . $this->wherePararmeters[0][1];
            } else {
                $sql .= " WHERE ". $this->wherePararmeters[0][0] . $this->wherePararmeters[0][1] . $this->wherePararmeters[0][2];
            }

            for ($i = 0; $i < count($this->wherePararmeters); $i++) {
                if (count($this->wherePararmeters[$i]) == 2) {
                    $sql .= " AND ". $this->wherePararmeters[$i][0] . " = " . $this->wherePararmeters[$i][1];
                } else {
                    $sql .= " AND ". $this->wherePararmeters[$i][0] . " ". $this->wherePararmeters[$i][1] . " ". $this->wherePararmeters[$i][2];
                }
            }
        }

        return $sql;
    }
}