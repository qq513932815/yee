<?php

class Sql
{
    protected $db; //PDO数据库实例
    protected $result = ""; //结果集
    protected $table_name; //表名
    private $fields_str; //字段名
    private $values_str; //值名
    private $update_str; //更新内容
    private $where = ""; //where条件
    private $like = "";    //like条件
    private $order = ""; //ORDER BY 条件
    private $group = ""; //GROUP BY 条件
    private $having = ""; //HAVING 条件
    private $limit = ""; //LIMIT 条件
    private $attrs = "*"; //查询字段名


    //链接数据库
    public function connect()
    {
        $dns = sprintf("mysql:host=%s;dbname=%s;charset=utf8", DB_HOST, DB_NAME);
        $this->db = new PDO($dns, DB_USER, DB_PASS, array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));

    }

    //查找普通语句
    public function query($sql)
    {
        $this->result = $this->db->prepare($sql);
        $this->result->execute();
        return $this->result->fetchAll();

    }
    //一次性查询多条sql语句
    public function someQuery($sql)
    {
        $this->result = $this->db->prepare($sql);
        $this->result->execute();
        do {
            $data[] = $this->result->fetchAll();
        } while ($this->result->nextRowset());
        return $data;
    }
    public function someQueryOne($sql)
    {
        $this->result = $this->db->prepare($sql);
        $this->result->execute();
        do {
            $data[] = $this->result->fetch();
        } while ($this->result->nextRowset());
        return $data;
    }

    public function changeQuery($sql)
    {
        return $this->getEffectCount($sql);
    }

    public function getLastId()
    {
        return $this->db->lastInsertId();
    }


    //查找所有数据
    public function selectAll()
    {
        $sql = sprintf("SELECT %s FROM %s %s %s %s %s %s", $this->attrs, $this->table_name, $this->where, $this->group, $this->having, $this->order, $this->limit);

        $result = $this->db->prepare($sql);
        $result->execute();
        $this->result = $result->fetchAll();
        return $this->result;
    }

    //查找指定单条数据
    public function select()
    {
        $sql = sprintf("SELECT %s FROM %s %s", $this->attrs, $this->table_name, $this->where);
//        echo $sql;
        $result = $this->db->prepare($sql);
        $result->execute();
        $this->result = $result->fetch();
        return $this->result;
    }

    //返回结果集个数
    public function getCount()
    {
        return count($this->result);

    }

    //指定字段查询转换字符
    public function selectAttrToStr($attrs)
    {
        if ($attrs) {
            $this->attrs = implode(",", $attrs);
        }

        return $this;
    }


    //删除数据
    public function delete()
    {
        $sql = sprintf("DELETE  FROM %s %s", $this->table_name, $this->where);
        return $this->getEffectCount($sql);
    }

    //更新数据
    public function update($data)
    {
        $this->formatUpdate($data);
        $sql = sprintf("UPDATE %s  SET %s %s", $this->table_name, $this->update_str, $this->where);
//        echo $sql;
        return $this->getEffectCount($sql);
    }

    //插入数据
    public function add($data)
    {
        $this->formatInsert($data);
        $sql = sprintf("INSERT INTO %s(%s) values(%s) ", $this->table_name, $this->fields_str, $this->values_str);
//        echo $sql;
        return $this->getEffectCount($sql);

    }

    //执行sql,返回受影响行数
    public function getEffectCount($sql)
    {
        $this->result = $this->db->prepare($sql);
        $this->result->execute();
        return $this->result->rowCount();
    }

    //where条件拼接字符
    public function where($where)
    {
        if ($where) {
            $this->where = " WHERE " . implode(" ", $where);
        }
        $this->where .= " " . $this->like;
        return $this;
    }

    //order by拼接字符
    public function order($order)
    {
        if ($order) {
            $this->order = " ORDER BY " . implode(",", $order);
        }
        return $this;
    }

    // like 拼接字符
    public function like($like)
    {
        if ($like) {
            $this->like = implode(" ", $like);

        }
        return $this;
    }

    //group拼接字符
    public function group($group)
    {
        if ($group) {
            $this->group = " GROUP BY " . implode(",", $group);
        }
        return $this;

    }

    //having拼接字符
    public function having($having)
    {
        if ($having) {
            $this->having = " HAVING " . implode(" ", $having);
        }
        return $this;

    }

    //limit拼接字符
    public function limit($limit)
    {
        if ($limit) {
            $this->limit = " LIMIT " . implode(",", $limit);
        }
        return $this;

    }

    //格式化插入语句
    public function formatInsert($data)
    {
        foreach ($data as $k => $v) {
            $fields[] = $k;
            $values[] = is_numeric($v) ? $v : "'" . $v . "'";
        }
        $this->fields_str = implode(",", $fields);
        $this->values_str = implode(",", $values);


    }

    //格式化更新语句
    public function formatUpdate($data)
    {
        foreach ($data as $k => $v) {
            $v = is_numeric($v) ? $v : "'" . $v . "'";
            $strs[] = "{$k}=$v";
        }
        $this->update_str = implode(",", $strs);

    }


}