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

class CoomentitExport implements FromQuery,WithHeadings
{
    use Exportable;
    public function __construct()
    {

    }
public function headings(): array
{
    // TODO: Implement headings() method.
    return[
        'Хэрэглэгч',
        'МСЖ',
        'Төлөв',
'Огноо хүсэлт гаргасан',
        'Огноо төлөв өөрчилсөн'
    ];
}

    public function query()
    {
        return \App\Comment::where('type','IT')->orderby('created_at','desc')->select('username','msg','status','created_at','updated_at');
    }
}