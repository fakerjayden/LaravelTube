<?php

namespace App\Transformers;

/**
 * Class CommentTransformer
 * @package App\Transformers
 */
class CommentTransformer extends Transformer
{
    /**
     * @param $comment
     * @return array
     */
    public function transform($comment)
    {
        return [
            'user_id'    => (int) $comment['user_id'],
            'video_id' => (int) $comment['video_id'],
            'comment'     => $comment['comment'],
        ];
    }
}