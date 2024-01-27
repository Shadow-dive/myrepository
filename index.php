<!DOCTYPE html>
<html lang="ja">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ぬるぽ.jpg">
    <title>mochiの倉庫</title>
</html>

<?php
//    $pdo = new PDO("mysql:host=ipアドレス;dbname=データベース名;charset=utf8","root","");
//    $sql = "SELECT * FROM テーブル名;";

//    $stmt = $pdo -> prepare($sql);
//    $stmt -> execute();

//    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
//    print_r($row);

if (isset $_POST["content"]){
    $content = $_POST["content"];
} else{
    $content = "なし";
}
echo "入力内容 : ", $content;
?>
<header>
    <h1>title</h1>
</header>
<section>
    <div class="container">
        <div>
            <table>
                <tr>
                    <th>サイト内リンク</th>
                </tr>
                <tr>
                    <td><a href="index.php">home</a></td>
                </tr>
            </table>
        </div>
        <div>
            <h2>text</h2>
            <form action="index.php" method="post">
	    	    <label>投稿内容</label>
		        <input type="text" name="content">
		        <button type="submit">送信</button>
            </form>
        </div>
    </div>
</section>