
<html>
<head>
<script type="text/javascript">
function download_to_textbox(url, el)
{
    $.get(url, null, function(data)
    {
      el.val(data);
    }, "text");
}

$('#open').click(function()
                 {
                    download_to_textbox("page1.txt", $("textarea[name='text']"));
                 });
</script>
</head>
<body>
<form name="abc">
<textarea name="text" rows="20" cols="70">loaded text here</textarea>
<input id="open" type="button" value="open" />

</form>
</body>
</html>