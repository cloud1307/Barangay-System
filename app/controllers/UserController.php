<?php
session_start();

class UserController
{
    private $requestMethod, $role, $options, $pusher, $client, $userModel, $rateLimitModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->rateLimitModel = new RateLimitModel();
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];

        $this->rateLimitModel->checkRateLimit($_SERVER['REMOTE_ADDR']);

        if (isset($_SESSION['user_role'])) {
            $this->role = $_SESSION['user_role'];
        } else {
            $this->role = false;
        }
    }

    public function index()
    {
        if ($this->role) {
            header("Location: /$this->role/home");
        }

        loadView('head');
        loadView('index');
    }

    public function login()
    {
        if ($this->requestMethod == 'POST') {
            extract($_POST);
            $user = $this->userModel->check($user_email);
            if ($user) {
                if (password_verify($user_password, $user['user_password'])) {
                    foreach ($user as $key => $value) {
                        if ($key !== 'user_password') {
                            $_SESSION[$key] = $value;
                        }
                    }
                    echo json_encode(['success' => 'true', 'message' => 'Logged in Successfully!', 'user_role' => $user['user_role']]);
                    exit;
                }
            }
            echo json_encode(['success' => 'false', 'message' => 'Invalid username or password']);
            return false;
        } else {
            http_response_code(404);
            die("File not found.");
        }
    }

    public function logout()
    {
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params['path'],
                $params["domain"],
                $params["secure"],
                $params['httpOnly"]']
            );
        }

        session_destroy();
        header("Location: /");
        exit;
    }
}
