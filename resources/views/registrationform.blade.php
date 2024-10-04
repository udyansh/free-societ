

<form action="{{url('')}}/regvintagetwelvedata" method="post"enctype="multipart/form-data">
    @csrf
  brand  <input type="text" name="brand" id="">
 details   <input type="text" name="details" id="">
   price <input type="text" name="price" id="">
  image  <input type="file" name="image" id="">
  imagetwo <input type="file" name="imagetwo" id="">
  imagethree <input type="file" name="imagethree" id="">
  imagethree <input type="file" name="imagefour" id="">
  links <input type="text" name="links" id="">
    <input type="submit" value="submit">
</form>