<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="75%">校園映像資料圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $table = $do;
                $db = new DB($table);

                $total = $db->count("");
                $num = 3;
                $pages = ceil($total / $num);
                $now = $_GET['p'] ?? 1;
                $start = ($now-1)*$num;

                $rows = $db->all("", " limit $start,$num");
                foreach ($rows as $row) {

                ?>
                    <tr class="cent">
                        <td><img src="img/<?= $row['name']; ?>" style="width:100px;height:68px"></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh']) ? 'checked' : ''; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                        <td><input type="button" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload_<?= $table; ?>.php?table=<?= $table; ?>&id=<?= $row['id']; ?>')"></td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <div class="cent">
            <?php
            // echo $now,$pages,$total;
            if (($now - 1) > 0) {
                echo "<a href='?do=$table&p=" . ($now - 1) . "' style='text-decoration:none;font-size:30px'> < </a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                $fontsize = ($now == $i) ? "30px" : "20px";
                echo "<a href='?do=$table&p=$i' style='text-decoration:none;font-size:$fontsize'>$i</a>";
            }
            if (($now + 1) <= $pages) {
                echo "<a href='?do=$table&p=" . ($now + 1) . "' style='text-decoration:none;font-size:30px'> > </a>";
            }

            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?= $table; ?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $table; ?>.php?table=<?= $table; ?>')" value="新增校園映像資料圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>