<?php
namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;

class TopUpAds extends Model
{
    protected $collection           = 'top_up_ads';
    public $timestamps              = true;
    public $primaryKey              = '_id';
    
    protected $fillable             =   [
                                            'product_id',
                                            'title',
                                            'transact_at',
                                            'credit'
                                        ];
    /**
     * Timestamp field
     *
     * @var array
     */
    protected $dates                =   [
                                            'created_at'                    , 
                                            'updated_at'                    , 
                                            'deleted_at'                    ,
                                            'published_at'
                                        ];
    /**
     * Basic rule of database
     *
     * @var array
     */
    protected $rules                =   [
                                            'published_at'                  => 'required|date',
                                        ];
    /**
     * Basic error message of rule
     *
     * @var array
     */
    protected $message              =   []; 
}