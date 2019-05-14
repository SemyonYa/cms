<?php

namespace common\models;


use yii\web\ForbiddenHttpException;

class Au
{
    public static function isAdmin()
    {
        $user_id = \Yii::$app->user->identity->getId();
        if (User::findOne($user_id)->roles[0]->name !== 'r_admin')
            throw new ForbiddenHttpException();
    }

    public static function isManager()
    {
        $user_id = \Yii::$app->user->identity->getId();
        if (User::findOne($user_id)->roles[0]->name !== 'r_admin' && User::findOne($user_id)->roles[0]->name !== 'r_manager')
            throw new ForbiddenHttpException();
    }

    public static function isEditor()
    {
        $user_id = \Yii::$app->user->identity->getId();
        if (User::findOne($user_id)->roles[0]->name !== 'r_admin' && User::findOne($user_id)->roles[0]->name !== 'r_manager' && User::findOne($user_id)->roles[0]->name !== 'r_editor')
            throw new ForbiddenHttpException(User::findOne($user_id)->roles[0]->name . ' - huy');
    }
    public static function isEditorOwn($own_id) {
        $user_id = \Yii::$app->user->identity->getId();
        throw new ForbiddenHttpException($own_id);

    }
}