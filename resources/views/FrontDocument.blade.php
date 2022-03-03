<style>
    td{
        border: 1px solid black;
    }
    table{
        border-collapse: collapse;
}
</style>
<table>
 @foreach($FrontDocument as $doc)
 <tr>
<td>{{$doc->name}}</td>
<td>{{$doc->description}}</td>
 </tr>    
       
   @endforeach
   </table>
<form action="{{route('FrontDocument.store')}}" method="POST">
    @csrf
    <input type="text" id="name" name="name">
    <input type="text" id="description" name="description">
<button type="submit" id=""> button </button>
</form>


  

<script>

    let fromForm = new FormData();
    fromForm.append('_token', $('#_token').val());
    fromForm.append('project_name', $('#projectId').val());
    $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'GET',
          url:"{{ route('FrontDocument') }}",
          contentType: multipart/form-data,
          processData: false,
          data: fromForm })
           .done(function (frontDocument) {
               let parced = JSON.parse(frontDocument);
               if (parced.success = true){

               }else {
                   
               }
            });
      
</script>