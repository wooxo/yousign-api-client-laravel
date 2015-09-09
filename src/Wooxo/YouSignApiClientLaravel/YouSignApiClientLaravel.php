<?php
namespace Wooxo\YouSignApiClientLaravel;
use YousignAPI\YsApi;
use Illuminate\Support\Facades\Config;

/**
 * Library YouSignApiClientLaravel
 *
 * @package Wooxo\YouSignApiClientLaravel
 */
class YouSignApiClientLaravel extends YsApi {

    /**
     * Constructor
     */
    public function __construct(){
        $yousign = parent::__construct(null);
        $yousign->setLogin(Config::get('yousign-api-client-laravel::config.login'));
        if(!Config::get('yousign-api-client-laravel::config.isEncryptedPassword')) {
            $yousign->setPassword($yousign->encryptPassword(Config::get('yousign-api-client-laravel::config.password')));
        } else {
            $yousign->setPassword(Config::get('yousign-api-client-laravel::config.username'));
        }

        $yousign->setApiKey(Config::get('yousign-api-client-laravel::config.api_key'));
        $yousign->setEnvironment(Config::get('yousign-api-client-laravel::config.environment'));
    }

}
