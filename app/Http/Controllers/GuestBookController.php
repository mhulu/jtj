<?php

namespace App\Http\Controllers;

use App\Guestbook;
use App\Http\Requests;
use App\Http\Requests\StoreGuestBook;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function post(StoreGuestBook $request)
    {
      $data = $request->input();
      $result = Guestbook::create([
            'phone' => $data['phone'],
            'comment' => $data['comment']
          ]);
      if ($result) {
        return response()->json(
          '操作成功'
          );
      } else {
        return response()->json(
          '无法写入数据库'
          );
      }
    }
}
