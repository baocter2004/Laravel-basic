<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // DB::table('users')->insert([
        //     [
        //         'name' => 'nguyen van o',
        //         'email' => 'o@gmail.com',
        //         'password' => bcrypt(2333333333),
        //         'age' => 78
        //     ],
        //     [
        //         'name' => 'nguyen van',
        //         'email' => 'v@gmail.com',
        //         'password' => bcrypt(2333333333),
        //         'age' => 27
        //     ],
        //     [
        //         'name' => 'nguyen van s',
        //         'email' => 's@gmail.com',
        //         'password' => bcrypt(2333333333),
        //         'age' => 19
        //     ],
        //     [
        //         'name' => 'nguyen van 1',
        //         'email' => '1@gmail.com',
        //         'password' => bcrypt(2333333333),
        //         'age' => 30
        //     ],
        //     [
        //         'name' => 'nguyen van k',
        //         'email' => 'k@gmail.com',
        //         'password' => bcrypt(2333333333),
        //         'age' => 25
        //     ],
        //     [
        //         'name' => 'nguyen van n',
        //         'email' => 'n@gmail.com',
        //         'password' => bcrypt(2333333333),
        //         'age' => 30
        //     ]
        // ]);
        // echo "thêm thành công";


        // $data = User::query()->get();

        // $data = DB::table('users')->get();
        // dd($data);

        // lấy data từ bảng user có age > 25

        // $data = DB::table('users')->where('age','>',25)->get();

        // lấy data từ bảng user có age > 25 và có status = active (1)

        // $data = DB::table('users')
        //             ->where('age' , '>' , 25)
        //             ->where('status','1')
        //             ->get();

        // Sắp xếp kết quả - Viết truy vấn để lấy các bản ghi 
        // từ bảng users, sắp xếp theo age giảm dần.

        // $data = DB::table('users')
        //     ->orderByDesc('age')
        //     ->get();

        // Giới hạn số lượng kết quả - Viết truy vấn để lấy 
        // 10 bản ghi đầu tiên từ bảng products.

        //    $data = DB::table('products')
        //                 ->limit(10)
        //                 ->get();

        // Truy vấn với điều kiện OR - Viết truy vấn để lấy các bản ghi từ 
        // bảng orders mà status là 'completed' hoặc total lớn hơn 100.

        // $data = DB::table('orders')
        //             ->where('order_status',3)
        //             ->orwhere('total','>',100)
        //             ->get();

        // Truy vấn với LIKE - Viết truy vấn để lấy các
        //  bản ghi từ bảng customers mà name chứa chuỗi 'John'.

        // $data = DB::table('customers')
        //             ->where('first_name','like','%john%')
        //             ->get();


        // Truy vấn với BETWEEN - Viết truy vấn để lấy các bản ghi từ bảng sales
        // mà amount nằm trong khoảng từ 1000 đến 5000.

        // $data = DB::table('sales')
        //             ->whereBetween('total',[1000,5000])
        //             ->get();

        // Truy vấn với IN - Viết truy vấn để lấy các bản ghi từ bảng 
        // employees mà department_id nằm trong danh sách [1, 2, 3].

        // $data = DB::table("employees")
        //             ->whereIn('department_id',[1,2,3])
        //             ->get();

        // Thực hiện JOIN - Viết truy vấn để lấy thông tin từ bảng orders và bảng 
        // customers với điều kiện orders.customer_id = customers.id.

        // $data = DB::table('customers', 'c')
        //     ->join('orders as o', 'c.id', '=', 'o.customer_id')
        //     ->select('c.*', 'o.*')
        //     ->get();

        // Truy vấn với nhóm và tổng hợp - Viết truy vấn để tính tổng số lượng quantity
        // của mỗi sản phẩm từ bảng order_items, nhóm theo product_id.


        // $data = DB::table('order_items')
        //     ->selectRaw('product_id , sum(quantity) as total_quantity')
        //     ->groupBy('product_id')
        //     ->get();

        // Cập nhật bản ghi - Viết truy vấn để cập nhật status 
        // của tất cả các đơn hàng trong bảng orders thành 'shipped'
        // nếu status hiện tại là 'processing'.

        // DB::table('orders')
        //     ->where('order_status', 2)
        //     ->update(['order_status' => 3]);

        // $data = DB::table('orders')
        //         ->get();

        // Xóa bản ghi - Viết truy vấn để xóa tất cả các bản 
        // ghi từ bảng logs mà created_at trước ngày 1/1/2020.

        // DB::table('logs')
        //     ->where('created_at', '<', '2020-01-01')
        //     ->delete();

        // $data = DB::table('logs')->get();

        // Thêm bản ghi mới - Viết truy vấn để thêm một bản ghi mới 
        //vào bảng products với các thông tin về tên sản phẩm,
        // giá và số lượng.

        // DB::table('products')->where('quantity',0)
        // ->update(['quantity' => 20]);

        // DB::table('products')->insert(
        //     [
        //         [
        //             "name" => "nokiapro",
        //             "price" => 13040,
        //             "img" => "https://picsum.photos/100/100",
        //             "quantity" => 10
        //         ],
        //         [
        //             "name" => "nokiapro ultra",
        //             "price" => 130990,
        //             "img" => "https://picsum.photos/100/100",
        //             "quantity" => 30
        //         ]
        //     ]
        //     );

        // echo "thêm thành công";

        // $data = DB::table("products")->get();

        // Sử dụng Raw Expressions - Viết truy vấn để lấy các 
        // bản ghi từ bảng users mà tháng tạo (created) là tháng 5.

        // $data = DB::table('users')
        //     ->whereRaw('MONTH(created_at) = 5')
        //     ->get();
        // dd($data);


        // Chiều Số 2 :

        // Hiển thị tên nhân viên và phòng ban cửa nhân viên IT


        // $data = DB::table('employees' , 'e')
        //         ->join("departments as d" , "e.department_id" , "=" , "d.id")
        //         ->select("e.name","d.name as dname")
        //         ->where("d.name" , "=" , "IT")
        //         ->get();

        // hiển thị tên nhân viên và phòng ban của nhân 
        // viên maketing lương > 70000

        // $data = DB::table('employees', "e")
        //             ->join("departments as d", "e.department_id", "=" , "d.id")
        //             ->select("e.name","d.name as dname","salary")
        //             ->where("d.name" , "=" , "marketing")
        //             ->where("e.salary" , ">" , 70000)
        //             ->get();

        // có lương từ 50000 - 70000

        // $data = DB::table('employees', "e")
        // ->join("departments as d", "e.department_id", "=" , "d.id")
        // ->select("e.name","d.name as dname","salary")
        // ->whereBetween("e.salary",[50000,70000])
        // ->get();

        // hiện thị những nhân viên không làm việc ở ban Sales

        // $data = DB::table('employees', "e")
        // ->join("departments as d", "e.department_id", "=" , "d.id")
        // ->select("e.name","d.name as dname","salary")
        // ->where("d.name" , "<>" , "sales")
        // ->get();

        // hiển thị tên nhân viên bắt đầu bằng chữ D

        // $data = DB::table('employees', "e")
        // ->join("departments as d", "e.department_id", "=" , "d.id")
        // ->select("e.name","d.name as dname","salary")
        // ->where('e.name' , 'like' , 'D%')
        // ->get();

        // hiển thị nhân viên có lương cao nhất trong mỗi phòng ban

        DB::table('employees', "e")
            ->select('e.name', 'd.name as dname')
            ->join("departments as d", "e.department_id", "=", "d.id")
            ->where('e.salary', function (Builder $query) {
                $query->selectRaw("MAX(e.salary)")
                    ->from('employees')
                    ->where('d.id', 'e.department_id');
            })->ddRawSql();
    }
}
