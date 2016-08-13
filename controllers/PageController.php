<?php

require_once __DIR__ . '/../utils/helper_functions.php';
function pageController()
{
//    $input = new Input;
    $user = new User;
//    $auth = new Auth;

    Auth::attempt(Input::get('username'), Input::get('password'));

    // defines array to be returned and extracted for view
    $data = [];

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');
    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {
        $request = $_SERVER['REQUEST_URI'];
    }

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {

        case '/':
            if (Auth::check()) {
                $main_view = '../views/hearth/deck-builder.php';
            } else {
                $main_view = '../views/users/login.php';
            }
            break;
        case '/deck-builder':
            if (Auth::check()) {
                $main_view = '../views/hearth/deck-builder.php';
            } else {
                $main_view = '../views/users/login.php';
            }
            break;
        case '/logout':
            Auth::logout();
            header('Location: /');
            break;
        case '/user-edit':
            if (Auth::check()) {
                $main_view = '../views/users/edit.php';
            } else {
                $main_view = '../views/users/login.php';
            }
            break;
        case '/register':

            if (
                Input::has('registerName') &&
                Input::has('username') &&
                Input::has('email') &&
                Input::has('password') &&
                Input::has('confirm-password') &&
                (Input::get('confirm-password') === Input::get('password'))
            ) {
                $user->NAME = Input::get('registerName');
                $user->username = Input::get('username');
                $user->email = Input::get('email');
                $user->password = Input::get('password');
                $user->save();

                $_SESSION['NAME'] = Input::get('registerName');
                $_SESSION['username'] = Input::get('username');
                $_SESSION['email'] = Input::get('email');
                $_SESSION['password'] = $user->password;
                header('Location: /');
            }
            $main_view = '../views/users/login.php';
            break;

        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());