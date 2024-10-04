

<form action="{{url('')}}/reg" method="post"enctype="multipart/form-data">
    @csrf
  
 textone   <input type="text" name="brand" id="">
  texttwo <input type="text" name="details" id="">
  textthree  <input type="text" name="price" id="">
  imagetwo <input type="file" name="image" id="">
  link <input type="text" name="links" id="">
    <input type="submit" value="submit">
</form>