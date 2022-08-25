<?php declare(strict_types=1);
namespace app\components\jobs;

use Yii;
use yii\base\BaseObject;
use Symfony\Component\Process\Process;
use yii\helpers\ArrayHelper;

/**
 * ComposerJob
 */

class ComposerJob extends BaseObject
{
    public $user_id = 0;
    public $cmd = 'st';
    public $args = [];

    public $revert = 0;

	/**
	 * {@inheritdoc}
	 */
    public function execute()
    {
        if ($this->user_id < 1) {
            return;
        }

        $args = array_filter($this->args);

        if(is_array($args) && count($args)) {
            $cmd = ArrayHelper::merge([$this->cmd], $args);
            Yii::$app->broadcaster->task(['message' => $cmd]);
            echo join(' ', $cmd);

            chdir(self::repoPath());
            $process = new Process(join(' ', $cmd));
            $process->run(function ($type, $buffer) {
                echo $type;
                echo $buffer;
                // file_put_contents(join('/', [Yii::getAlias('@webroot'), 'buffer.txt']), $buffer);
                if (Process::ERR == $type) {
                    Yii::$app->broadcaster->task(['message' => $buffer]);
                } else {
                    Yii::$app->broadcaster->task(['message' => $buffer]);
                }
            });
        }
    }

	/**
	 * {@inheritdoc}
	 */
    private static function repoPath()
    {
        return Yii::getAlias('@webroot');
    }
}
