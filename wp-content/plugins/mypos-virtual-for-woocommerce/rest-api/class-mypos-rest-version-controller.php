<?php
/**
 * REST API Version controller
 *
 * Handles requests to the /upsells endpoint.
 */

defined('ABSPATH') || exit;

/**
 * REST API Version controller class.
 */
class MyPOS_REST_Version_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'mp';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'version';

    /**
     * Version.
     *
     * @var string
     */
    protected $version = 'v1';

    /**
     * Register the routes for upsells.
     */
    public function register_routes()
    {
        register_rest_route($this->namespace, '/' . $this->rest_base, array(
            array(
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => array( $this, 'check_version' ),
                'permission_callback' => '__return_true',
            )
        ));
    }

    public function check_version() {
        return rest_ensure_response($this->version);
    }
}

