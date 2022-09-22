
@include('share.header')
<style>
    /* Basic Styling */
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}
 
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
/* Columns */
.left-column {
  width: 45%;
  position: relative;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}
/* Left Column */
.left-column img {
  width: 70%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
}
 
.left-column img.active {
  opacity: 1;
}

/* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

/* Product Color */
.product-color {
  margin-bottom: 30px;
}
 
.color-choose div {
  display: inline-block;
}
 


/* Cable Configuration */
.cable-choose {
  margin-bottom: 20px;
}
 
.cable-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}
 
.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
  border: 2px solid #86939E;
  outline: none;
}
 
.cable-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
 
.cable-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config a:before {
  content: &amp;quot;?&amp;quot;;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
}
/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}
 
.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}
 
.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}
/* Responsive */
@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 60px;
  }
 
  .left-column,
  .right-column {
    width: 100%;
  }
 
  .left-column img {
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}
 
@media (max-width: 535px) {
  .left-column img {
    width: 220px;
    top: -85px;
  }
}
</style>




@foreach($data as $product)
<main class="container">
 
 <!-- Left Column / Headphones Image -->
 <div class="left-column">
   <img data-image="black" src="{{url('/')}}/upload/istockphoto-185284489-612x612.jpg.jpg" alt="">
   <img data-image="blue" src="images/blue.png" alt="">
   <img data-image="red" class="active" src="{{url('/')}}/upload/{{$product->image}}" alt="">
 </div>


 <!-- Right Column -->
 <div class="right-column">

   <!-- Product Description -->
   <div class="product-description">
  
     <h1>{{$product->name}}</h1>
     <p>{{$product->description}}</p>
   </div>

   <!-- Product Configuration -->
   <div class="product-configuration">

     <!-- Product Color -->
     <!-- <div class="product-color">
       <span>Color</span>

       <div class="color-choose">
         <div>
           <input data-image="red" type="radio" id="red" name="color" value="red" checked>
           <label for="red"><span></span></label>
         </div>
         <div>
           <input data-image="blue" type="radio" id="blue" name="color" value="blue">
           <label for="blue"><span></span></label>
         </div>
         <div>
           <input data-image="black" type="radio" id="black" name="color" value="black">
           <label for="black"><span></span></label>
         </div>
       </div>

     </div> -->

     <!-- Cable Configuration -->
   
   <!-- Product Pricing -->
   <strike><p class="product-price">
							<span>र {{$product->mrp}}</span>
						</p></strike>
   <div class="product-price">
     <span>र {{$product->sell_price}}</span>
    
   </div>
   <div>
   <a href="#" class="cart-btn">Add to cart</a>
   </div>
 </div>
</main>
@endforeach
@include('share.footer'); 
<script>
    $(document).ready(function() {
 
 $('.color-choose input').on('click', function() {
     var headphonesColor = $(this).attr('data-image');

     $('.active').removeClass('active');
     $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
     $(this).addClass('active');
 });

});
</script>