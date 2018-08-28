<?
namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     * 填充用的啊大佬
     * @var array
     */
    protected $fillable = [
        'name', 'detail'
    ];
}
