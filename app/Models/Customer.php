<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    private static $customer, $image, $imageUrl, $imageName, $extension, $directory,$message;
    /**
     * @var mixed|string
     */


    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'customer-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name    = $request->name;
        self::$customer->phone   = $request->phone;
        self::$customer->email   = $request->email;
        self::$customer->image   = self::getImageUrl($request);
        self::$customer->save();
    }

    public static function updateCustomer($request, $id)
    {
        self::$customer = Customer::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$customer->image))
            {
                unlink(self::$customer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$customer->image;
        }
        self::$customer->name            = $request->name;
        self::$customer->email   = $request->email;
        self::$customer->phone      = $request->phone;
        self::$customer->image           = self::$imageUrl;
        self::$customer->save();
    }
    public static function deleteCustomer($id)
    {
        self::$customer = Customer::find($id);
        if (file_exists(self::$customer->image))
        {
            unlink(self::$customer->image);
        }
        self::$customer->delete();
    }
}
