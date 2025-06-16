<?php

namespace App\Http\Controllers;

use App\Models\CardsModel;

use Illuminate\Http\Request;
use Inertia\inertia;

/**
 * @author Lucas Matheus (@LmarDark)
 * @description Controlador para gerenciar operações CRUD relacionadas ao modelo CardsModel.
 */
class CardsController extends Controller
{
    /**
     * @author Lucas Matheus (@LmarDark)
     * @description Cria um novo registro de card no banco de dados.
     * @param Request $request Dados da requisição para criar o card.
     * @return \Illuminate\Http\Response Resposta HTTP com o resultado da operação.
     */
    public static function create($uri) {
        $CardsModel = CardsModel::create([
            "card_title"       => "Insira o título aqui",
            "card_description" => "Insira a descrição da sua tarefa",
            "href"             => "$uri"
        ]);
        
        $card = [
            'title'       => $CardsModel->card_title,
            'description' => $CardsModel->card_description,
            'uri'         => $CardsModel->uri
        ];

        return $card;
    } 

    public static function read($uri) {
        $card = CardsModel::where('href', $uri)->first();

        if(empty($card->href) || $uri !== $card->href) {
            $card = CardsController::create($uri);
            
            return Inertia::render('Home', [
                "card" => $card
            ]);

        } else if (!empty($card) && $uri == $card->href) {
            $card = [
                'title'       => $card->card_title,
                'description' => $card->card_description,
                'uri'         => $card->uri
            ];

            return Inertia::render('Home', [
                "card" => $card
            ]);
        }
        return Inertia::render('Home');
    }

    public static function update() {

    }

    public static function delete() {

    }
}
