<!DOCTYPE html>
<html>

<head>
    <title>Phiếu thanh toán</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style type="text/css">
	table, th, td {
  border: 1px solid black;
  text-align: center;
}
</style>
<body>
	<h1 style="text-align: center">Phiếu thanh toán đơn hàng.</h1>
    <table>
        <tr style="text-align: center;">
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng</th>
        </tr>
        <?php $sum=0;$quan=0;?>
        @foreach($carts as $cart)
        <?php $products = $cart->product ;
        ?>
        @foreach($products as $product)
      
        
        <tr>
            <td><img src="storage/{{$product->image}}" width="30px" height="30px"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}
            </td>
            <?php $total= $product->price*$cart->quantity;$sum+=$total;?>
            <td><?php echo $total ?></td>
        </tr>
        @endforeach
        @endforeach
    </table>
    <div class="container-fluid mt-3">
            <div class="form-group">
               <div >
                  <label>Địa chỉ nhận hàng:</label>
                  <div class="col-md-6">
                     <input type="text"  class="form-control" name="address" value="{{$cart->user->address}}">
                  </div>
               </div>
               <div>
                     <label>Số điện thoại:</label>
                  <div class="col-md-6">
                     <input type="text" class="form-control" name="phone" value="+84 {{$cart->user->phone}}">
                  </div>
               </div>
               <div >
                    <label>Email:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="email" value="{{$cart->user->email}}">
                        </div>
                    </div>
                    <div >
                    <label>Nhập mã giảm giá:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="discount" value="{{$cart->user->email}}">
                        </div>
                    </div>
            </div>
      </div>
    <p><?php echo"Tổng tiền: " .$sum ?></p>
    <a href="{{ url('/home') }}"><button style="background: yellow ">Tiếp tục mua hàng</button></a>
    <a href="{{ url('/older') }}"><button style="background: yellow; marigin-left:30px">Thanh toán</button></a>
</body>

</html>