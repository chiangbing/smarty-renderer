<?php
/**
 * Allows to call CClientScript->registerPackage.
 *
 * Syntax:
 * {register_package name="test"}
 *
 * @param array $params
 * @param Smarty $smarty
 * @return string
 */
function smarty_function_register_package($params, &$smarty) {
    if (!isset($params['name'])) {
        throw new CException(Yii::t('yiiext', "You should specify name parameter."));
    }
    $name = $params['name'];
    Yii::app()->clientScript->registerPackage($name);
}
