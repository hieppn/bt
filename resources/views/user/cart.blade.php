<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body>
    <table align="center" border="1" cellspacing="0" cellpadding="3" class="table table-hover table-bordered">
        <tr class="table-primary table-header" style="text-align: center;">
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng</th>
            <th colspan="1">Xử lý</th>
        </tr>
        <?php $sum=0;$quan=0;?>
        @foreach($carts as $cart)
        <?php $products = $cart->product ;
        // $quans=$cart->product->quantity;
        ?>
        @foreach($products as $product)
      
        
        <tr>
            <td><img src="storage/{{$product->image}}" width="50px" height="50px"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>
            <form action="{{'/cart/'.$product->id}}" method="post">
                                    @csrf
                                    <input aria-label="quantity" class="input-qty" max="{{$product->quantity}}" min="1" name="quantity" type="number"
                                    value="{{$cart->quantity}}"> 
                                    <button type="submit">+</button>
                                </form>
              
            </td>
            <?php $total= $product->price*$cart->quantity;$sum+=$total;?>
            <td><?php echo $total ?></td>
            <?php  $idcart = $cart->id;?>
            <td>
                <form action="/cart/{{$product->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endforeach

    </table>
    <p><?php echo"Tổng tiền: " .$sum ?></p>
    <a href="{{ url('/home') }}"><button style="background: yellow ">Tiếp tục mua hàng</button></a>
    <a href="{{ url('/older') }}"><button style="background: yellow; marigin-left:30px">Tiến hành thanh toán</button></a>
</body>

</html>