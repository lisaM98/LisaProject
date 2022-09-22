@include('seller_share.header')

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<section class="" style="background-color: #eee; ">
  <div class="container h-100">
<form action="{{url('/add_product_details')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="container">
    <h1>PRODUCTS</h1>
    <p>Please fill in this form to add new product details</p>
    <hr>
   

    
  



    <label for="text"><b>Product Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="Name" required>

    <label for="email"><b>Product image </b></label>
    <input type="file" name="image" id="image" required>

    <label for="address"><b>Product details </b></label>
    <input type="text" placeholder="detalis" name="detalis" id="detalis" >


    <label for="psw"><b>MRP</b></label>
    <input type="text" placeholder="mrp" name="mrp" id="mrp" required>

    <label for="psw-repeat"><b>discount</b></label>
    <input type="text" placeholder="discount" name="discount" id="dis" required>
    
    <label for="psw"><b>selling price</b></label>
    <input type="text" placeholder="sell price" name="sell_price" id="sell_price" required>

    
    <hr>
   
    <button type="submit" class="registerbtn">ADD</button>
  </div>
  
  
</form>
  </div>
</section>