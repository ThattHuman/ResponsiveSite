<?
require_once 'api.php';

class UsersApi extends Api
{
	public $apiName = 'users';

	/**
     * Метод GET
     * Вывод списка всех записей
     * http://ДОМЕН/users
     * @return string
     */
	public function createAction()
	{
        $name = $this->requestParams['name'];
        return $name + " yeess";
    }
    
    public function indexAction() {}
	public function viewAction() {}
	public function updateAction() {}
	public function deleteAction() {}
}
?>