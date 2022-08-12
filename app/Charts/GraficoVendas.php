<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Sale;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class GraficoVendas extends BaseChart
{
    public ?string $name = 'graficovendas';

    public ?array $middlewares = ['auth'];
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $sales = Sale::OrderBy('updated_at')->pluck('total', 'updated_at');
        $keys = collect($sales->keys())->map(function ($item, $key){
           return date('d/m/y H:i', strtotime($item));
        })->all();
        return Chartisan::build()
            ->labels($keys)
            ->dataset('Data', $sales->values()->toArray());
//            ->dataset('Sample 2', [30, 20, 10]);
    }
}
