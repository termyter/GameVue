<?php

namespace App\Http\Controllers;

use App\Domain\Game\Models\Game;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Контроллер для управления товарами.
 */
class GameController extends Controller
{
    public function list()
    {
        return Game::query()
            ->orderBy('price')
            ->get();
    }

    public function info($id)
    {
        $product = Product::query()
            ->where(['id' => $id])
            ->first();

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден');
        }

        return $game;
    }
}
