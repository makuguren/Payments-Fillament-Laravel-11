<?php

namespace App\Filament\Resources\ProofPaymentResource\Pages;

use App\Filament\Resources\ProofPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProofPayment extends EditRecord
{
    protected static string $resource = ProofPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
