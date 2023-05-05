
<?php

class User
{
    public $id;
    public $name;
    public $email;

    // Encontrar usuário pelo ID
    public static function find($id)
    {
        // Consultar banco de dados ou outra fonte de dados
        $data = [
            ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
            ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
            ['id' => 3, 'name' => 'Charlie', 'email' => 'charlie@example.com'],
        ];

        foreach ($data as $item) {
            if ($item['id'] == $id) {
                $user = new User();
                $user->id = $item['id'];
                $user->name = $item['name'];
                $user->email = $item['email'];

                return $user;
            }
        }

        return null;
    }

    // Salvar usuário no banco de dados ou outra fonte de dados
    public function save()
    {
        // Implementar lógica de persistência
    }

    // Excluir usuário do banco de dados ou outra fonte de dados
    public function delete()
    {
        // Implementar lógica de exclusão
    }
}
