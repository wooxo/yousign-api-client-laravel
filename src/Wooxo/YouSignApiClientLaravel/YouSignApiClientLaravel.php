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
        parent::__construct(null);
        $this->setLogin(Config::get('yousign-api-client-laravel::config.login'));
        if(!Config::get('yousign-api-client-laravel::config.isEncryptedPassword')) {
            $this->setPassword($this->encryptPassword(Config::get('yousign-api-client-laravel::config.password')));
        } else {
            $this->setPassword(Config::get('yousign-api-client-laravel::config.username'));
        }

        $this->setApiKey(Config::get('yousign-api-client-laravel::config.api_key'));
        $this->setEnvironment(Config::get('yousign-api-client-laravel::config.environment'));
    }

}
