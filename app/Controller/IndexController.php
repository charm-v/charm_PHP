<?php 
namespace app\Controller;
use system\core\Model;
use system\core\Controller;
use system\core\Config;

/**
 * 默认控制器(测试)
 */
class IndexController extends Controller
{
	public function index()
	{

		// $model = new Model();
		// dump($model);exit;
		// post();
		// echo base_url('index/index').'<br>';
		// echo js('css.css');
		// $model = new Model();
		// $route_config = Config::get('DEFAULT_CONTROLLER', 'route');
		// $route_action = Config::get('DEFAULT_ACTION', 'route');
		// p($route_config);
		// dump($model);
		// p($route_action);
		// $res = $model->query('select * from user');
		// p($res->fetchAll());
		// 
		// echo base_url();
		view('index', ['title' => '测试标题', 'content' => '我是测试内容啊喂']);
	}
}