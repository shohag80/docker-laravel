<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    /**
     * @return [collection]
     */
    public function getAll()
    {
        return User::all();
    }

    /**
     * @param string $id
     *
     * @return [collection or object]
     */
    public function getById(string $id)
    {
        return User::find($id);
    }

    /**
     * @param array $data
     *
     * @return [object]
     */
    public function create(array $data)
    {
        return User::create($data);
    }

    /**
     * @param string $id
     * @param array $data
     *
     * @return [object]
     */
    public function update(string $id, array $data)
    {
        $user_info = User::findOrFail($id);
        $user_info->update($data);
        return $user_info;
    }

    /**
     * @param string $id
     *
     * @return [bollean]
     */
    public function delete(string $id)
    {
        $user_info = User::findOrFail($id);
        $user_info->delete();
        if ($user_info) {
            return true;
        } else {
            return false;
        }
    }
}
