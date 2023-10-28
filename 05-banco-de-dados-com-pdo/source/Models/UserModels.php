<?php

namespace Source\Models;

class UserModels extends Models
{
    /** @var array $safe no update or create */
    protected static $safe = ["id", "created_at", "updated_at"];

    /** @var string $entity database table */
    protected static $entity = "users";

    public function bootstrap()
    {

    }
    
    /**
     * @param int $id
     * @param string $columns
     * @return null|UserModel
     */
    public function load(int $id, string $columns = "*"): ?UserModels
    {
        $load = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE id = :id", "id={$id}");

        // var_dump($load->fetch());

        // neste if vai verificar se teve algum erro ou se não retornou nenhum resultado
        if ($this->fail() || !$load->rowCount()) {
            $this->message = "Usuário não encontrado para o id informado";
            return null;
        }
        return $load->fetchObject(__CLASS__);
    }



    
    public function find($email, string $columns = "*"): ?UserModels
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE email = :email", "email={$email}");

        // neste if vai verificar se teve algum erro ou se não retornou nenhum resultado
        if ($this->fail() || !$find->rowCount()) {
            $this->message = "Usuário não encontrado para o email informado";
            return null;
        }
        return $find->fetchObject(__CLASS__);
    }

    public function all(int $limit = 30, int $offset = 0, string $columns = "*"): ?array
    {
        $all = $this->read("SELECT {$columns} FROM " . self::$entity . " LIMIT :l OFFSET :o", "l={$limit}&o={$offset}");

        // neste if vai verificar se teve algum erro ou se não retornou nenhum resultado
        if ($this->fail() || !$all->rowCount()) {
            $this->message = "Sua consulta não retornou usuários";
            return null;
        }
        return $all->fetchAll(\PDO::FETCH_CLASS, __CLASS__);
    }

    public function save()
    {

    }

    public function destroy()
    {

    }

    private function required()
    {

    }
}