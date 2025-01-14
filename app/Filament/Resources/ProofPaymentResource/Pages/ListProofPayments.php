<?php

namespace App\Filament\Resources\ProofPaymentResource\Pages;

use App\Filament\Resources\ProofPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProofPayments extends ListRecords
{
    protected static string $resource = ProofPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
