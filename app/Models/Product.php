<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Intervention\Image\Facades\Image;
class Product extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

    protected $fillable = ['title', 'description', 'image', 'category_id', 'price'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public static function add(array $input)
    {
        $product = new static;
        $product->fill($input);
        $product->category_id = $input["category"];
        $product->save();

        return $product;
    }

    public function uploadImage($file)
    {
        if ($file == null) return false;

        $filename = $file->getClientOriginalName();
        $path = 'products/product_' . $this->id . '/';

        $this->removeImage();

        $file->storeAs($path, $filename, 'uploads');
        $this->image = $path . $filename;
        $this->save();
    }

    public function getImage()
    {
        $image = $this->image;

        return $image ? asset('uploads/' . $image) : asset("assets/images/no-img.png");
    }

    public function removeImage()
    {
        if($this->image){
            Storage::disk("uploads")->delete($this->image);
            $this->image = null;
            $this->save();
        }
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function getPrice()
    {
        return number_format($this->price, 2, ',', ' ') . ' руб';
    }

 

}
