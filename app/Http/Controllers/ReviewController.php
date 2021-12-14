<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Mockery\Exception\InvalidOrderException;
use PHPUnit\Util\Exception;

class ReviewController extends Controller
{
    /**
     * @var Review
     */
    public Review $review;

    /**
     * ReviewController constructor.
     * @param Review $review
     */
    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    /**
     * @param Request $request
     * @return string[]
     */
    public function add(Request $request): array
    {
        try {
            $this->review->add($request->all());
        }catch (Exception $e){
            echo $e->getMessage();
            //throw new Exception();
        }
//        if(!$this->review->add($request->all())){
//            throw new Exception();
//        }
        return [];
    }
}
