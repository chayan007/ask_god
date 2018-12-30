@extends('user.layout.user')
@section('title', 'Share')
@section('content')
    <div class="form-group" style="text-align: center">
        <label for="link" >Press the Button to Copy</label>
        <input type="text" class="form-control" value="{{ $link }}" id="myInput" readonly="true" style="text-align: center">
        <button onclick="myFunction()" class="btn-block btn-error">Copy Link</button>
    </div>
    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection