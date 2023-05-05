<?php

class UserController
{
    public function index()
    {
        return json_encode(["user" => "ok"]);
    }
    // Exibir informações do usuário
    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            return json_encode($user);
        }
        header('HTTP/1.0 404 Not Found');

        return json_encode(['error' => 'User not found']);
    }

    // Criar novo usuário
    public function store()
    {
        // Obter dados do corpo da solicitação POST
        $data = json_decode(file_get_contents('php://input'), true);

        // Validar entrada
        if (empty($data['name']) || empty($data['email'])) {
            header('HTTP/1.0 400 Bad Request');

            return json_encode(['error' => 'Name and email are required']);
        }

        // Criar usuário
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        return json_encode($user);
    }

    // Atualizar usuário existente
    public function update($id)
    {
        // Obter dados do corpo da solicitação PUT
        $data = json_decode(file_get_contents('php://input'), true);

        // Validar entrada
        if (empty($data['name']) && empty($data['email'])) {
            header('HTTP/1.0 400 Bad Request');

            return json_encode(['error' => 'Name or email are required']);
        }

        // Obter usuário existente
        $user = User::find($id);

        if ($user) {
            // Atualizar dados do usuário
            if (!empty($data['name'])) {
                $user->name = $data['name'];
            }
            if (!empty($data['email'])) {
                $user->email = $data['email'];
            }
            $user->save();

            return json_encode($user);
        }
        header('HTTP/1.0 404 Not
            Found');

        return json_encode(['error' => 'User not found']);
    }

    // Excluir usuário existente
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();

            return json_encode(['success' => true]);
        }
        header('HTTP/1.0 404 Not Found');

        return json_encode(['error' => 'User not found']);
    }
}
