<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table      = 'comments';
    protected $primaryKey = 'comment_id';
    protected $allowedFields = ['name', 'comment', 'status'];

    protected $useTimestamps = true;

    public function getComment($comment_id = false)
    {
        if ($comment_id == false) {
            return $this->findAll();
        }

        return $this->where(['comment_id' => $comment_id])->first();
    }
}
