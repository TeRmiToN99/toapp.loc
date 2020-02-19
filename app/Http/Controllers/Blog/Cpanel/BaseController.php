<?php

namespace App\Http\Controllers\Blog\Cpanel;

use App\Http\Controllers\Blog\BaseController as GuestBaseController;

/**
 * Базовый контроллер для всех контроллеров управления
 * блогом и панелью администрирования.
 *
 * Должен быть родителем всех контроллеров управления блогом.
 *
 * @package App\Http\Controllers\Blog\Cpanel
 */
abstract class BaseController extends GuestBaseController
{
    /**
     *BaseController constructor.
     */
    public function __construct()
    {
        // Инициализация общих моментов для админки.
    }

}
