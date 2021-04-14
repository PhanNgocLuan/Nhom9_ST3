<form action="{{url('/photos')}}" method="POST">
@csrf
  <input type="submit" value="Store">
</form>
