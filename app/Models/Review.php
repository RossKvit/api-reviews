<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Review extends Model
{
    use HasFactory;

    /**
     * @return Builder
     */
    public function getQB(): Builder
    {
        return self::query();

    }

    /**
     * @param array $order_data
     * @return bool
     */
    public function add( array $order_data ): bool
    {
        return $this->getQB()->insert([
                'title' => $order_data['title'],
                'description' => $order_data['description'],
                'rate' => $order_data['rate'],
                'advantages' => $order_data['advantages'],
                'disadvantages' => $order_data['disadvantages'],
                'user_id' => $order_data['user_id']
        ]);
    }
}
