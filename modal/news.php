<!-- 一定要記下來 -->
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">新增最新消息資料</h3>
    <hr>
    <table style="margin:auto">
        <tr>
            <td>最新消息資料：</td>
            <td><textarea name="text" cols="60" rows="5"></textarea></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
</form>