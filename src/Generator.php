<?php
namespace nonamenerd\Uuid;

use yii\base\Component;
use aracoool\uuid\Uuid;

/**
 * Uuid generator component
 *
 * @uses Component
 * @author Denis Semenov <nonamenerd@gmail.com>
 */
class Generator extends Component
{
    /**
     * Default uuid version
     *
     * @var string $version
     */
    public $version = Uuid::V4;

    /**
     * Available uuid algorithms versions
     *
     * @var array $versions
     */
    protected $versions = [
        Uuid::V3 => 'v3',
        Uuid::V4 => 'v4',
        Uuid::V5 => 'v5',

    ];

    /**
     * Generate uuid
     *
     * @param array $params Parameters to generate uuid value
     * @return string Generated uuid value
     */
    public function generate($params = [])
    {
        return call_user_func_array("\aracoool\uuid\Uuid::{$this->versions[$this->version]}", $params);
    }
}
