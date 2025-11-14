<h1>Dummy Products</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
@foreach ($carts['carts'] as $cart)
    @foreach ($cart['products'] as $product)
       <tr>   
        <td>{{ $product['title'] }}</td>
        <td>{{ $product['price'] }}</td>
        <td>{{ $product['quantity'] }}</td>
        <td>{{ $product['total'] }}</td>
       </tr>
    @endforeach
@endforeach
</ul>