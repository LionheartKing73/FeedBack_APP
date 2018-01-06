<?php
//index.php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>PHP Star Rating System by using Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container" style="width:800px;">
   <h2 align="center">FeedBack</h2>
   <br />
   <span id="business_list"></span>
   <br />
   <br />
  </div>
  <div class="container form-group" class="list-inline" style="width:800px;">
    <div class="row">
        <div class="col-xs-6">  
          <select class="form-control input-lg" id="product">
              <option>
                Product Name
              </option>
              <option>
                The Salzburg
              </option>
              <option>
                Brenda French Soul Food
              </option>
              <option>
                Barnzu
              </option>
              <option>
                The House
              </option>
          </select>
        </div>
        <div class="col-xs-6">  
          <ul class="list-inline" data-rating="5" title="Average Rating - 5" align="right">
              <li title="1" id="0-1" data-index="1" data-business_id="0" data-rating="5" class="rating" style="cursor: pointer; color: rgb(255, 204, 0); font-size: 26px;">★</li><li title="2" id="0-2" data-index="2" data-business_id="0" data-rating="5" class="rating" style="cursor: pointer; color: rgb(204, 204, 204); font-size: 26px;">★</li><li title="3" id="0-3" data-index="3" data-business_id="0" data-rating="5" class="rating" style="cursor: pointer; color: rgb(204, 204, 204); font-size: 26px;">★</li><li title="4" id="0-4" data-index="4" data-business_id="0" data-rating="5" class="rating" style="cursor: pointer; color: rgb(204, 204, 204); font-size: 26px;">★</li><li title="5" id="0-5" data-index="5" data-business_id="0" data-rating="5" class="rating" style="cursor: pointer; color: rgb(204, 204, 204); font-size: 26px;">★</li>
           </ul>
        </div>

    </div>
    <br>
    <div class="6u$ 12u$(xsmall)">
        <input id="name" name="name" placeholder="Name" type="email" class="form-control input-lg"/>
    </div>
    <br>
    <div class="12u$">
      <textarea id="comment" name="message" placeholder="Comment" rows="4" class="form-control input-lg"></textarea>
    </div>
    <br>
    <ul class="actions">
       <input type="button" class="special btn btn-primary" value="Post Comment" id="postBtn" />
       <input type="button" class="special btn btn-primary" value="Cancel" id="cancelBtn" /> 
    </ul>

  </div>
 </body>
</html>

<script>
var rate;
var product;
var name;
var comment;


$(document).ready(function(){
 
 load_business_data();
 
 function load_business_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#business_list').html(data);
   }
  });
 }
 
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  remove_background(business_id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(business_id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  var rating = $(this).data("rating");
  remove_background(business_id);
  //alert(rating);
  for(var count = 1; count<=index; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
rate=index;
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  var rating = $(this).data("rating");
  remove_background(business_id);
  //alert(rating);
  for(var count = 1; count<=index; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
  rate=index;
  // $.ajax({
  //  url:"insert_rating.php",
  //  method:"POST",
  //  data:{index:index, business_id:business_id},
  //  success:function(data)
  //  {
  //   if(data == 'done')
  //   {
  //    load_business_data();
  //    alert("You have rate "+index +" out of 5");
  //   }
  //   else
  //   {
  //    alert("There is some problem in System");
  //   }
  //  }
  // });
  
 });

$("#postBtn").click(function () {
  product=$("#product").val();
  name=$("#name").val();
  comment=$("#comment").val();

  // alert(product);
  // alert(comment);
  // alert(name);
  
alert("FeedBack posted");
});

});
</script>