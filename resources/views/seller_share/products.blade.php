@include('seller_share.header')

<br><br>
<section>
    <div>
        
            <a href="{{url('/add_product')}}" class="btn btn-primary">Add product </a>
        
    </div>
</section>
<br><br><br>
<section class="" style="background-color: #eee;">
    <div class="container ">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">mrp</th>
      <th scope="col">discout_price</th>
      <th scope="col">sell_price</th>
      <th scope="col">date</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($data as $da)
    <tr>
      <th scope="row">1</th>
      <td>{{$da->name}}</td>
      <td>{{$da->description}}</td>
      <td>{{$da->image}}</td>
      <th>{{$da->mrp}}</th>
      <td>{{$da->discout_price}}</td>
      <td>{{$da->sell_price}}</td>
      <td>{{$da->date}}</td>
      <td><a href="{{url('/edit_product/'.$da->id)}}" class="btn btn-info">edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>




    </div>
</section>
