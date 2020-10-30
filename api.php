<?
abstract class Api
{
	public $apiName = '';
	protected $method = '';

	public $requestUri = [];
	public $requestParams = [];

	protected $action = '';

	public function __construct() 
	{
		header("Access-Control-Allow-Orgin: *");
        header("Access-Control-Allow-Methods: *");
        header("Content-Type: application/json");

		// ������ GET ����������
		$this->requestUri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
		$this->requestParams = $_REQUEST;

		// ����������� ������ �������
		$this->method = $_SERVER['REQUEST_METHOD'];
		if($this0>method == 'POST' && array_key_exists('HTTP_X_HTTP_METHOD', $_SERVER))
		{
			if($_SERVER['HTTP_X_HTTP_METHOD'] == 'DELETE')
				$this->method = 'DELETE';
			elseif ($_SERVER['HTTP_X_HTTP_METHOD'] == 'PUT')
				$this->method = 'PUT'
			else
				throw new Exception("Unexpected Header")
		}
	}

	public function run()
	{
		// ������ 2 �������� ������� URI ������ ���� "api" � ��������
		if(array_shift($this->requestUri) !== 'api' || array_shift($this->requestUri) !== $this->apiName)
			throw new RuntimeException('API Not Found', 404);
		//����������� �������� ��� ���������
		$this->action = $this->getAction();

		if(method_exists($this, $this->action)) 
			return	$this->{$this->action}();
		else
			throw new RuntimeException('Invalid Method', 405);
	}

	protected function response($data, $status = 500)
	{
		header("HTTP/1.1 " . $status . " " . $this->requestStatus($status));
		return json_encode($data);
	}

	private function requestStatus($code)
	{
		$status = array(
			200 => 'OK',
			404 => 'Not Found',
			405 => 'Method Not Allowed',
			500 => 'Iternal Server Error',
		);
		return ($status[$code])?$status[$code]:$status[500];
	}

	protected function getAction()
    {
        $method = $this->method;
        switch ($method) 
		{
            case 'GET':
                if($this->requestUri){
                    return 'viewAction';
                } else {
                    return 'indexAction';
                }
                break;
            case 'POST':
                return 'createAction';
                break;
            case 'PUT':
                return 'updateAction';
                break;
            case 'DELETE':
                return 'deleteAction';
                break;
            default:
                return null;
        }

		abstract protected function indexAction();
		abstract protected function viewAction();
		abstract protected function createAction();
		abstract protected function updateAction();
		abstract protected function deleteAction();
    }
}
?>

<?
require_once 'Api.php';
require_once 'Db.php';
require_once 'Users.php';

class UsersApi extends Api
{
	public $apiName = 'users';

	/**
     * ����� GET
     * ����� ������ ���� �������
     * http://�����/users
     * @return string
     */
	public function indexAction()
	{
		$db = (new Db())->getConnect();
		$users = Users::getAll($db);
		if($users)
		{
			return $this->response($user, 200);
		}
		return $this->response('Data not found', 404); 
	}
}
?>