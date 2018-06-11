<?php

namespace eru\nczone\controller;

use phpbb\auth\auth;
use phpbb\config\config;
use phpbb\user;
use Symfony\Component\HttpFoundation\JsonResponse;

class api
{
    /** @var config */
    protected $config;
    /** @var user */
    protected $user;
    /** @var auth */
    protected $auth;

    public function __construct(config $config, user $user, auth $auth)
    {
        $this->config = $config;
        $this->user = $user;
        $this->auth = $auth;
    }

    /**
     * Returns the list of logged in users as json.
     *
     * @route /nczone/api/logged_in_users
     *
     * @return JsonResponse
     */
    public function logged_in_users(): JsonResponse
    {
        # todo: return the list of logged in users
        $users = (object)[];
        return new JsonResponse($users);
    }
}
