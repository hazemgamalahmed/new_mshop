                   <div class="row">
                   <div class="col-md-6">
                   <div class="form-group">
                    <label>Client Name</label>
                   <select name="client_id" class="form-control">
                   <option>clients</option>
                   @foreach($clients as $client)
                   <option value="{{$client->id}}">{{$client->name}}</option>
                   @endforeach
                   </select>
                   <span class="text-danger">
                   {{$errors->first('client_id')}}
                   </span>
                  </div>
                  </div>
                  <div class="col-md-6">
                  
                  <div class="form-group">
                  <label>data</label>
                  <input name="date" type = "date" id="data" class="form-control"/>
                  </div>
                  <span class="text-danger">
                   {{$errors->first('date')}}
                   </span>
                  </div>
                 
                   </div>
                   <div class="row">
                   <div class="col">
                   
                   <h3 class="text-primary" style="text-transform:capitalize;">products</h3>
                   <button type="button" class="btn btn-primary" id="btn-add-new"><i class="fa fa-plus"></i> Add Product</button>
                   </div>
                   <table class="table mt-3">
                   <thead>
                   <tr>
                   <th>product</th>
                   <th>quantity</th>
                   <th>price</th>
                   <th>total</th>
                   <th>Action</th>
                   </tr>
                   </thead>
                   <tbody id="products-list">
                   <tr id="product-1">
                   <td>
                   <select name="products[1][product_id]" id="" class = "form-control" row-id="product-1">
                   @foreach($products as $product)
                   <option value="{{$product->id}}">{{$product->name}}</option>
                   @endforeach
                   </select>
                   </td>
                   <td>
                   <input name="products[1][quantity]" 
                   type="number" 
                   id="" 
                   value="1" 
                   row-id = "product-1"
                   class="form-control input-product-quantity">
                   {{$errors->first('date')}}
                   </td>
                   <td>
                   <input name="products[1][price]" 
                   type="number" 
                   id="" 
                   readonly = ""
                   row-id = "product-1"
                    class = "form-control input-product-price" 
                    value="{{$product->first()->price}}">
                   </td>
                   <td>
                   <input type="number" name = "products[1][total]"
                    id="" readonly = "" 
                     class = "form-control input-product-total"  
                     row-id = "product-1"
                     value="{{$product->first()->price}}">
                   </td>
                   <td>
                   <button type="button" class = "btn btn-danger form-control row-delete" row-id="product-1">-</button>
                   </td>
                   </tr>
                   </tbody>
                   </table>
                   </div>
                   <div class = "text-center">

<button type="submit" class="btn btn-success form-control"> <i class="fa fa-plus"></i> Add Product</button>
</div>
                   </div>
                

  @section('js')
<script>
$(document).on('click', '#btn-add-new', function(){
    const rowId = Date.now();
    const productRow = `
    <tr id="product-${rowId}">
                  <td>
                   <select name="products[${rowId}][product_id]" id="" class = "form-control">
                   @foreach($products as $product)
                   <option value="{{$product->id}}">{{$product->name}}</option>
                   @endforeach
                   </select>
                   </td>
                   <td>
                   <input name="products[${rowId}][quantity]" type="number" id="" class="form-control input-product-quantity">
                   </td>
                   <td>
                   <input name="products[${rowId}][price]" type="number" id=""  class = "form-control input-product-price">
                   </td>
                   <td>
                   <input type="number" name = "products[${rowId}][total]" id=""   class = "form-control input-product-total">
                   </td>
                   <td>
                   <button type="button" class = "btn btn-danger form-control row-delete" row-id="product-1">-</button>
                   </td>
                  
                   
    </tr>
    `;
    $('#products-list').append(productRow);
    $(document).on('click', '.row-delete', function(){
        const rowId = '#'+ $(this).attr('row-id');
        $(rowId).remove();
    });
    $(document).on('keyup', '.input-product-quantity', function(e){
        console.log(e.target.value);
    });
});
</script>
@endsection