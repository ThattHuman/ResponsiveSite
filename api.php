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

		// массив GET параметров
		$this->requestUri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
		$this->requestParams = $_REQUEST;

		// определение метода запроса
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
		// первые 2 элемента массива URI должны быть "api" и название
		if(array_shift($this->requestUri) !== 'api' || array_shift($this->requestUri) !== $this->apiName)
			throw new RuntimeException('API Not Found', 404);
		//определение действия для обработки
		$this->action = $this->getAction();
	}
}
?>