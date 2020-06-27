<!-- 一定要記下來 -->
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">新增動態文字廣告</h3>
    <hr>
    <table style="margin:auto">
        <tr>
            <td>動態文字廣告：</td>
            <td><input type="text" name="text"> </td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
</form>