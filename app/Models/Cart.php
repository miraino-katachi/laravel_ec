<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    protected $fillable = [
        'stock_id',
        'user_id',
    ];

    /**
     * リレーション
     *
     * @return void
     */
    public function stock()
    {
        return $this->belongsTo('App\Models\Stock');
    }

    /**
     * カートを見る
     *
     * @return Cart
     */
    public function showCart()
    {
        $user_id = Auth::id();
        $data['my_carts'] = $this->where('user_id', $user_id)->get();

        $data['count'] = 0;
        $data['sum'] = 0;

        foreach ($data['my_carts'] as $my_cart) {
            $data['count']++;
            $data['sum'] += $my_cart->stock->fee;
        }

        return $data;
    }

    /**
     * カートに商品を追加する
     *
     * @param int $stock_id
     * @return string
     */
    public function addCart($stock_id)
    {
        $user_id = Auth::id();
        $cart_add_info = $this->firstOrCreate([
            'stock_id' => $stock_id,
            'user_id' => $user_id,
        ]);

        if ($cart_add_info->wasRecentlyCreated) {
            $message = 'カートに登録しました';
        } else {
            $message = 'カートに登録済みです';
        }

        return $message;
    }

    /**
     * カートから商品を削除する
     *
     * @param int $stock_id
     * @return string
     */
    public function deleteCart($stock_id)
    {
        $user_id = Auth::id();
        $delete = $this->where('user_id', $user_id)->where('stock_id', $stock_id)->delete();

        if ($delete > 0) {
            $message = '商品をカート内から削除しました';
        } else {
            $message = '商品の削除に失敗しました';
        }

        return $message;
    }

    /**
     * 購入商品を取得して、カートから削除する
     *
     * @return Cart
     */
    public function checkoutCart()
    {
        $user_id = Auth::id();
        $checkout_items = $this->where('user_id', $user_id)->get();
        $this->where('user_id',$user_id)->delete();

        return $checkout_items;
    }
}
