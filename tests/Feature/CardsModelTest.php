<?php
use App\Models\CardsModel;

/**
 * CREATE 
 */
it('CardsModel.php - CREATE and READ', function () {
    CardsModel::create([
        'card_title'       => 'Card_1',
        'card_description' => 'Texto do checkbox',
        'href'             => '/link'
    ]);

    $this->assertDatabaseHas('cards_info', [
        'card_title' => 'Card_1',
        'card_description' => 'Texto do checkbox',
        'href' => '/link'
    ]);
});

it('CardsModel.php - UPDATE', function () {
    $cardTest = CardsModel::create([
        'card_title'       => 'Card_1',
        'card_description' => 'Texto do checkbox',
        'href'             => '/link'
    ]);
    
    $cardTest->update([
        'card_title'       => 'Card_2',
        'card_description' => 'Texto do checkbox 2',
        'href'             => '/link-2'
    ]);

    $cardTest->refresh();

    expect($cardTest->card_title)->toBe('Card_2');

    $this->assertDatabaseHas('cards_info', [
        'card_title' => 'Card_2',
        'card_description' => 'Texto do checkbox 2',
        'href' => '/link-2'
    ]);
});

it('CardsModel.php - DELETE', function () {
    $cardTest = CardsModel::create([
        'card_title'       => 'Card_1',
        'card_description' => 'Texto do checkbox',
        'href'             => '/link'
    ]);

    $cardTest->delete();

    $this->assertDatabaseMissing('cards_info', [
        'id' => $cardTest->id,
        'card_title' => 'Card_1',
    ]);
});