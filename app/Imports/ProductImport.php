<?php

namespace App\Imports;

use App\Category;
use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{

    /**
     * @param array $row
     * @return Product|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|null
     */

    public function model(array $row)
    {

        return new Product([
            'title'          =>    $row[0],
            'description'    =>    $row[1],
            'category_id'    =>    request()->input('category_id'),
            'image'          =>    $row[2],
            'price'          =>    $row[3],
        ]);
    }
}
