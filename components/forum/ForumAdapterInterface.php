<?php
namespace app\components\forum;

use app\models\User;

interface ForumAdapterInterface
{
    public function getPostDate($user, $number);
    /**
     * Get post count for a specific user.
     * @param User $user
     * @return int
     */
    public function getPostCount($user);

    /**
     * Get post counts for all users indexed by user ID.
     *
     * Can return null if it is not implemented.
     *
     * @return array|null
     */
    public function getPostCounts();
    public function ensureForumUser(User $user, $password);
    public function changeUserPassword(User $user, $password);
}