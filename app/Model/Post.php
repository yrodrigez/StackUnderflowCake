<?php
/**
 * Created by PhpStorm.
 * User: yago
 * Date: 19/11/15
 * Time: 11:59
 */
class Post extends AppModel {

    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );
}