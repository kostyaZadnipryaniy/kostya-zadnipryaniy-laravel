@foreach($data as $element)
@endforeach
<form>
    @csrf
    <input type="text" id="projectId">
<button id=""></button>
</form>

<div id="insert_modal_here">
</div>
<script>

    let fromForm = new FormData();
    fromForm.append('_token', $('#_token').val());
    fromForm.append('project_name', $('#projectId').val());
    $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url:"{{ route('front') }}",
          contentType: multipart/form-data,
          processData: false,
          data: fromForm })
           .done(function (data) {
               let parced = JSON.parse(data);
               if (parced.success = true){

               }else {
                   
               }
            });
      
</script>