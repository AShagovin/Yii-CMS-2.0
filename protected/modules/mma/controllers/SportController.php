<?

class SportController extends ClientController
{
    public static function actionsTitles()
    {
        return array(
            'view'  => 'Просмотр вида спорта',
            'index' => 'Список вид спорта',
            'parseFighters' => 'ParseFighters'
        );
    }

        
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}


	public function actionIndex()
	{
		$data_provider = new CActiveDataProvider('Sport');

		$this->render('index', array(
			'data_provider' => $data_provider,
		));
	}
}
