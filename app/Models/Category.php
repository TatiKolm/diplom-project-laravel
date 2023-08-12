<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasFactory, HasSlug;
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $fillable= ['name', 'image'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function uploadImage($file)
    {
        if ($file == null) return false;

        $filename = $file->getClientOriginalName();
        $path = 'articles/article_' . $this->id . '/';

        $this->removeImage();
        $file->storeAs($path, $filename, 'uploads');
        $this->image = $path . $filename;
        $this->save();
    }


    public function getImageCategory()
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
}
