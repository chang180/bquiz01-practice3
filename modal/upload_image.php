<!-- 一定要記下來 -->
<form action="api/upload.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">更新校園映像區圖片</h3>
    <hr>
    <table style="margin:auto">
        <tr>
            <td>校園映像區圖片：</td>
            <td><input type="file" name="name"> </td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    </div>
</form>