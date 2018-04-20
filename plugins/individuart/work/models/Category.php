<?php namespace Individuart\Work\Models;

use Model;

/**
 * Category Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Sortable; //necesito esta clase para reordenar en el listado
    /**
     * @var string The database table used by the model.
     */
    public $table = 'individuart_work_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'works' => ['Individuart\Work\Models\Work','table'=>'individuart_work_category_work']
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
     public $attachOne = [
        'featured_image' => ['System\Models\File']
    ];
    public $attachMany = [];

    public function getImageAttribute(){
        $trabajo = Category::find($this->id);
        if($trabajo->featured_image)
        {
            return '<img src="' . $trabajo->featured_image->getThumb(50, 50, 'crop') . '">';
        }else
        {
            return '';
        }
    }

    public function scopePublished($query)
    {
        return $query->where('published',true);

    }

}