<?php
/**
 * Allows to call CClientScript->registerScriptFile.
 *
 * Syntax:
 * {register_script_file name="test" htmlOptions=["module"=>true]}
 *
 * @param array $params
 * @param Smarty $smarty
 * @return string
 */
function smarty_function_register_script_file($params, &$smarty) {
    if (!isset($params['name'])) {
        throw new CException(Yii::t('yiiext', "You should specify name parameter."));
    }
    $name = $params['name'];
    $htmlOptions = $params['htmlOptions'];
    Yii::app()->clientScript->registerScriptFile($name, $htmlOptions);
}
