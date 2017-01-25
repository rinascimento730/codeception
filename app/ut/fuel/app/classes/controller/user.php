<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Login Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_User extends Controller
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_login()
    {
        return Response::forge(View::forge('user/login'));
    }

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_result()
    {
        $data = array();

        if (\Input::post() and \Auth::login())
        {
            $data['result'] = 'Hello, '.\Input::post('username');
        }
        else
        {
            $data['result'] = 'Login Failed.';
        }

        return Response::forge(View::forge('user/result', $data));
    }

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_regist()
    {
        return Response::forge(View::forge('user/regist'));
    }

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_islogin()
    {
        $data = array();

        if (\Auth::check())
        {
            $data['result'] = 'Logged in as '.\Auth::get('username');
        }

        else
        {
            $data['result'] = 'Not Logged in.';
        }



        return Response::forge(View::forge('user/islogin', $data));
    }

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_create()
    {
        $data = array();

        # Validateion
        $val = Validation::forge();
        $val->add('username', 'Your username')->add_rule('required')
            ->add_rule('min_length', 3)
            ->add_rule('max_length', 10)
            ->add_rule('valid_string', array('alpha', 'numeric'));
        $val->add('password', 'Your password')->add_rule('required')
            ->add_rule('min_length', 3)
            ->add_rule('max_length', 16)
            ->add_rule('valid_string', array('alpha', 'numeric'));
        $val->add('email', 'Your email')->add_rule('required')
            ->add_rule('valid_email');

        if ($val->run())
        {
            \Auth::create_user(
                \Input::post('username'),
                \Input::post('password'),
                \Input::post('email')
            );

            $data['result'] = 'Create User, '.\Input::post('username');
        }
        else
        {
            $data['result'] = 'Create Failed.';
        }

        return Response::forge(View::forge('user/create', $data));
    }
}
