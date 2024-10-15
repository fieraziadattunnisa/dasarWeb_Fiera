<!DOCTYPE html>
<html>
    <head>
        <tittle>Multiupload Dokumen</tittle>
    </head>
    <body>
        <h2>unggah dokumen</h2>
        <form action="proses_upload" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
            <input type="submit" value="unggah" />
        </form>
    </body>
</html>