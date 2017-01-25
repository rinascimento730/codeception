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
class Controller_Login extends Controller
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        return Response::forge(View::forge('login/index'));
    }

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_result()
    {
        # Validateion
        $val = Validation::forge();
        $val->add('user_name', 'Your username')->add_rule('required')
            ->add_rule('valid_email');
        $val->add('password', 'Your password')->add_rule('required')
            ->add_rule('min_length', 3)
            ->add_rule('max_length', 10)
            ->add_rule('valid_string', array('alpha', 'numeric'));

        if ($val->run())
        {
            $result = 'Hello, '.\Input::post('user_name');
        }
        else
        {
            $result = 'Login Failed.';
        }

        return Response::forge(View::forge('login/result', array('result' => $result)));
    }
}
