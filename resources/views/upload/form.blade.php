<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @method("post")
@csrf

<input type="file" name="arquivo" />
<button type="submit">Enviar</button>

</form>
