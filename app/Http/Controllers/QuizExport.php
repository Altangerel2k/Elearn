<?php
/**
 * Created by PhpStorm.
 * User: mbbag
 * Date: 4/6/2018
 * Time: 1:04 AM
 */

namespace App\Http\Controllers;

use App\qresult;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuizExport implements FromQuery,WithHeadings
{
    use Exportable;
    public function __construct(int $parent_id)
    {
        $this->parent_id=$parent_id;
    }
public function headings(): array
{
    // TODO: Implement headings() method.
    return[
        'Age',
        'Email',
        'Gender',
        'Total Point',
//        'Result',
        'Date'
    ];
}

    public function query()
    {
        return qresult::where('parent_id',$this->parent_id)->select('age','email','gender','point','created_at');
    }
}