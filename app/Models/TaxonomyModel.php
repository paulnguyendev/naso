<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#Helper
use Illuminate\Support\Str;
use Kalnoy\Nestedset\NodeTrait;
class TaxonomyModel extends Model
{
    use NodeTrait;
    protected $table = 'taxonomy';
    protected $primaryKey = 'id';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fieldSearchAccepted = ['email', 'phone', 'fullname'];
    protected $crudNotAccepted = ['_token','data_attributes'];
    protected $fillable = ['name', 'parent_id', 'taxonomy', 'description', 'created_at', 'updated_at','thumbnail'];
    use HasFactory;
    public function listItems($params = "", $options = "")
    {
        $result = null;
        $query = $this->select('id', 'name', 'parent_id', 'taxonomy', 'description', 'created_at', 'updated_at','thumbnail');
        if ($options['task'] == 'admin-count-total') {
            $result = $query->where('user_group_id', '3')->count();
        }
        if ($options['task'] == 'taxonomy') {
            $result = $query->where('taxonomy', $params['taxonomy'])->orderBy('id', 'desc')->get();
        }
        if ($options['task'] == 'taxonomy_paginate') {
            $result = $query->where('taxonomy', $params['taxonomy'])->orderBy('id', 'desc')->paginate(10);
        }
        return $result;
    }
    public function getItem($params = [], $options = [])
    {
        $query = $this->select('id', 'name', 'parent_id', 'taxonomy', 'description', 'created_at', 'updated_at','thumbnail');
        if ($options['task'] == 'taxonomy') {
            $result = $query->where('taxonomy', $params['taxonomy'])->first();
        }
        return $result;
    }
    public function saveItem($params = [], $option = [])
    {
        if ($option['task'] == 'add-item') {
            $paramsInsert = array_diff_key($params, array_flip($this->crudNotAccepted));
            $parent = self::find($params['parent_id']);
            $result =    self::create($paramsInsert, $parent);
            return $result;
        }
        if ($option['task'] == 'edit-item') {
            if (isset($params['image'])) {
                $image = $params['image'];
                $params['image'] = Str::random('10') .  "." . $params['image']->clientExtension();
                $image->storeAs("/user", $params['image'], "mb_storage_image");
            }
            $paramsUpdate = array_diff_key($params, array_flip($this->crudNotAccepted));
            self::where('id', $params['id'])->update($paramsUpdate);
        }
        if ($option['task'] == 'active-by-token') {
            $paramsUpdate = array_diff_key($params, array_flip($this->crudNotAccepted));
            self::where('token', $params['token'])->update($paramsUpdate);
        }
    }
    public function articles()
    {
        return $this->hasMany(ArticleModel::class, 'user_id', 'id');
    }
    public function getNameWithDepthAttribute()
    {
        return str_repeat("¦– –", $this->depth) . $this->name;
    }
}
