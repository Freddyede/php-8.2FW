<?php

namespace Core\Modules;

/**
 * @author Freddyede<patouillardfranck3@gmail.com>
 * @class @AuthenticatorModules
 * @desc This class contains all authenticator roads
 */
class AuthenticatorRoadsModules
{
    /**
     * @var array $roads
     * @desc This property contains all roads for all users
     * [
     *      "system" => [
     *      ],
     *      "routes" => [
     *          "authenticated" => [
     *              "GET" => [], "POST" => [], "PUT" => [], "PATCH" => []
     *          ],
     *          "notAuthenticated" => [
     *              "GET" => [], "POST" => [], "PUT" => [], "PATCH" => []
     *          ]
     *      ]
     * ]
     */
    private static array $roads = [];
}