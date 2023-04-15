<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    private static $product, $image, $imageUrl, $imageName, $extension, $directory,$message;
    /**
     * @var mixed|string
     */


    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'product-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        self::$product->name            = $request->name;
        self::$product->category_name   = $request->category_name;
        self::$product->brand_name      = $request->brand_name;
        self::$product->description     = $request->description;
        self::$product->image           = self::getImageUrl($request);
        self::$product->status          = $request->status;
        self::$product->save();
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::$product->name            = $request->name;
        self::$product->category_name   = $request->category_name;
        self::$product->brand_name      = $request->brand_name;
        self::$product->description     = $request->description;
        self::$product->image           = self::$imageUrl;
        self::$product->status          = $request->status;
        self::$product->save();
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        // if (file_exists(self::$product->image))
        // {
        //     unlink(self::$product->image);
        // }
        self::$product->delete();
    }


    public static function updateProductStatus($id){
        self::$product = Product::find($id);
        if(self::$product->status == 1){
            self::$product->status = 0;
            self::$message = 'Product status info Unpublished Successfully';
        }
        else{
            self::$product->status = 1;
            self::$message = 'Product status info published Successfully';
        }
        self::$product->save();
        return self::$message;
    }


   
}
